import Vue from 'vue';
import VueRouter from 'vue-router';
import VueI18n from 'vue-i18n';
import vueHeadful from 'vue-headful';
import vueScrollto from 'vue-scrollto';
import vSelect from 'vue-select';
import jQuery from 'jquery';

import '../node_modules/bootstrap/dist/css/bootstrap.css';
import '../node_modules/fork-awesome/css/fork-awesome.css';

import App from './App.vue';
import Home from './components/pages/Home.vue';
import List from './components/pages/List.vue';
// import Alt from './components/pages/Alt.vue';
import Medias from './components/pages/Medias.vue';
import Timeline from './components/pages/Timeline.vue';

import './assets/scss/main.scss';

window.jQuery = jQuery;
window.$ = jQuery;
require('bootstrap'); // eslint-disable-line

Vue.use(VueRouter);
Vue.use(VueI18n);
Vue.component('vue-headful', vueHeadful);
Vue.component('v-select', vSelect);
Vue.use(vueScrollto);

// Ready translated locale messages
const defaultLocale = 'fr';
const locales = [];
// Import locales list
let req = require.context('./locales/', true, /\.yml$/);
req.keys().forEach((key) => {
  locales.push(key.replace(/\.\/(.*)\.yml/, '$1'));
});

// Import logos list
const gafam = [];
const leds = [];
req = require.context('./assets/img/gafam/', true, /\.png$/);
req.keys().forEach((key) => {
  gafam.push(key.replace(/\.\/(.*)\.png/, '$1'));
});
req = require.context('./assets/img/leds/', true, /\.png$/);
req.keys().forEach((key) => {
  leds.push(key.replace(/\.\/(.*)\.png/, '$1'));
});

const lang = window.location.href
  .split('/')[(process.env.BASE_URL === '' || (window.location.href.match(/\//g)).length === 3) ? 3 : 4]
  .substr(0, 2)
  .toLowerCase() || defaultLocale;
document.getElementsByTagName('html')[0].setAttribute('lang', lang);
const userLang = navigator.languages ||
  [navigator.language || navigator.userLanguage];
let defaultRouteLang = '';

const messages = {};

const routes = [
  { path: '/', component: Home },
];

for (let i = 0; i < locales.length; i += 1) {
  messages[locales[i]] = { msg: {} };
  // Locales import
  /* eslint-disable */
  import(/* webpackChunkName: "lang-[request]" */`./locales/${locales[i]}.yml`).then((data) => {
    messages[locales[i]].msg = data;
    messages[locales[i]].lang = locales[i];
    messages[locales[i]]['/'] = `/${process.env.BASE_URL.replace(/(.+)/, '$1/')}`;
    messages[locales[i]]['/img/'] = `${messages[locales[i]]['/']}img/`;
    messages[locales[i]].data = require('./data.yml');
    messages[locales[i]].data.png.gafam = gafam;
    messages[locales[i]].data.png.leds = leds;
    Object.keys(messages[locales[i]].data.services).forEach((k) => {
      messages[locales[i]].data.services[k].F =
        `<a href="${messages[locales[i]].data.services[k].FL}">${messages[locales[i]].data.services[k].F}</a>`;
    });
  }).catch((err) => {
    console.error(err);
  });
  /* eslint-enable */

  // Localized routes
  routes.push(
    { path: `/${locales[i]}`, component: Home },
    { path: `/${locales[i]}/list`, component: List },
    // { path: `/${locales[i]}/alternatives`, component: Alt },
    { path: `/${locales[i]}/medias`, component: Medias },
    { path: `/${locales[i]}/timeline`, component: Timeline },
  );
}
// define defaultRouteLang
for (let j = 0; j < userLang.length; j += 1) { // check if user locales
  for (let i = 0; i < locales.length; i += 1) { // matches with app locales
    if (defaultRouteLang === '' && userLang[j].substring(0, 2).toLowerCase() === locales[i]) {
      defaultRouteLang = locales[i];
    }
  }
}

// Home redirection
const currentURL = window.location.href.replace(/\/+$/, '');
if ((currentURL.split('/')[3] === undefined || currentURL.split('/')[3] === process.env.BASE_URL) &&
  (currentURL.split('/')[4] === undefined)) {
  if (defaultRouteLang === '') {
    defaultRouteLang = defaultLocale;
  }
  window.location.href = `${currentURL}/${defaultRouteLang}/`;
}

// Create VueI18n instance with options
const i18n = new VueI18n({
  locale: lang,
  fallbackLocale: defaultLocale,
  messages,
  silentTranslationWarn: true,
});

// Framanav
if (!window.vuefsPrerender && document.querySelectorAll('script[src$="nav.js"]').length < 1) {
  const navConfig = document.createElement('script');
  navConfig.innerHTML = 'l$ = { js: { j$: \'noConflict\' } }';
  document.getElementsByTagName('head')[0].appendChild(navConfig);
  const nav = document.createElement('script');
  nav.src = 'https://framasoft.org/nav/nav.js';
  document.getElementsByTagName('head')[0].appendChild(nav);
}

// Routes
const router = new VueRouter({
  routes,
  mode: 'history',
  base: `${__dirname}${process.env.BASE_URL}`,
});

new Vue({ // eslint-disable-line no-new
  el: '#app',
  router,
  i18n,
  mounted() {
    // You'll need this for renderAfterDocumentEvent.
    document.dispatchEvent(new Event('render-event'));
  },
  render: h => h(App),
});
