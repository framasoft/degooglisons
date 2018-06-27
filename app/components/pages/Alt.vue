<template>
  <main id="alt">
    <div class="container ombre">
      <header-component/>
      <div class="row" id="bloc-carte">
        <div class="map col-lg-8 clearfix">
          <h2 class="h3">{{ $t('msg.map.title') }}</h2>
          <div id="map-container">
              <img :src="$t('/img/') + 'ghost.png'" :alt="$t('msg.map.alt')" id="carte" usemap="#cartemap" />
              <map id="cartemap" name="cartemap" style="position:absolute; top:0; width:100%; z-index:15">
                <!-- Village -->
                <area id="a-village" coords="175,125,70" class="village"
                  :alt="$t('msg.camps.village')" :title="$t('msg.camps.village')"
                  shape="circle" :data-maphilight="JSON.stringify(mapHighlight.village)"
                  href="#village" tabindex="-1"
                  @click="modal.open = true; modal.key = 'village';"
                >
                <!-- Big camps -->
                <area id="a-fermetum" coords="100,225,55"
                  :alt="stripTags($t('msg.camps.fermetum'))" :title="stripTags($t('msg.camps.fermetum'))"
                  shape="circle" :data-maphilight="JSON.stringify(mapHighlight.camps)"
                  href="#fermetum" tabindex="-1"
                  @click="modal.open = true; modal.key = 'fermetum';"
                >
                <area id="a-centralisum" coords="175,270,55"
                  :alt="stripTags($t('msg.camps.centralisum'))" :title="stripTags($t('msg.camps.centralisum'))"
                  shape="circle" :data-maphilight="JSON.stringify(mapHighlight.camps)"
                  href="#centralisum" tabindex="-1"
                  @click="modal.open = true; modal.key = 'centralisum';"
                >
                <area id="a-espionnum" coords="250,245,55"
                  :alt="stripTags($t('msg.camps.espionnum'))" :title="stripTags($t('msg.camps.espionnum'))"
                  shape="circle" :data-maphilight="JSON.stringify(mapHighlight.camps)"
                  href="#espionnum" tabindex="-1"
                  @click="modal.open = true; modal.key = 'espionnum';"
                >
                <area id="a-privatum" coords="275,155,55"
                  :alt="stripTags($t('msg.camps.privatum'))" :title="stripTags($t('msg.camps.privatum'))"
                  shape="circle" :data-maphilight="JSON.stringify(mapHighlight.camps)"
                  href="#privatum" tabindex="-1"
                  @click="modal.open = true; modal.key = 'privatum';"
                >
                <!-- NSA -->
                <area id="a-nsa" coords="485,315,50" alt="NSA" title="NSA"
                  shape="circle" :data-maphilight="JSON.stringify(mapHighlight.camps)"
                  href="#nsa" tabindex="-1"
                  @click="modal.open = true; modal.key = 'nsa';"
                >
                <!-- Little camps -->
                <area
                  v-for="(service, key) in data.services"
                  v-if="(service.pos)"
                  :id="'a-' + key"  :alt="stripTags(service.name)"
                  :coords="service.pos" shape="circle"
                  :data-maphilight="JSON.stringify(mapHighlight.services)"
                  :href="'#' + key"
                  @click="modal.open = true; modal.key = key;"
                  tabindex="-1" >
              </map>
              <video :poster="$t('/img/') + $t('msg.img.map')" autoplay muted ref="mapVideo" id="mapVideo">
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
            <label class="col-xs-1 text-right" for="c-select">
              <i class="fa fa-2x fa-search"></i>
              <span class="sr-only">{{ $t('msg.txt.searchByAlt') }}</span>
            </label>
            <div class="col-xs-11">
              <v-select id="tags-select"
                :options="tags(data.services, 'gafam')"
                :placeholder="$t('msg.txt.searchByAlt')"
                v-model="results"
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
      size="lg"
    >
      <div slot="title">
        <img class="pull-left" :src="'https://framasoft.org/nav/img/icons/' + noFrama(data.services[modal.key].F) + '.png'">
        <span class="frama" v-html="data.services[modal.key].F"></span><br>
        <span class="desc" v-html="$t('msg.services.' + modal.key + '.lDesc')"></span>
      </div>
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
      <div v-html="$t('msg.services.' + modal.key + '.mBody')"></div>
      <div slot="footer">
        <ul class="list-inline col-md-6 text-left">
          <li
            v-for="(tag) in $t('msg.services.' + modal.key +'.tags').split(', ')"
            v-if="tag !== '' && tag !== ' '">
            <a
              :href="$t('/') + $t('lang') + '/list#tag-' + tag.replace(' ', '-').toLowerCase()"
              class="btn btn-xs btn-default"
              @click="modal.open = false; (results.indexOf(tag) === -1) ? results.push(tag) : results.pop(tag) ;"
              v-scroll-to="'#results_wrapper'">
              {{ tag.replace(/ /, '').toLowerCase() }}
            </a></li>
        </ul>
        <div class="col-md-6 text-right">
          <a :href="$t('msg.link.docs') + stripTags(data.services[modal.key].S.toLowerCase())"
            class="btn btn-lg btn-link text-uppercase">{{ $t('msg.txt.docs') }}</a>
          <a :href="data.services[modal.key].FL" class="btn btn-lg btn-link text-uppercase">{{ $t('msg.txt.use') }}</a>
        </div>
      </div>
    </modal>
    <!-- </modal> -------------------------------------------- -->

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
                  <i class="'fa fa-fw fa-' + icon" aria-hidden="true"></i>
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
                  <tr v-for="(service, key) in data.services" v-if="service.c1 === cat">
                    <td>
                      <a class="anchor" :id="key" rel="nofollow"></a>
                      <h3 class="h5">
                        <a :href="'#' + key" rel="nofollow" v-html="$t('msg.services.' + key + '.sDesc')"></a>
                      </h3>
                      <ul class="list-group">
                        <li class="list-group-item"
                          v-for="gafam in gafam(data.services[key])"
                          >
                          <img :src="$t('/img/') + 'gafam/' + gafam.replace(' ', '-').toLowerCase() + '.png'" alt="" />
                          {{ gafam }}
                        </li>
                      </ul>
                    </td>
                    <td>
                      <ul class="list-group">
                        <li class="list-group-item"
                          v-if="service.F"
                          >
                          <img :src="$t('/img/') + 'leds/' + stripTags($t('data.services.' + key + '.F')).toLowerCase() + '.png'" alt="" />
                          <span v-html="$t('data.services.' + key + '.F')"></span>
                          <i class="fa fa-cloud fc_g5 pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('msg.txt.altOnline')"></i>
                        </li>
                        <li class="list-group-item"
                          v-if="service.S"
                          >
                          <img :src="$t('/img/') + 'leds/' + stripTags($t('data.services.' + key + '.S')).toLowerCase() + '.png'" alt="" />
                          <span v-html="$t('data.services.' + key + '.S')"></span>
                          <i class="fa fa-server fc_g5 pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('msg.txt.altOffline')"></i>
                        </li>
                      </ul>
                      <ul class="list-group">
                        <li class="list-group-item"
                          v-for="alt in leds(service.altOn)"
                          v-if="alt !== ''"
                          >
                          <img :src="$t('/img/') + 'leds/' + stripTags(alt).toLowerCase() + '.png'" alt="" />
                          <span v-html="alt"></span>
                          <i class="fa fa-cloud fc_g5 pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('msg.txt.altOnline')"></i>
                        </li>
                        <li class="list-group-item"
                          v-for="alt in leds(service.altOff)"
                          v-if="alt !== ''"
                          >
                          <img :src="$t('/img/') + 'leds/' + stripTags(alt).toLowerCase() + '.png'" alt="" />
                          <span v-html="alt"></span>
                          <i class="fa fa-server fc_g5 pull-right" aria-hidden="true"
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
    </div>
  </main>
