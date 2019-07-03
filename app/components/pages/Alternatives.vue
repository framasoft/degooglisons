<template>
  <main>
    <div class="container ombre">
      <header-component/>
      <div class="row" id="bloc-carte">
        <div class="map col-lg-8 clearfix">
          <h2 class="h3">{{ $t('map.title') }}</h2>
          <div id="map-container">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAtoAAANSAQMAAABhtPtxAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAADZQAAA2UARCw/3wAAAAHdElNRQfgCwQIJQGzxaatAAAAY0lEQVR42u3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgYTTZAAHjzPeQAAAAAElFTkSuQmCC"
                :alt="$t('map.alt')" id="carte" usemap="#cartemap"
              />
              <map id="cartemap" name="cartemap">
                <!-- Village, Big camps, NSA-->
                <area
                  v-for="(camp, key)  in $root.camps"
                  :id="'a-' + key" :coords="camp.pos" :class="key"
                  :alt="text($t('camps.' + key + '.title'))"
                  :title="text($t('camps.' + key + '.title'))"
                  shape="circle" :data-maphilight="JSON.stringify(mapHighlight[camp.highlight])"
                  href="javascript:void(0);" tabindex="-1"
                  @click="modal2.open = true; modal2.key = key;"
                >
                <!-- Little camps -->
                <area
                  v-for="(service, key) in $root.services"
                  v-if="(service.pos)"
                  :id="'a-' + key"  :alt="text(service.name)"
                  :coords="service.pos" shape="circle"
                  :data-maphilight="JSON.stringify(mapHighlight.services)"
                  href="javascript:void(0);"
                  @click="modal.open = true; modal.key = key;"
                  tabindex="-1" >
              </map>
              <video :poster="`${$root['/']}img/${$route.meta.lang}/Carte2016-romains.png`" autoplay muted loop ref="mapVideo" id="mapVideo">
                <source :src="`${$root['/']}img/${$route.meta.lang}/Carte2016-animation.webm`" type="video/webm" />
                <source :src="`${$root['/']}img/${$route.meta.lang}/Carte2016-animation.mp4`" type="video/mp4">
                <img :src="`${$root['/']}img/${$route.meta.lang}/Carte2016-romains.png`" alt="" style="width:100%;" />
              </video>
              <div class="play-pause" v-if="play">
                <button :title="$t('txt.pause')"
                  @click="play=false; $refs.mapVideo.pause()">
                  <i class="fa fa-fw fa-pause" aria-hidden="true"></i>
                  <span class="sr-only">{{ $t('txt.pause') }}</span>
                </button>
              </div>
              <div class="play-pause" v-else>
                <button :title="$t('txt.play')"
                  @click="play=true; $refs.mapVideo.play()">
                  <i class="fa fa-fw fa-play" aria-hidden="true"></i>
                  <span class="sr-only">{{ $t('txt.play') }}</span>
                </button>
              </div>
          </div>
        </div>

        <div class="col-lg-4">
          <!-- Recherche -->
          <div class="well clearfix" style="margin:60px auto">
            <label class="col-xs-1 text-right" style="padding: 0" for="tags-select">
              <i class="fa fa-2x fa-search"></i>
              <span class="sr-only">{{ $t('txt.searchByAlt') }}</span>
            </label>
            <div class="col-xs-11">
              <v-select id="tags-select"
                label="gafam"
                :options="tags($root.services)"
                :placeholder="$t('txt.searchByAlt')"
                v-model="results"
                @input="modal.key = results.key ; modal.open = (results.key !== undefined && results.key !== ''); "
              ></v-select>
            </div>
          </div>

          <!-- Intro alternatives -->
          <p v-html="$t('alt.text1')"></p>
          <p v-html="$t('alt.text2')"></p>
          <p v-html="$t('alt.text3')"></p>
          <p class="text-center" id="network" aria-hidden="true">
            <a href="#home"><i class="fa fa-fw fa-home"></i></a> →
            <i class="fa fa-fw fa-cloud"></i> →
            <i class="fa fa-fw fa-server"></i>
          </p>
          <p v-html="$t('alt.text4')"></p>
        </div>
      </div>
    </div>

    <!-- <modal> --------------------------------------------- -->
    <modal
      id="FramaModal"
      v-model="modal.open"
      :ok-text="$t('txt.close')"
      tabindex="-1"
      role="dialog"
      aria-labelledby="FramaLabel"
      aria-hidden="true"
      :class="'m-' + modal.key"
      size="lg"
      v-if="modal.key && modal.key !== 'gmail'"
    >
      <!-- modal-header -->
      <div slot="title">
        <img class="pull-left" :src="'https://framasoft.org/nav/img/icons/' + noFrama($root.services[modal.key].F) + '.png'">
        <span class="frama" v-html="$root.services[modal.key].F"></span><br>
        <span class="desc" v-html="$t('services.' + modal.key + '.lDesc')"></span>
      </div>

      <!-- alternative to -->
      <div class="well">
        <p>
          {{ $t('txt.asAltTo') }}
          <span title="Google, Apple, Facebook, Amazon, Microsoft">
            <i class="fa fa-fw fa-google" aria-hidden="true"></i>
            <i class="fa fa-fw fa-apple" aria-hidden="true"></i>
            <i class="fa fa-fw fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-fw fa-amazon" aria-hidden="true"></i>
            <i class="fa fa-fw fa-windows" aria-hidden="true"></i>
          </span>
          <span class="sr-only">GAFAM</span>
          {{ $t('txt.andCo') }}{{ $t('txt.like') }}
        </p>
        <ul class="list-group">
          <li class="list-group-item"
            v-for="gafam in $root.services[modal.key].gafam"
            >
            <img
              v-if="$root.png.gafam.indexOf(sanitize(gafam)) > -1"
              :src="img.gafam[sanitize(gafam)]" alt="" />
            {{ gafam.replace(/@:[.a-z]+ /g, '') }}
          </li>
        </ul>
        <p v-if="$root.services[modal.key].FDate.length === 4"
          class="wip">
          {{ $t('txt.weWillProp') }}
          <span v-html="$root.services[modal.key].F"></span>
          <span class="small">
            {{ $t('txt.releaseOn') }}
            {{ $root.services[modal.key].FDate }}
            {{ $t('txt.withHelp') }}
            <a :href="$t('link.S')"
              class="btn btn-xs btn-soutenir" :title="$t('meta.support')">
              <i class="fa fa-fw fa-heart" aria-hidden="true"></i>
              <span class="sr-only">{{ $t('meta.support') }}</span>
            </a>
          </span>
        </p>
        <p v-else>
          {{ $t('txt.wePropNow') }}
          <span v-html="$root.services[modal.key].F"></span>
          <span class="small" v-html="$t('txt.since') + ' ' + $root.services[modal.key].FDate"></span>
        </p>
      </div>

      <!-- web-screen -->
      <div class="web-browser">
        <div class="toolbar">
          <img :src="$root['/'] + 'img/browser-left.png'" alt="" />
          <div class="search-bar"></div>
          <img :src="$root['/'] + 'img/browser-right.png'" alt="" />
        </div>
        <img
          :src="$root['/'] + 'img/screens/' + noFrama($root.services[modal.key].F) + '-full.png'"
          class="img-responsive" alt=""
        />
      </div>

      <!-- desc -->
      <p v-html="$t('services.' + modal.key + '.mBody.desc').replace(/@framaservice/g, $root.services[modal.key].F)"></p>

      <!-- video / desc -->
      <p v-if="$t('services.' + modal.key + '.mBody.more') !== 'services.' + modal.key + '.mBody.more'"
         v-html="$t('services.' + modal.key + '.mBody.more').replace(/@framaservice/g, $root.services[modal.key].F)"></p>

      <!-- features -->
      <div v-if="$t('services.' + modal.key + '.mBody.feat') !== 'services.' + modal.key + '.mBody.feat'">
        <h5 class="h3 violet">{{ $t('txt.features') }}</h5>
        <ul v-if="Array.isArray($t('services.' + modal.key + '.mBody.feat'))">
          <li
            v-for="(item) in $t('services.' + modal.key + '.mBody.feat')"
            v-html="item.replace(/@framaservice/g, $root.services[modal.key].F)"
          ></li>
        </ul>
        <p
          v-else
          v-html="$t('services.' + modal.key + '.mBody.feat').replace(/@framaservice/g, $root.services[modal.key].F)">
        </p>
      </div>

      <!-- modal-footer -->
      <div slot="footer">
        <!-- source / framacloud -->
        <p class="precisions text-left" v-if="!$root.services[modal.key].mFooter">
          <span v-html="$root.services[modal.key].F"></span>
          {{ $t('txt.basedOn') }}
          <span v-html="$root.services[modal.key].S"></span>
          <span v-if="$root.services[modal.key].CL">
            <br><i class="fa fa-leaf" aria-hidden="true"></i>
            {{ $t('txt.howTo') }}<a :href="$root.services[modal.key].CL" class="text-success">{{ $t('txt.installOnServer') }}</a>
          </span>
        </p>
        <!-- alt / docs -->
        <div class="col-md-6 text-left">
          <a :href="'#' + modal.key" class="btn btn-alt btn-default"
            @click="modal.open = false;">
            {{ $t('txt.otherAlt') }}</a>
          <a :href="$t('link.docs') + sanitize($root.services[modal.key].S)"
            class="btn btn-alt btn-default">{{ $t('txt.docs') }}</a>
        </div>
        <!-- use -->
        <div class="col-md-6 text-right">
          <a :href="$root.services[modal.key].FL"
            class="btn btn-lg btn-link text-uppercase">
            {{ $t('txt.use') }}</a>
        </div>
      </div>
    </modal>
    <modal
      id="FramaModalGmail"
      v-model="modal.open"
      :ok-text="$t('txt.close')"
      tabindex="-1"
      role="dialog"
      aria-labelledby="FramaLabel"
      aria-hidden="true"
      :class="'m-' + modal.key"
      v-if="modal.key && modal.key === 'gmail'"
    >
      <div slot="title">
        <h1><span class="desc" v-html="$t('services.' + modal.key + '.lDesc')"></span></h1>
      </div>
      <p class="alert alert-warning" v-html="$t('services.' + modal.key + '.mBody').replace('@gafamservices', $root.services[modal.key].gafam.join(', '))"></p>
      <div slot="footer">
        <a :href="'#' + modal.key" class="btn btn-alt btn-default"
          @click="modal.open = false;">
          {{ $t('txt.otherAlt') }}</a>
        </div>
    </modal>
    <!-- </modal> -------------------------------------------- -->

    <!-- <modal2> --------------------------------------------- -->
    <modal
      id="CampsModal"
      v-model="modal2.open"
      :ok-text="$t('txt.close')"
      tabindex="-1"
      role="dialog"
      aria-labelledby="CampsLabel"
      aria-hidden="true"
    >
      <div slot="title">
        <h1 id="CampsLabel" class="text-center" v-html="$t('camps.' + modal2.key + '.title')"></h1>
      </div>
      <p v-html="$t('camps.' + modal2.key + '.text1')"></p>
      <p v-html="$t('camps.' + modal2.key + '.text2')"></p>
      <p class="text-center">
        <img :src="`${$root['/']}img/${$route.meta.lang}/${$t($root.camps[modal2.key].img)}.png`" alt="" />
      </p>
      <div slot="footer">
        <div class="text-right">
          <a v-if="$root.camps[modal2.key].more" :href="$root['/'] + $t('lang') + '/#enjeux'"
            class="btn btn-lg btn-link text-uppercase">
            {{ $t('txt.more') }}
          </a>
          <a href="javascript:void(0);"
            @click="modal2.open = false;"
            class="btn btn-lg btn-link text-uppercase">
            {{ $t('txt.close') }}
          </a>
        </div>
      </div>
    </modal>
    <!-- </modal2> -------------------------------------------- -->

    <!-- Listes des alternatives -->
    <div id="tips" class="row">
      <div class="container ombre">
        <div id="sticky" class="hidden-xs cats" :style="scrollMenu.sticky">
          <div
            class="scroller scroller-left"
            v-if="scrollMenu.btnLeft"
            @click="scrollMenu.left += scrollMenu.visibleWidth; scrollMenuRefresh();">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div
            class="scroller scroller-right"
            v-if="scrollMenu.btnRight"
            @click="scrollMenu.left -= scrollMenu.visibleWidth; scrollMenuRefresh();">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
          <nav class="navbar navbar-default nav-cats" role="navigation">
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
              <ul
                class="nav navbar-nav nav-tabs" role="tablist"
                :style="'left: ' + scrollMenu.left + 'px'">
                <li><a href="#bloc-carte" :title="$t('txt.backToMap')"
                  data-toggle="tooltip" data-placement="bottom">
                  <img
                    :src="`${$root['/']}img/${$route.meta.lang}/carte_petite.png`"
                    :alt="$t('txt.backToMap')"
                  >
                </a></li>
                <li v-for="(icon, cat) in $root.cat1.icons">
                  <a :href="'#' + cat" :title="$t('cat1.' + cat)"
                    data-toggle="tooltip" data-placement="bottom">
                    <i :class="'fa fa-' + icon" aria-hidden="true"></i> <span>{{ $t('cat1.' + cat) }}</span></a></li>
              </ul>
            </div>
          </nav>
        </div>

        <div class="panel-group col-xs-12">
          <div v-for="(icon, cat) in $root.cat1.icons">
            <a class="anchor" :id="cat" rel="nofollow"></a>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title text-center">
                  <i :class="'fa fa-fw fa-' + icon" aria-hidden="true"></i>
                  <span>{{ $t('cat1.' + cat) }}</span>
                </h2>
              </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th class="text-center" scope="col" v-html="$t('alt.table.th1')">'.$t['alt']['alt1'].'</th>
                    <th class="text-center" scope="col" v-html="$root.meta.fname + ' ' + $t('alt.table.th2')"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(service, key) in $root.services" v-if="service.c1 === cat"
                    :class="'alt-' + key">
                    <td>
                      <a class="anchor" :id="key" rel="nofollow"></a>
                      <h3 class="h5">
                        <a :href="'#' + key" rel="nofollow" v-html="$t('services.' + key + '.sDesc')"></a>
                      </h3>
                      <ul class="list-group">
                        <li class="list-group-item"
                          v-for="gafam in $root.services[key].gafam"
                          >
                          <img
                            v-if="$root.png.gafam.indexOf(sanitize(gafam)) > -1"
                            :src="img.gafam[sanitize(gafam)]" alt="" />
                          {{ gafam.replace(/@:[.a-z]+ /g, '') }}
                        </li>
                      </ul>
                    </td>
                    <td>
                      <ul class="list-group">
                        <li class="list-group-item"
                          v-if="service.F"
                          >
                          <img
                            v-if="$root.png.leds.indexOf(sanitize($root.services[key].F)) > -1"
                            :src="img.leds[sanitize($root.services[key].F)]" alt="" />
                          <span v-html="$root.services[key].F"></span>
                          <i class="fa fa-cloud pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('txt.altOnline')"></i>
                        </li>
                        <li class="list-group-item"
                          v-if="service.S"
                          >
                          <img
                            v-if="$root.png.leds.indexOf(sanitize($root.services[key].S)) > -1"
                            :src="img.leds[sanitize($root.services[key].S)]" alt="" />
                          <span v-html="$root.services[key].S"></span>
                          <i class="fa fa-server pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('txt.altOffline')"></i>
                        </li>
                      </ul>
                      <ul class="list-group">
                        <li class="list-group-item"
                          v-for="alt in service.altOn"
                          v-if="alt !== ''"
                          >
                          <img
                            v-if="$root.png.leds.indexOf(sanitize(alt)) > -1"
                            :src="img.leds[sanitize(alt)]" alt="" />
                          <span v-html="alt"></span>
                          <i class="fa fa-cloud pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('txt.altOnline')"></i>
                        </li>
                        <li class="list-group-item"
                          v-for="alt in service.altOff"
                          v-if="alt !== ''"
                          >
                          <img
                            v-if="$root.png.leds.indexOf(sanitize(alt)) > -1"
                            :src="img.leds[sanitize(alt)]" alt="" />
                          <span v-html="alt"></span>
                          <i class="fa fa-server pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('txt.altOffline')"></i>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <Signature />
        </div>
      </div>
    </div>
    <BackTop />
  </main>
