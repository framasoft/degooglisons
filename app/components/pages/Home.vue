<template>
  <main id="home">
    <div class="row landing">
      <div class="container-fluid">
        <div class="container">
          <I18n />
          <h1 v-html="$t('msg.meta.DIo')"></h1>
          <div class="row">
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well"><a href="#enjeux" v-html="$t('msg.home.intro.bubble1')"></a></p>
            </div>
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well"><a href="#solutions" v-html="$t('msg.home.intro.bubble2')"></a></p>
            </div>
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well">
                <router-link :to="'/' + $t('msg.meta.lang') + '/list'"
                  v-html="$t('msg.home.intro.bubble3')">
                </router-link>
              </p>
            </div>
          </div>
        </div>

        <div class="container ombre choice">
          <div class="row text-center">
            <router-link :to="'/' + $t('msg.meta.lang') + '/list'">
              <div class="col-md-6 fb_f6 h3 fc_light" style="margin:0 ; padding:5%">
                <p class="fc_light">{{ $t('msg.home.intro.btnList1') }}</p>
                <p><small><i class="fc_light">{{ $t('msg.home.intro.btnList2') }}</i></small></p>
                <p class="btn-lg btn-default" v-html="$t('msg.home.intro.btnList3')"></p>
              </div>
            </router-link>
            <router-link :to="'/' + $t('msg.meta.lang') + '/alternatives'">
              <div class="col-md-6 fb_o6 h3" style="margin:0 ; padding:5%">
                <p class="fc_light">{{ $t('msg.home.intro.btnAlt1') }}</p>
                <p><small><i class="fc_light">{{ $t('msg.home.intro.btnAlt2') }}</i></small></p>
                <p class="btn-lg btn-default" v-html="$t('msg.home.intro.btnAlt3')"></p>
              </div>
            </router-link>
          </div>
        </div>
      </div>
    </div>

    <div class="row more">
      <div class="container ombre">
        <div class="col-sm-12">
          <h2>{{ $t('msg.home.more.title') }}</h2>
          <p class="accroche" v-html="$t('msg.home.more.desc')"></p>
          <div class="row">
            <div class="col-sm-4">
              <p class="text-center text-primary" aria-hidden="true">
                <a :href="$t('msg.link.docs')">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-graduation-cap fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('msg.home.more.docs.desc')"></p>
              <p>
                <a :href="$t('msg.link.docs')" class="btn btn-xs btn-default">
                  {{ $t('msg.home.more.docs.btn') }}
                </a>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="text-center text-success" aria-hidden="true">
                <a :href="$t('msg.link.cloud')">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="glyphicon glyphicon-tree-deciduous fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('msg.home.more.cloud.desc')"></p>
              <p>
                <a :href="$t('msg.link.cloud')" class="btn btn-xs btn-default">
                  {{ $t('msg.home.more.cloud.btn') }}
                </a>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="text-center text-chatons" aria-hidden="true">
                <a :href="$t('msg.link.chatons')">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-paw fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('msg.home.more.chatons.desc')"></p>
              <p>
                <a :href="$t('msg.link.chatons')" class="btn btn-xs btn-default">
                  {{ $t('msg.home.more.chatons.btn') }}
                </a>
              </p>
            </div>
          </div>

          <h2>{{ $t('msg.home.why.title') }}</h2>
          <p class="accroche" v-html="$t('msg.home.why.desc')"></p>
          <div class="row">
            <div class="col-sm-4">
              <p class="text-center text-danger" aria-hidden="true">
                <a href="#enjeux">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-user-secret fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('msg.home.why.explain.desc')"></p>
              <p>
                <a href="#enjeux" class="btn btn-xs btn-default">
                  {{ $t('msg.home.why.explain.btn') }}
                </a>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="text-center text-success" aria-hidden="true">
                <a href="#solutions">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-shield fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('msg.home.why.props.desc')"></p>
              <p>
                <a href="#solutions" class="btn btn-xs btn-default">
                  {{ $t('msg.home.why.props.btn') }}
                </a>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="text-center text-primary" aria-hidden="true">
                <a :href="$t('msg.link.S') + '/association'">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-id-card fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('msg.home.why.who.desc')"></p>
              <p>
                <a :href="$t('msg.link.S') + '/association'" class="btn btn-xs btn-default">
                  {{ $t('msg.home.why.who.btn') }}
                </a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-12 well">
          <div class="row">
            <div class="col-sm-6">
              <h2>{{ $t('msg.home.contact.title') }}</h2>
              <p v-html="$t('msg.home.contact.text1')"></p>
              <ul v-html="$t('msg.home.contact.text2')"></ul>
              <p v-html="$t('msg.home.contact.text3')"></p>
              <p class="clearfix">
                <a :href="$t('msg.link.contact')" class="btn btn-primary col-sm-6 col-sm-offset-3 col-xs-12">
                  <i class="fa fa-fw fa-envelope" aria-hidden="true"></i> 
                  {{ $t('msg.home.contact.btn') }}
                </a>
              </p>
            </div>
            <div class="col-sm-6">
              <h2>{{ $t('msg.home.support.title') }}</h2>
              <p v-html="$t('msg.home.support.text1')"></p>
              <ul v-html="$t('msg.home.support.text2')"></ul>
              <p v-html="$t('msg.home.support.text3')"></p>
              <p class="clearfix">
                <a class="btn btn-soutenir col-sm-6 col-sm-offset-3 col-xs-12" :href="$t('msg.link.S')">
                  <i class="fa fa-w fa-heart" aria-hidden="true"></i>
                  {{ $t('msg.home.support.btn') }}
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row" id="speakabout">
      <div class="container ombre text-center">
        <h2>{{ $t('msg.home.speakabout.title') }}</h2>
        <ul class="list-inline">
          <li v-for="media in medias">
            <a :href="media.url"><img :src="baseMedias+media.img" :alt="media.alt"></a>
          </li>
        </ul>
        <p>
          <router-link :to="'/' + $t('msg.meta.lang') + '/medias'" class="btn btn-default btn-lg"
            v-html="$t('msg.home.speakabout.btn')">
          </router-link>
        </p>
      </div>
    </div>

    <div class="row" id="enjeux">
      <div class="container ombre">
        <h2>{{ $t('msg.home.explain.stakes.title') }}</h2>
        <p v-html="$t('msg.home.explain.stakes.text1')"></p>
        <p v-html="$t('msg.home.explain.stakes.text2')"></p>

        <div class="clearfix">
          <div class="col-sm-12">
            <h2>{{ $t('msg.home.explain.danger.title') }}</h2>
            <p v-html="$t('msg.home.explain.danger.text')"></p>
          </div>
          <div class="clearfix">
            <div class="col-sm-6">
              <h3 id="t2-espionnum"><span class="fa fa-fw fa-eye"></span> {{ $t('msg.home.explain.danger.espionum.title') }}</h3>
              <p v-html="$t('msg.home.explain.danger.espionum.desc')"></p>
              <p>
                <a :href="$t('msg.home.explain.danger.espionum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('msg.home.explain.danger.espionum.ref'); modal.title = $t('msg.home.explain.danger.espionum.title')">
                  {{ $t('msg.txt.examples') }}
                </a>
              </p>
              <p class="text-center">
                <img :src="baseImg + $t('msg.medias.tabs.tab2.img[1][1]')" alt="" />
              </p>
            </div>
            <div class="col-sm-6">
              <h3 id="t2-privatum"><span class="fa fa-fw fa-user"></span> {{ $t('msg.home.explain.danger.privatum.title') }}</h3>
              <p v-html="$t('msg.home.explain.danger.privatum.desc')"></p>
              <p>
                <a :href="$t('msg.home.explain.danger.privatum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('msg.home.explain.danger.privatum.ref'); modal.title = $t('msg.home.explain.danger.privatum.title')">
                  {{ $t('msg.txt.examples') }}
                </a>
              </p>
            </div>
          </div>
          <div class="clearfix">
            <div class="col-sm-6">
              <h3 id="t2-centralisum"><span class="fa fa-fw fa-dot-circle-o"></span> {{ $t('msg.home.explain.danger.centralisum.title') }}</h3>
              <p v-html="$t('msg.home.explain.danger.centralisum.desc')"></p>
              <p>
                <a :href="$t('msg.home.explain.danger.centralisum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('msg.home.explain.danger.centralisum.ref'); modal.title = $t('msg.home.explain.danger.centralisum.title')">
                  {{ $t('msg.txt.examples') }}
                </a>
              </p>
            </div>
            <div class="col-sm-6">
              <h3 id="t2-fermetum"><span class="fa fa-fw fa-lock"></span> {{ $t('msg.home.explain.danger.fermetum.title') }}</h3>
              <p v-html="$t('msg.home.explain.danger.fermetum.desc')"></p>
              <p>
                <a :href="$t('msg.home.explain.danger.fermetum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('msg.home.explain.danger.fermetum.ref'); modal.title = $t('msg.home.explain.danger.fermetum.title')">
                  {{ $t('msg.txt.examples') }}
                </a>
              </p>
            </div>
            <p class="col-sm-12 text-center">
              <img :src="baseImg + $t('msg.medias.tabs.tab2.img[0][1]')" alt="" />
            </p>
            <modal
              id="myFramaModal"
              v-model="modal.open"
              :title="modal.title"
              :ok-text="$t('msg.txt.close')"
              tabindex="-1"
              role="dialog"
              aria-labelledby="myFramaLabel"
              aria-hidden="true"
              size="lg"
            >
              <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" :src="modal.href"></iframe>
              </div>
              <div slot="footer">
                <button
                  class="btn btn-default"
                  @click="modal.open = false">{{ $t('msg.txt.close') }}
                </button>
              </div>
            </modal>
          </div>
        </div>
      </div>
    </div>

    <div class="row" id="solutions">
      <div class="container ombre">
        <div class="clearfix">
          <div class="col-sm-12">
            <h2><a id="leds"></a>{{ $t('msg.home.explain.props.title') }}</h2>
            <p v-html="$t('msg.home.explain.props.text')"></p>
          </div>
          <div class="col-sm-6">
              <h3><span class="fa fa-fw fa-unlock"></span> {{ $t('msg.home.explain.props.libre.title') }}</h3>
              <p v-html="$t('msg.home.explain.props.libre.text1')"></p>
              <p v-html="$t('msg.home.explain.props.libre.text2')"></p>
              <p><strong v-html="$t('msg.home.explain.props.libre.text3')"></strong></p>
          </div>
          <div class="col-sm-6">
              <h3><span class="fa fa-fw fa-eye-slash"></span> {{ $t('msg.home.explain.props.ethic.title') }}</h3>
              <p v-html="$t('msg.home.explain.props.ethic.text1')"></p>
              <p v-html="$t('msg.home.explain.props.ethic.text2')"></p>
              <p><strong v-html="$t('msg.home.explain.props.ethic.text3')"></strong></p>
          </div>
        </div>
        <div class="clearfix">
          <div class="col-sm-6">
              <h3><span class="fa fa-fw fa-share-alt"></span> {{ $t('msg.home.explain.props.decent.title') }}</h3>
              <p v-html="$t('msg.home.explain.props.decent.text1')"></p>
              <p v-html="$t('msg.home.explain.props.decent.text2')"></p>
              <p><strong v-html="$t('msg.home.explain.props.decent.text3')"></strong></p>
          </div>
          <div class="col-sm-6">
              <h3><span class="fa fa-fw fa-users"></span> {{ $t('msg.home.explain.props.solid.title') }}</h3>
              <p v-html="$t('msg.home.explain.props.solid.text1')"></p>
              <p v-html="$t('msg.home.explain.props.solid.text2')"></p>
              <p><strong v-html="$t('msg.home.explain.props.solid.text3')"></strong></p>
          </div>
        </div>
        <p class="col-sm-12 text-center">
          <img :src="baseImg + $t('msg.medias.tabs.tab2.img[4][1]')" alt="" />
        </p>
        <div class="clearfix">
          <h2>{{ $t('msg.home.explain.concrete.title') }}</h2>
          <p v-html="$t('msg.home.explain.concrete.text1')"></p>
          <p v-html="$t('msg.home.explain.concrete.text2')"></p>
          <p v-html="$t('msg.home.explain.concrete.text3')"></p>
          <p v-html="$t('msg.home.explain.concrete.text4')"></p>
          <p v-html="$t('msg.home.explain.concrete.text5')"></p>
          <p class="text-center">
            <router-link :to="'/' + $t('msg.meta.lang') + '/list'"
              class="btn btn-warning btn-lg"
              v-html="$t('msg.list.title') + ' ' + $t('msg.meta.f')">
            </router-link>
          </p>
          <p><img :src="baseImg + 'img/cloud.jpg'" alt="" class="center-block img-responsive" /></p>
        </div>
        <Signature />
      </div>
    </div>
    <BackTop />
  </main>