</template>

<script>
import { Modal, Dropdown, Btn } from 'uiv';
import HeaderComponent from '../partials/Header.vue';
import Signature from '../partials/Signature.vue';
import BackTop from '../partials/BackTop.vue';

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
      play: true,
      results: '',
      data: require('../../data.yml'), // eslint-disable-line
      scrollMenu: {
        bar: 40,
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
    stripTags(html) {
      const tmp = document.createElement('div');
      tmp.innerHTML = html;
      let text = tmp.textContent || tmp.innerText || '';
      return text || '';
    },
    noFrama(html) {
      let text = this.stripTags(html);
      text = text.toLowerCase()
        .replace('framand', 'and')
        .replace('framage', 'age')
        .replace('framae', 'mae')
        .replace('framin', 'min')
        .replace('frame', 'me')
        .replace('frama', '')
        .replace('.', '')
        .replace(/[èé]/g, 'e')
        .replace('my', 'myframa');
      return text;
    },
    tags(services, type) {
      let tags = '';
      if (type === 'gafam') {
        Object.keys(services).forEach((k) => {
          if (typeof services[k].eq === 'string') {
            tags += `, ${services[k].name}, ${services[k].eq}`;
          }
        });
      } else {
        Object.keys(services).forEach((k) => {
          if (typeof services[k].tags === 'string') {
            tags += `, ${services[k].tags}`;
          }
        });
      }
      return tags
        .replace(/\@:e\.[a-z]+ /g, '')
        .replace(/^, /, '')
        .split(', ')
        .sort()
        .filter((v, i, a) => a.indexOf(v) === i);
    },
    tagsClass(key) {
      let tags = '';
      if (typeof this.data.services[key].eq === 'string') {
        tags += `, ${this.data.services[key].name}, ${this.data.services[key].eq}`;
      }
      if (typeof this.$t('msg.services.' + key + '.tags') === 'string') {
        tags += `, ${this.$t('msg.services.' + key + '.tags')}`;
      }
      return tags
        .replace(/\@:e\.[a-z]+ /g, '')
        .replace(/^, /, '')
        .split(', ')
        .sort()
        .filter((v, i, a) => a.indexOf(v) === i)
        .join(' tag-')
        .replace(/^/, 'tag-')
        .toLowerCase();
    },
    isInResults(tags, results) {
      let seen = false;
      results.forEach((val) => {
        if (tags.indexOf(val) > -1) {
          seen = true;
        }
      });
      return seen;
    },
    gafam(service) {
      const gafam = (typeof service.eq === 'string' && service.eq !== '')
        ? this.stripTags(service.eq).split(', ')
        : [];
      gafam.unshift(this.stripTags(service.name));
      for (let i = 0; i < gafam.length; i += 1) {
        gafam[i] = gafam[i].replace(/@:[^ ]+ /, '');
      }
      return gafam;
    },
    leds(alt) {
      const leds = (typeof alt === 'string' && alt !== '')
        ? alt.replace(/@:S(, )?/, '').split(', ')
        : [];
      return leds;
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
        this.scrollMenu.sticky = `position: fixed; width: ${document.querySelector('#tips').offsetWidth}px;`;
      }
    },
  },
}
</script>
