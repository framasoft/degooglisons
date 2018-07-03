<template>
  <main id="alt">
    <div class="container ombre">
      <header-component/>
      <div class="row" id="bloc-carte">
        <div class="map col-lg-8 clearfix">
          <h2 class="h3">{{ $t('msg.map.title') }}</h2>
          <div id="map-container">
              <img :src="$t('/img/') + 'ghost.png'" :alt="$t('msg.map.alt')" id="carte" usemap="#cartemap" />
              <map id="cartemap" name="cartemap">
                <!-- Village, Big camps, NSA-->
                <area
                  v-for="(camp, key)  in data.camps"
                  :id="'a-' + key" :coords="camp.pos" :class="key"
                  :alt="text($t('msg.camps.' + key + '.title'))"
                  :title="text($t('msg.camps.' + key + '.title'))"
                  shape="circle" :data-maphilight="JSON.stringify(mapHighlight[camp.highlight])"
                  href="javascript:void(0);" tabindex="-1"
                  @click="modal2.open = true; modal2.key = key;"
                >
                <!-- Little camps -->
                <area
                  v-for="(service, key) in data.services"
                  v-if="(service.pos)"
                  :id="'a-' + key"  :alt="text(service.name)"
                  :coords="service.pos" shape="circle"
                  :data-maphilight="JSON.stringify(mapHighlight.services)"
                  href="javascript:void(0);"
                  @click="modal.open = true; modal.key = key;"
                  tabindex="-1" >
              </map>
              <video :poster="$t('/img/') + $t('msg.img.map')" autoplay muted loop ref="mapVideo" id="mapVideo">
                <source :src="$t('/img/') + $t('msg.img.map').replace('romains', 'animation').replace('.png','.webm')" type="video/webm" />
                <source :src="$t('/img/') + $t('msg.img.map').replace('romains', 'animation').replace('.png','.mp4')" type="video/mp4">
                <img :src="$t('/img/') + $t('msg.img.map')" alt="" style="width:100%;" />
              </video>
              <div class="play-pause" v-if="play">
                <button :title="$t('msg.txt.pause')"
                  @click="play=false; $refs.mapVideo.pause()">
                  <i class="glyphicon glyphicon-pause" aria-hidden="true"></i>
                  <span class="sr-only">{{ $t('msg.txt.pause') }}</span>
                </button>
              </div>
              <div class="play-pause" v-else>
                <button :title="$t('msg.txt.play')"
                  @click="play=true; $refs.mapVideo.play()">
                  <i class="glyphicon glyphicon-play" aria-hidden="true"></i>
                  <span class="sr-only">{{ $t('msg.txt.play') }}</span>
                </button>
              </div>
          </div>
        </div>

        <div class="col-lg-4">
          <!-- Recherche -->
          <div class="well clearfix" style="margin:60px auto">
            <label class="col-xs-1 text-right" style="padding: 0" for="tags-select">
              <i class="fa fa-2x fa-search"></i>
              <span class="sr-only">{{ $t('msg.txt.searchByAlt') }}</span>
            </label>
            <div class="col-xs-11">
              <v-select id="tags-select"
                label="gafam"
                :options="tags(data.services)"
                :placeholder="$t('msg.txt.searchByAlt')"
                v-model="results"
                @input="modal.key = results.key ; modal.open = (results.key !== undefined && results.key !== ''); "
              ></v-select>
            </div>
          </div>

          <!-- Intro alternatives -->
          <p v-html="$t('msg.alt.text1')"></p>
          <p v-html="$t('msg.alt.text2')"></p>
          <p v-html="$t('msg.alt.text3')"></p>
          <p class="text-center" id="network" aria-hidden="true">
            <a href="#home"><i class="fa fa-fw fa-home"></i></a> →
            <i class="fa fa-fw fa-cloud"></i> →
            <i class="fa fa-fw fa-server"></i>
          </p>
          <p v-html="$t('msg.alt.text4')"></p>
        </div>
      </div>
    </div>

    <!-- <modal> --------------------------------------------- -->
    <modal
      id="FramaModal"
      v-model="modal.open"
      :ok-text="$t('msg.txt.close')"
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
        <img class="pull-left" :src="'https://framasoft.org/nav/img/icons/' + noFrama(data.services[modal.key].F) + '.png'">
        <span class="frama" v-html="data.services[modal.key].F"></span><br>
        <span class="desc" v-html="$t('msg.services.' + modal.key + '.lDesc')"></span>
      </div>

      <!-- alternative to -->
      <div class="well">
        <p>
          {{ $t('msg.txt.asAltTo') }}
          <span title="Google, Apple, Facebook, Amazon, Microsoft">
            <i class="fa fa-fw fa-google" aria-hidden="true"></i>
            <i class="fa fa-fw fa-apple" aria-hidden="true"></i>
            <i class="fa fa-fw fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-fw fa-amazon" aria-hidden="true"></i>
            <i class="fa fa-fw fa-windows" aria-hidden="true"></i>
          </span>
          <span class="sr-only">GAFAM</span>
          {{ $t('msg.txt.andCo') }}{{ $t('msg.txt.like') }}
        </p>
        <ul class="list-group">
          <li class="list-group-item"
            v-for="gafam in data.services[modal.key].gafam"
            >
            <img
              v-if="data.png.gafam.indexOf(sanitize(gafam)) > -1"
              :src="$t('/img/') + 'gafam/' + sanitize(gafam) + '.png'" alt="" />
            {{ gafam.replace(/@:[.a-z]+ /g, '') }}
          </li>
        </ul>
        <p v-if="data.services[modal.key].FDate.length === 4"
          class="wip">
          {{ $t('msg.txt.weWillProp') }}
          <span v-html="$t('data.services.' + modal.key + '.F')"></span>
          <span class="small">
            {{ $t('msg.txt.releaseOn') }}
            {{ $t('data.services.' + modal.key + '.FDate') }}
            {{ $t('msg.txt.withHelp') }}
            <a :href="$t('msg.link.S')"
              class="btn btn-xs btn-soutenir" :title="$t('msg.meta.support')">
              <i class="fa fa-fw fa-heart" aria-hidden="true"></i>
              <span class="sr-only">{{ $t('msg.meta.support') }}</span>
            </a>
          </span>
        </p>
        <p v-else>
          {{ $t('msg.txt.wePropNow') }}
          <span v-html="$t('data.services.' + modal.key + '.F')"></span>
          <span class="small" v-html="$t('msg.txt.since') + ' ' + $t('data.services.' + modal.key + '.FDate')"></span>
        </p>
      </div>

      <!-- web-screen -->
      <div class="web-browser">
        <div class="toolbar">
          <img :src="$t('/img/') + 'browser-left.png'" alt="" />
          <div class="search-bar"></div>
          <img :src="$t('/img/') + 'browser-right.png'" alt="" />
        </div>
        <img
          :src="$t('/img/') + 'screens/' + noFrama(data.services[modal.key].F) + '-full.png'"
          class="img-responsive" alt=""
        />
      </div>

      <!-- desc -->
      <p v-html="$t('msg.services.' + modal.key + '.mBody.desc').replace(/@framaservice/g, $t('data.services.' + modal.key + '.F'))"></p>

      <!-- video / desc -->
      <p v-if="$t('msg.services.' + modal.key + '.mBody.more') !== 'msg.services.' + modal.key + '.mBody.more'"
         v-html="$t('msg.services.' + modal.key + '.mBody.more').replace(/@framaservice/g, $t('data.services.' + modal.key + '.F'))"></p>

      <!-- features -->
      <div v-if="$t('msg.services.' + modal.key + '.mBody.feat') !== 'msg.services.' + modal.key + '.mBody.feat'">
        <h5 class="h3 violet">{{ $t('msg.txt.features') }}</h5>
        <ul v-if="Array.isArray($t('msg.services.' + modal.key + '.mBody.feat'))">
          <li
            v-for="(item) in $t('msg.services.' + modal.key + '.mBody.feat')"
            v-html="item.replace(/@framaservice/g, $t('data.services.' + modal.key + '.F'))"
          ></li>
        </ul>
        <p
          v-else
          v-html="$t('msg.services.' + modal.key + '.mBody.feat').replace(/@framaservice/g, $t('data.services.' + modal.key + '.F'))">
        </p>
      </div>

      <!-- modal-footer -->
      <div slot="footer">
        <!-- source / framacloud -->
        <p class="precisions text-left" v-if="!data.services[modal.key].mFooter">
          <span v-html="$t('data.services.' + modal.key + '.F')"></span>
          {{ $t('msg.txt.basedOn') }}
          <span v-html="$t('data.services.' + modal.key + '.S')"></span>
          <span v-if="data.services[modal.key].CL">
            <br><i class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></i>
            {{ $t('msg.txt.howTo') }}<a :href="$t('data.services.' + modal.key + '.CL')" class="text-success">{{ $t('msg.txt.installOnServer') }}</a>
          </span>
        </p>
        <!-- alt / docs -->
        <div class="col-md-6 text-left">
          <a :href="'#' + modal.key" class="btn btn-alt btn-default"
            @click="modal.open = false;">
            {{ $t('msg.txt.otherAlt') }}</a>
          <a :href="$t('msg.link.docs') + sanitize(data.services[modal.key].S)"
            class="btn btn-alt btn-default">{{ $t('msg.txt.docs') }}</a>
        </div>
        <!-- use -->
        <div class="col-md-6 text-right">
          <a :href="data.services[modal.key].FL"
            class="btn btn-lg btn-link text-uppercase">
            {{ $t('msg.txt.use') }}</a>
        </div>
      </div>
    </modal>
    <modal
      id="FramaModalGmail"
      v-model="modal.open"
      :ok-text="$t('msg.txt.close')"
      tabindex="-1"
      role="dialog"
      aria-labelledby="FramaLabel"
      aria-hidden="true"
      :class="'m-' + modal.key"
      v-if="modal.key && modal.key === 'gmail'"
    >
      <div slot="title">
        <h1><span class="desc" v-html="$t('msg.services.' + modal.key + '.lDesc')"></span></h1>
      </div>
      <p class="alert alert-warning" v-html="$t('msg.services.' + modal.key + '.mBody').replace('@gafamservices', data.services[modal.key].gafam.join(', '))"></p>
      <div slot="footer">
        <a :href="'#' + modal.key" class="btn btn-alt btn-default"
          @click="modal.open = false;">
          {{ $t('msg.txt.otherAlt') }}</a>
        </div>
    </modal>
    <!-- </modal> -------------------------------------------- -->

    <!-- <modal2> --------------------------------------------- -->
    <modal
      id="CampsModal"
      v-model="modal2.open"
      :ok-text="$t('msg.txt.close')"
      tabindex="-1"
      role="dialog"
      aria-labelledby="CampsLabel"
      aria-hidden="true"
    >
      <div slot="title">
        <h1 id="CampsLabel" class="text-center" v-html="$t('msg.camps.' + modal2.key + '.title')"></h1>
      </div>
      <p v-html="$t('msg.camps.' + modal2.key + '.text1')"></p>
      <p v-html="$t('msg.camps.' + modal2.key + '.text2')"></p>
      <p class="text-center">
        <img :src="$t('/img/') + $t(data.camps[modal2.key].img) + '.png'" alt="" />
      </p>
      <div slot="footer">
        <div class="text-right">
          <a v-if="data.camps[modal2.key].more" :href="$t('/') + $t('lang') + '/#enjeux'"
            class="btn btn-lg btn-link text-uppercase">
            {{ $t('msg.txt.more') }}
          </a>
          <a href="javascript:void(0);"
            @click="modal2.open = false;"
            class="btn btn-lg btn-link text-uppercase">
            {{ $t('msg.txt.close') }}
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
            <i class="glyphicon glyphicon-chevron-left" aria-hidden="true"></i>
          </div>
          <div
            class="scroller scroller-right"
            v-if="scrollMenu.btnRight"
            @click="scrollMenu.left -= scrollMenu.visibleWidth; scrollMenuRefresh();">
            <i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>
          </div>
          <nav class="navbar navbar-default nav-cats" role="navigation">
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
              <ul
                class="nav navbar-nav nav-tabs" role="tablist"
                :style="'left: ' + scrollMenu.left + 'px'">
                <li><a href="#bloc-carte" :title="$t('msg.txt.backToMap')"
                  data-toggle="tooltip" data-placement="bottom">
                  <img :src="$t('/img/') + 'carte_petite.png'" :alt="$t('msg.txt.backToMap')" />
                </a></li>
                <li v-for="(icon, cat) in data.cat1.icons">
                  <a :href="'#' + cat" :title="$t('msg.cat1.' + cat)"
                    data-toggle="tooltip" data-placement="bottom">
                    <i :class="'fa fa-' + icon" aria-hidden="true"></i> <span>{{ $t('msg.cat1.' + cat) }}</span></a></li>
              </ul>
            </div>
          </nav>
        </div>

        <div class="panel-group col-xs-12">
          <div v-for="(icon, cat) in data.cat1.icons">
            <a class="anchor" :id="cat" rel="nofollow"></a>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title text-center">
                  <i :class="'fa fa-fw fa-' + icon" aria-hidden="true"></i>
                  <span>{{ $t('msg.cat1.' + cat) }}</span>
                </h2>
              </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th class="text-center" scope="col" v-html="$t('msg.alt.table.th1')">'.$t['alt']['alt1'].'</th>
                    <th class="text-center" scope="col" v-html="$t('data.meta.fname') + ' ' + $t('msg.alt.table.th2')"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(service, key) in data.services" v-if="service.c1 === cat"
                    :class="'alt-' + key">
                    <td>
                      <a class="anchor" :id="key" rel="nofollow"></a>
                      <h3 class="h5">
                        <a :href="'#' + key" rel="nofollow" v-html="$t('msg.services.' + key + '.sDesc')"></a>
                      </h3>
                      <ul class="list-group">
                        <li class="list-group-item"
                          v-for="gafam in data.services[key].gafam"
                          >
                          <img
                            v-if="data.png.gafam.indexOf(sanitize(gafam)) > -1"
                            :src="$t('/img/') + 'gafam/' + sanitize(gafam) + '.png'" alt="" />
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
                            v-if="data.png.leds.indexOf(sanitize($t('data.services.' + key + '.F'))) > -1"
                            :src="$t('/img/') + 'leds/' + sanitize($t('data.services.' + key + '.F')) + '.png'" alt="" />
                          <span v-html="$t('data.services.' + key + '.F')"></span>
                          <i class="fa fa-cloud pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('msg.txt.altOnline')"></i>
                        </li>
                        <li class="list-group-item"
                          v-if="service.S"
                          >
                          <img
                            v-if="data.png.leds.indexOf(sanitize($t('data.services.' + key + '.S'))) > -1"
                            :src="$t('/img/') + 'leds/' + sanitize($t('data.services.' + key + '.S')) + '.png'" alt="" />
                          <span v-html="$t('data.services.' + key + '.S')"></span>
                          <i class="fa fa-server pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('msg.txt.altOffline')"></i>
                        </li>
                      </ul>
                      <ul class="list-group">
                        <li class="list-group-item"
                          v-for="alt in service.altOn"
                          v-if="alt !== ''"
                          >
                          <img
                            v-if="data.png.leds.indexOf(sanitize(alt)) > -1"
                            :src="$t('/img/') + 'leds/' + sanitize(alt) + '.png'" alt="" />
                          <span v-html="alt"></span>
                          <i class="fa fa-cloud pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('msg.txt.altOnline')"></i>
                        </li>
                        <li class="list-group-item"
                          v-for="alt in service.altOff"
                          v-if="alt !== ''"
                          >
                          <img
                            v-if="data.png.leds.indexOf(sanitize(alt)) > -1"
                            :src="$t('/img/') + 'leds/' + sanitize(alt) + '.png'" alt="" />
                          <span v-html="alt"></span>
                          <i class="fa fa-server pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('msg.txt.altOffline')"></i>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <Signature />
    </div>
    <BackTop />
  </main>
</template>

<script>
import { Modal, Dropdown, Btn } from 'uiv';
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
      data: require('../../data.yml'), // eslint-disable-line
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

    /* eslint-disable */
    require('../../jquery.maphilight.js');
    require('../../imageMapResizer.min.js');
    /* eslint-enable */

    $(document).ready(function() {
      $('a:has(b)').css('text-decoration','none');

      // Init map
      $('map').imageMapResize();
      $('#carte').maphilight();

      // Sticky (to replace by https://uiv.wxsm.space/scroll-spy/)
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
          const main = services[k].gafam[0].replace(/\@:e\.[a-z]+ /g, '');
          const others = services[k].gafam
            .join(', ')
            .replace(/\@:e\.[a-z]+ /g, '')
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
  },
}
</script>
