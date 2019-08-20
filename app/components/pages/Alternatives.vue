<template>
  <main>
    <vue-headful
      :title="text(`${$t('meta.title')} - ${$t('alt.title')}`)"
      :description="$t('map.alt')"
    />

    <div class="container ombre">
      <header-component/>
      <alt-map :img="img" />
    </div>

    <!-- Listes des alternatives -->
    <div id="tips" class="row">
      <div class="container ombre">
        <alt-menu />

        <div class="panel-group col-xs-12">
          <div v-for="(icon, cat) in $root.cat1.icons" :key="cat">
            <a class="anchor" :id="cat" rel="nofollow"></a>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title text-center">
                  <i :class="`fa fa-fw fa-${icon}`" aria-hidden="true"></i>
                  <span v-text="$t(`cat1.${cat}`)"></span>
                </h2>
              </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th v-html="$t('alt.table.th1')" class="text-center" scope="col"></th>
                    <th v-html="$root.meta.fname + ' ' + $t('alt.table.th2')" class="text-center" scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="key in Object.keys($root.services).filter(key => $root.services[key].c1 === cat)"
                    :key="key"
                    :class="`alt-${key}`">
                    <td>
                      <a :id="key" class="anchor" rel="nofollow"></a>
                      <h3 class="h5">
                        <a v-html="$t(`services.${key}.sDesc`)" :href="`#${key}`" rel="nofollow"></a>
                      </h3>
                      <ul class="list-group">
                        <li
                          v-for="gafam in $root.services[key].gafam"
                          :key="gafam"
                           class="list-group-item">
                          <img
                            v-if="$root.png.gafam.indexOf(text(gafam, 'latin sanitize')) > -1"
                            :src="img.gafam[text(gafam, 'latin sanitize')]" alt="" />
                          <span v-text=" gafam.replace(/@:[.a-z]+ /g, '')"></span>
                        </li>
                      </ul>
                    </td>
                    <td>
                      <ul class="list-group">
                        <li
                          v-if="$root.services[key].F"
                          class="list-group-item">
                          <img
                            v-if="$root.png.leds.indexOf(text($root.services[key].F, 'latin sanitize')) > -1"
                            :src="img.leds[text($root.services[key].F, 'sanitize')]" alt="" />
                          <span v-html="$root.services[key].F"></span>
                          <i class="fa fa-cloud pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('txt.altOnline')"></i>
                        </li>
                        <li
                          v-if="$root.services[key].S"
                          class="list-group-item">
                          <img
                            v-if="$root.png.leds.indexOf(text($root.services[key].S, 'latin sanitize')) > -1"
                            :src="img.leds[text($root.services[key].S, 'latin sanitize')]" alt="" />
                          <span v-html="$root.services[key].S"></span>
                          <i class="fa fa-server pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('txt.altOffline')"></i>
                        </li>
                      </ul>
                      <ul class="list-group">
                        <li
                          v-for="alt in $root.services[key].altOn"
                          :key="alt"
                          class="list-group-item">
                          <img
                            v-if="$root.png.leds.indexOf(text(alt, 'latin sanitize')) > -1"
                            :src="img.leds[text(alt, 'latin sanitize')]" alt="" />
                          <span v-html="alt"></span>
                          <i class="fa fa-cloud pull-right" aria-hidden="true"
                            data-toggle="tooltip" data-placement="top"
                            :title="$t('txt.altOnline')"></i>
                        </li>
                        <li
                          v-for="alt in $root.services[key].altOff"
                          :key="alt"
                          class="list-group-item">
                          <img
                            v-if="$root.png.leds.indexOf(text(alt, 'latin sanitize')) > -1"
                            :src="img.leds[text(alt, 'sanitize')]" alt="" />
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
import { ScrollSpy } from 'uiv';
import HeaderComponent from '../partials/Header.vue';
import Signature from '../partials/Signature.vue';
import BackTop from '../partials/BackTop.vue';

import AltMap from './alternatives/AltMap.vue';
import AltMenu from './alternatives/AltMenu.vue';

export default {
  name: 'Alt',
  components: {
    HeaderComponent,
    Signature,
    BackTop,
    AltMap,
    AltMenu,
  },
  data() {
    return {
      img: { gafam: {}, leds: {} },
    }
  },
  mounted() {
    if (!window.vuefsPrerender) {
      this.loadImg();
    }
  },
  methods: {
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
