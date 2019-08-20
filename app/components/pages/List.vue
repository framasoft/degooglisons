<template>
  <main>
    <vue-headful
      :title="text(`${$t('meta.title')} - ${$t('list.title')}`)"
      :description="$t('map.alt')"
    />
    <div class="container ombre">
      <header-component/>
      <div id="tips" class="row">

        <list-menu />

        <a class="anchor" id="tagssearch" rel="nofollow"></a>
        <div class="clearfix" style="margin:30px auto">
          <div class="col-sm-6 col-sm-offset-3 well">
            <div class="clearfix" style="margin:10px 0">
              <label class="col-sm-1 text-right" for="tags-select">
                <i class="fa fa-2x fa-search"></i>
                <span v-text="$t('txt.searchByTags')" class="sr-only"></span>
              </label>
              <div class="col-sm-11">
                <v-select
                  id="tags-select"
                  v-model="results"
                  multiple
                  :options="tags($t('services')).concat(tags($root.services, 'gafam'))"
                  :placeholder="$t('txt.searchByTags')">
                </v-select>
              </div>
            </div>
            <div class="clearfix h4">
              <ul class="list-inline text-center">
                <li v-for="tag in $t('tags')" :key="tag">
                  <a v-text="tag"
                    :href="`#tag-${tag}`" class="btn btn-xs btn-default"
                    @click="(results.indexOf(tag) === -1) ? results.push(tag) : results.pop(tag) ;">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="panel-group col-xs-12">
          <div
            v-show="results.length > 0"
            id="results_wrapper"
            class="panel panel-default clearfix">
            <div class="panel-heading">
              <h2 v-text="$t('txt.results')" class="panel-title text-center h1"></h2>
            </div>
            <div id="results" class="clearfix" >
              <list-service
                v-for="key in Object.keys($root.services)"
                v-show="isInResults([$t(`services.${key}.tags`), $root.services[key].gafam[0]].join(), results)"
                :id="key"
                :key="key"
                category="all">
              </list-service>
            </div>
          </div>
          <section v-for="cat in Object.keys($root.cat2.icons)" :key="cat">
            <a class="anchor" :id="cat" rel="nofollow"></a>
            <div class="panel panel-default clearfix">
              <div class="panel-heading">
                <h2 v-html="$t(`cat2.${cat}`)" class="panel-title text-center h1"></h2>
              </div>
              <div class="clearfix">
                <list-service
                  v-for="key in Object.keys($root.services)"
                  :id="key"
                  :key="key"
                  :category="cat">
                </list-service>
              </div>
            </div>
          </section>

          <list-shortcuts />
        </div>
      </div>
      <Signature />
    </div>
    <BackTop />
  </main>
</template>

<script>
import { ScrollSpy } from 'uiv';
import HeaderComponent from '../partials/Header.vue';
import Signature from '../partials/Signature.vue';
import BackTop from '../partials/BackTop.vue';

import ListMenu from './list/ListMenu.vue';
import ListService from './list/ListService.vue';
import ListShortcuts from './list/ListShortcuts.vue';

export default {
  name: 'List',
  components: {
    HeaderComponent,
    Signature,
    BackTop,
    ListMenu,
    ListService,
    ListShortcuts,
  },
  data() {
    const hash = window.location.hash;
    const tags = [];
    if (hash && hash.indexOf('#tag-') > -1) {
      tags.push(hash.replace('#tag-', ''));
    }
    return {
      results: tags,
    }
  },
  methods: {
    tags(services, type) {
      let tags = '';
      if (type === 'gafam') {
        Object.keys(services).forEach((k) => {
          if (Array.isArray(services[k].gafam) && this.$root.fight.indexOf(k) > -1) {
            tags += `, ${services[k].gafam[0]}`;
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
        .replace(/^, /, '')
        .split(', ')
        .sort()
        .filter((v, i, a) => a.indexOf(v) === i);
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
  },
}
</script>