</template>

<script>
import { Modal } from 'uiv';
import I18n from '../partials/I18n.vue';
import Signature from '../partials/Signature.vue';
import BackTop from '../partials/BackTop.vue';

export default {
  name: 'Home',
  components: {
    Modal,
    I18n,
    Signature,
    BackTop,
  },
  data() {
    const { lang } = document.getElementsByTagName('html')[0];
    const base = (window.location.href.split('/')[3] !== lang) ? `/${window.location.href.split('/')[3]}` : '';
    return {
      modal: {
        open: false,
      },
      baseImg: `${base}/img/`,
      baseMedias : `${base}/img/medias/`,
      medias: [
        {
          url: 'https://web.archive.org/web/20150417064442/http://www.canalplus.fr:80/c-emissions/c-la-nouvelle-edition/pid6850-la-nouvelle-edition.html',
          img: 'canal_nb.png',
          alt: 'Canal+',
        },
        {
          url: 'http://media.radiofrance-podcast.net/podcast09/10175-17.08.2015-ITEMA_20783026-0.mp3',
          img: 'france_culture_nb.png',
          alt: 'France Culture',
        },
        {
          url: 'http://www.francetvinfo.fr/replay-radio/nouveau-monde/nouveau-monde-est-il-possible-de-degoogliser-le-web_1854529.html',
          img: 'france_info_nb.png',
          alt: 'France Info',
        },
        {
          url: 'http://www.franceinter.fr/emission-comme-un-bruit-qui-court-la-libye-au-bord-du-chaos-ces-francais-qui-partent-faire-le-jihade',
          img: 'france_inter_nb.png',
          alt: 'France Inter',
        },
        {
          url: 'http://www.lagedefaire-lejournal.fr/framasoft-services-libres-faciliter-nos-echanges/',
          img: 'age_de_faire_nb.png',
          alt: 'L’âge de faire',
        },
        {
          url: 'http://www.latribune.fr/technos-medias/internet/les-chatons-toutes-griffes-dehors-face-aux-geants-du-net-557084.html',
          img: 'la_tribune_nb.png',
          alt: 'La Tribune',
        },
        {
          url: 'http://www.lefigaro.fr/secteur/high-tech/pratique/2016/10/05/32002-20161005ARTFIG00176-des-solutions-alternatives-pour-vivre-sans-google-facebook-et-microsoft.php',
          img: 'le_figaro_nb.png',
          alt: 'Le Figaro',
        },
        {
          url: 'http://www.humanite.fr/logiciel-libre-et-ess-une-economie-lintention-de-tous-564379',
          img: 'l_humanite_nb.png',
          alt: 'L’Humanité',
        },
        {
          url: 'http://www.liberation.fr/futurs/2016/10/03/framasoft-accelere-la-degooglisation-du-web_1519262',
          img: 'liberation_nb.png',
          alt: 'Libération',
        },
        {
          url: 'http://www.nextinpact.com/news/96764-degooglisons-internet-saison-2-framasoft-lance-produit-par-jour-cette-semaine.htm',
          img: 'next_inpact_nb.png',
          alt: 'Next Inpact',
        }
      ]
    }
  },
  mounted () {
    $('a:has(b)').css('text-decoration','none');

    const target = [
      '#t2-espionnum', '#t2-fermetum', '#t2-privatum', '#t2-centralisum',
      '#dangers', '#leds', '#enjeux', '#solutions', '#concret'
    ];

    $(target.join()).hide();

    $(`a[href="${target.join('"], a[href="')}"]`).on('click', () => {
      $(target.join()).show();
    });
  }
}
</script>
