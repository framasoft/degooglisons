<template>
  <div class="row" id="bloc-carte">
    <div class="map col-lg-8 clearfix">
      <h2 v-text="$t('map.title')" class="h3"></h2>
      <div id="map-container">
        <img
          id="carte"
          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAtoAAANSAQMAAABhtPtxAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAADZQAAA2UARCw/3wAAAAHdElNRQfgCwQIJQGzxaatAAAAY0lEQVR42u3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgYTTZAAHjzPeQAAAAAElFTkSuQmCC"
          :alt="$t('map.alt')"
          usemap="#cartemap">
        <map id="cartemap" name="cartemap">
          <!-- Village, Big camps, NSA-->
          <area
            v-for="(camp, key)  in $root.camps"
            :id="`a-${key}`"
            :key="key"
            :coords="camp.pos"
            :class="key"
            :alt="text($t(`camps.${key}.title`))"
            :title="text($t(`camps.${key}.title`))"
            shape="circle"
            :data-maphilight="JSON.stringify(mapHighlight[camp.highlight])"
            href="javascript:void(0);"
            tabindex="-1"
            @click="modal2.open = true; modal2.key = key;"
          >
          <!-- Little camps -->
          <area
            v-for="key in Object.keys($root.services).filter(key => $root.services[key].pos !== undefined)"
            :id="`a-${key}`"
            :key="key"
            :alt="text($root.services[key].name)"
            :coords="$root.services[key].pos" shape="circle"
            :data-maphilight="JSON.stringify(mapHighlight.services)"
            href="javascript:void(0);"
            @click="modal.open = true; modal.key = key;"
            tabindex="-1" >
        </map>
        <video
          id="mapVideo"
          ref="mapVideo"
         :poster="`${$root['/']}img/${$route.meta.lang}/Carte2016-romains.png`"
         autoplay muted loop>
          <source :src="`${$root['/']}img/${$route.meta.lang}/Carte2016-animation.webm`" type="video/webm" />
          <source :src="`${$root['/']}img/${$route.meta.lang}/Carte2016-animation.mp4`" type="video/mp4">
          <img :src="`${$root['/']}img/${$route.meta.lang}/Carte2016-romains.png`" alt="" style="width:100%;" />
        </video>
        <div class="play-pause" v-if="play">
          <button :title="$t('txt.pause')"
            @click="play=false; $refs.mapVideo.pause()">
            <i class="fa fa-fw fa-pause" aria-hidden="true"></i>
            <span v-text="$t('txt.pause')" class="sr-only"></span>
          </button>
        </div>
        <div class="play-pause" v-else>
          <button :title="$t('txt.play')"
            @click="play=true; $refs.mapVideo.play()">
            <i class="fa fa-fw fa-play" aria-hidden="true"></i>
            <span v-text="$t('txt.play')" class="sr-only"></span>
          </button>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <!-- Recherche -->
      <div class="well clearfix" style="margin:60px auto">
        <label class="col-xs-1 text-right" style="padding: 0" for="tags-select">
          <i class="fa fa-2x fa-search"></i>
          <span v-text="$t('txt.searchByAlt')" class="sr-only"></span>
        </label>
        <div class="col-xs-11">
          <v-select
            id="tags-select"
            v-model="results"
            label="gafam"
            :options="tags($root.services)"
            :placeholder="$t('txt.searchByAlt')"
            @input="modal.key = results.key ; modal.open = (results.key !== undefined && results.key !== '');">
          </v-select>
        </div>
      </div>

      <!-- Intro alternatives -->
      <p v-html="$t('alt.text1')"></p>
      <p v-html="$t('alt.text2')"></p>
      <p v-html="$t('alt.text3')"></p>
      <p id="network" class="text-center" aria-hidden="true">
        <a href="#home"><i class="fa fa-fw fa-home"></i></a> →
        <i class="fa fa-fw fa-cloud"></i> →
        <i class="fa fa-fw fa-server"></i>
      </p>
      <p v-html="$t('alt.text4')"></p>
    </div>

    <!-- <modal> --------------------------------------------- -->
    <modal
      v-if="modal.key && modal.key !== 'gmail'"
      id="FramaModal"
      v-model="modal.open"
      :ok-text="$t('txt.close')"
      tabindex="-1"
      role="dialog"
      aria-labelledby="FramaLabel"
      aria-hidden="true"
      :class="`m-${modal.key}`"
      size="lg"
      >
      <!-- modal-header -->
      <div slot="title">
        <img class="pull-left" :src="`https://framasoft.org/nav/img/icons/${text($root.services[modal.key].F, 'noframa latin sanitize')}.png`">
        <span v-html="$root.services[modal.key].F" class="frama"></span><br>
        <span v-html="$t(`services.${modal.key}.lDesc`)" class="desc"></span>
      </div>

      <!-- alternative to -->
      <div class="well">
        <p>
          <span v-text="$t('txt.asAltTo')"></span>
          <span title="Google, Apple, Facebook, Amazon, Microsoft">
            <i class="fa fa-fw fa-google" aria-hidden="true"></i>
            <i class="fa fa-fw fa-apple" aria-hidden="true"></i>
            <i class="fa fa-fw fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-fw fa-amazon" aria-hidden="true"></i>
            <i class="fa fa-fw fa-windows" aria-hidden="true"></i>
          </span>
          <span class="sr-only">GAFAM</span>
          <span v-text="`${$t('txt.andCo')}${$t('txt.like')}`"></span>
        </p>
        <ul class="list-group">
          <li
            v-for="gafam in $root.services[modal.key].gafam"
            :key="gafam"
             class="list-group-item">
            <img
              v-if="$root.png.gafam.indexOf(text(gafam, 'latin sanitize')) > -1"
              :src="img.gafam[text(gafam, 'latin sanitize')]" alt="" />
            <span v-text="gafam.replace(/@:[.a-z]+ /g, '')"></span>
          </li>
        </ul>
        <p v-if="$root.services[modal.key].FDate.length === 4"
          class="wip">
          <span v-text="$t('txt.weWillProp')"></span>
          <span v-html="$root.services[modal.key].F"></span>
          <span class="small">
            <span v-text="$t('txt.releaseOn')"></span>
            <span v-text="$root.services[modal.key].FDate"></span>
            <span v-text="$t('txt.withHelp')"></span>
            <a :href="$t('link.S')"
              class="btn btn-xs btn-soutenir" :title="$t('meta.support')">
              <i class="fa fa-fw fa-heart" aria-hidden="true"></i>
              <span v-text="$t('meta.support')" class="sr-only"></span>
            </a>
          </span>
        </p>
        <p v-else>
          <span v-text="$t('txt.wePropNow')"></span>
          <span v-html="$root.services[modal.key].F"></span>
          <span v-html="`${$t('txt.since')} ${$root.services[modal.key].FDate}`" class="small"></span>
        </p>
      </div>

      <!-- web-screen -->
      <div class="web-browser">
        <div class="toolbar">
          <img :src="`${$root['/']}img/browser-left.png`" alt="" />
          <div class="search-bar"></div>
          <img :src="`${$root['/']}img/browser-right.png`" alt="" />
        </div>
        <img
          :src="`${$root['/']}img/screens/${text($root.services[modal.key].F, 'noframa latin sanitize')}-full.png`"
          class="img-responsive" alt=""
        />
      </div>

      <!-- desc -->
      <p v-html="$t(`services.${modal.key}.mBody.desc`).replace(/@framaservice/g, $root.services[modal.key].F)"></p>

      <!-- video / desc -->
      <p
        v-if="$t(`services.${modal.key}.mBody.more`) !== `services.${modal.key}.mBody.more`"
        v-html="$t(`services.${modal.key}.mBody.more`).replace(/@framaservice/g, $root.services[modal.key].F)">
      </p>

      <!-- features -->
      <div v-if="$t(`services.${modal.key}.mBody.feat`) !== `services.${modal.key}.mBody.feat`">
        <h5 v-text="$t('txt.features')" class="h3 violet"></h5>
        <ul v-if="Array.isArray($t(`services.${modal.key}.mBody.feat`))">
          <li
            v-for="item in $t(`services.${modal.key}.mBody.feat`)"
            :key="item"
            v-html="item.replace(/@framaservice/g, $root.services[modal.key].F)">
          </li>
        </ul>
        <p
          v-else
          v-html="$t(`services.${modal.key}.mBody.feat`).replace(/@framaservice/g, $root.services[modal.key].F)">
        </p>
      </div>

      <!-- modal-footer -->
      <div slot="footer">
        <!-- source / framacloud -->
        <p class="precisions text-left" v-if="!$root.services[modal.key].mFooter">
          <span v-html="$root.services[modal.key].F"></span>
          <span v-text="$t('txt.basedOn')"></span>
          <span v-html="$root.services[modal.key].S"></span>
          <span v-if="$root.services[modal.key].CL">
            <br><i class="fa fa-leaf" aria-hidden="true"></i>
            <span v-text="$t('txt.howTo')"></span>
            <a v-text="$t('txt.installOnServer')" :href="$root.services[modal.key].CL" class="text-success"></a>
          </span>
        </p>
        <!-- alt / docs -->
        <div class="col-md-6 text-left">
          <a :href="`#${modal.key}`"
            class="btn btn-alt btn-default"
            @click="modal.open = false;"
            v-text="$t('txt.otherAlt')">
          </a>
          <a :href="docLink(modal.key)"
            class="btn btn-alt btn-default"
            v-text="$t('txt.docs')">
          </a>
        </div>
        <!-- use -->
        <div class="col-md-6 text-right">
          <a
            v-text="$t('txt.use')"
            :href="$root.services[modal.key].FL"
            class="btn btn-lg btn-link text-uppercase">
          </a>
        </div>
      </div>
    </modal>

    <modal
      v-if="modal.key && modal.key === 'gmail'"
      id="FramaModalGmail"
      v-model="modal.open"
      :ok-text="$t('txt.close')"
      tabindex="-1"
      role="dialog"
      aria-labelledby="FramaLabel"
      aria-hidden="true"
      :class="`m-${modal.key}`">
      <div slot="title">
        <h1><span v-html="$t(`services.${modal.key}.lDesc`)" class="desc"></span></h1>
      </div>
      <p v-html="$t(`services.${modal.key}.mBody`).replace('@gafamservices', $root.services[modal.key].gafam.join(', '))" class="alert alert-warning"></p>
      <div slot="footer">
        <a
          v-text="$t('txt.otherAlt')"
          :href="'#' + modal.key"
          class="btn btn-alt btn-default"
          @click="modal.open = false;">
        </a>
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
      aria-hidden="true">
      <div slot="title">
        <h1 v-html="$t(`camps.${modal2.key}.title`)" id="CampsLabel" class="text-center"></h1>
      </div>
      <p v-html="$t(`camps.${modal2.key}.text1`)"></p>
      <p v-html="$t(`camps.${modal2.key}.text2`)"></p>
      <p class="text-center">
        <img :src="`${$root['/']}img/${$route.meta.lang}/${$t($root.camps[modal2.key].img)}.png`" alt="" />
      </p>
      <div slot="footer">
        <div class="text-right">
          <a
            v-if="$root.camps[modal2.key].more"
            v-text="$t('txt.more')"
            :href="`${$root['/']}${$t('lang')}/#enjeux`"
            class="btn btn-lg btn-link text-uppercase">
          </a>
          <a
            v-text="$t('txt.close')"
            href="javascript:void(0);"
            @click="modal2.open = false;"
            class="btn btn-lg btn-link text-uppercase">
          </a>
        </div>
      </div>
    </modal>
    <!-- </modal2> -------------------------------------------- -->
  </div>
</template>

<script>
import { Modal, Dropdown, Btn } from 'uiv';

export default {
  components: {
    Modal, Dropdown, Btn,
  },
  props: {
    img: {
      type: Object,
      required: true,
    },
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
    if (!window.vuefsPrerender) {
      /* eslint-disable */
      require('maphilight/jquery.maphilight.min.js');
      require('image-map-resizer/js/imageMapResizer.min.js');
      /* eslint-enable */
    }

    $(document).ready(function() {
      if (!window.vuefsPrerender) {
        // Init map
        $('map').imageMapResize();
        $('#carte').maphilight();
      }
    });
  },
  methods: {
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
    docLink(key) {
      const service = this.$root.services[key].id || null;
      const path = this.$root.doc[service] || false;
      let link = this.$root.link.docs;
      if (path) {
        if (this.$t('lang') !== 'fr'
          && path[1] !== undefined) {
          link += `/${path[1]}`; // english doc by default
        } else {
          link += `/${path[0]}`; // fallback on french if missing
        }
        link += '/index.html';
      }
      return link;
    }
  },
}
</script>