</template>

<script>
import { Modal, Dropdown, Btn, ScrollSpy } from 'uiv';
import HeaderComponent from '../partials/Header.vue';
import Signature from '../partials/Signature.vue';
import BackTop from '../partials/BackTop.vue';
import { rmDiacritics, text, sanitize, noFrama } from '../../tools';

export default {
  name: 'Alt',
  components: {
    HeaderComponent,
    Modal, Dropdown, Btn,
    Signature,
    BackTop,
  },
  data() {
    return {
      modal: {
        open: false,
        key: 'bitly',
      },
      modal2: {
        open: false,
        key: 'village',
      },
      play: true,
      results: '',
      img: { gafam: {}, leds: {} },
      scrollMenu: {
        left: 0,
        listWidth: 0,
        visibleWidth: 0,
        btnLeft: false,
        btnRight: true,
        sticky: 'position: relative;'
      },
      mapHighlight: {
        village: {
          strokeColor: '6A5687',
          strokeWidth: 3,
          fillColor : 'ffffff',
          fillOpacity: 0.2,
        },
        camps: {
          strokeColor: '0C5B7A',
          strokeWidth: 3,
          fillColor : 'ffffff',
          fillOpacity: 0.2,
        },
        services: {
          strokeColor: '677835',
          strokeWidth: 2,
          fillColor: 'ffffff',
          fillOpacity: 0.2,
        },
      },
    }
  },
  mounted() {
    this.scrollMenuRefresh();
    window.onresize = () => {
      this.scrollMenuRefresh();
      this.stickyCSS();
    };
    window.onscroll = () => {
      this.stickyCSS();
    };
    if (!window.vuefsPrerender) {
      this.loadImg();

      /* eslint-disable */
      require('../../jquery.maphilight.js');
      require('../../imageMapResizer.min.js');
      /* eslint-enable */
    }

    $(document).ready(function() {
      if (!window.vuefsPrerender) {
        // Init map
        $('map').imageMapResize();
        $('#carte').maphilight();
      }

      // Sticky (to replace by https://uiv.wxsm.space/scroll-spy/)
      // (works thanks to the framanav actually)
      $('body').attr({
        'data-spy': 'scroll',
        'data-target': '#sticky .navbar'
      });
    });
  },
  methods: {
    text(html) {
      return text(html)
    },
    sanitize(html) {
      return sanitize(rmDiacritics(text(html)))
    },
    noFrama(html) {
      return noFrama(this.sanitize(html))
    },
    tags(services) {
      let tags = [];
      Object.keys(services).forEach((k) => {
        if (Array.isArray(services[k].gafam) && services[k].pos) {
          const main = services[k].gafam[0];
          const others = services[k].gafam
            .join(', ')
            .replace(`${main}`, '')
            .replace(/^, ?/, '')
            .replace(/^/, '(')
            .replace(/$/, ')')
            .replace('()', '');
          tags.push({
            key: k,
            gafam: `${main} ${others}`
          });
        }
      });
      return tags;
    },
    scrollMenuRefresh() {
      this.scrollMenu.listWidth = document.querySelector('.nav-cats .nav-tabs').offsetWidth;
      this.scrollMenu.visibleWidth = document.querySelector('.nav-cats').offsetWidth;
      if (this.scrollMenu.visibleWidth - this.scrollMenu.left < this.scrollMenu.listWidth) {
        this.scrollMenu.btnRight = true;
      } else {
        this.scrollMenu.btnRight = false;
        this.scrollMenu.left = this.scrollMenu.visibleWidth - this.scrollMenu.listWidth;
      };
      if (this.scrollMenu.left < 0) {
        this.scrollMenu.btnLeft = true;
      } else {
        this.scrollMenu.btnLeft = false;
        this.scrollMenu.left = 0;
      }
    },
    stickyCSS() {
      this.scrollMenu.sticky = 'position: relative;';
      if (document.documentElement.scrollTop > 640) {
        this.scrollMenu.sticky = `position: fixed; width: ${document.querySelector('#tips .ombre').offsetWidth}px;`;
      }
    },
    loadImg() {
      fetch('../../img/img.json')
        .then(response => response.json())
        .then((data) => { this.img = data; })
        .catch(err => {
          console.log(err) // eslint-disable-line
        })
    },
  },
}
</script>
