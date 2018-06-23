<template>
  <main id="list">
    <div class="container ombre">
      <header-component/>
      <div id="tips" class="row">

        <div id="sticky" class="hidden-xs cats">
          <div
            class="scroller scroller-left"
            v-if="scrollMenu.btnLeft"
            @click="scrollMenu.left += scrollMenu.visibleWidth;scrollMenuRefresh();">
            <i class="glyphicon glyphicon-chevron-left" aria-hidden="true"></i>
          </div>
          <div
            class="scroller scroller-right"
            v-if="scrollMenu.btnRight"
            @click="scrollMenu.left -= scrollMenu.visibleWidth;scrollMenuRefresh();">
            <i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>
          </div>
          <nav class="navbar navbar-default nav-cats" role="navigation">
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
              <ul
                class="nav navbar-nav nav-tabs" role="tablist"
                :style="'left: ' + scrollMenu.left + 'px'">
                <li>
                  <a href="#tagssearch" :title="$t('msg.txt.searchByTags')">
                    <i class="fa fa-lg fa-search" aria-hidden="true"></i>
                    <span class="sr-only">{{ $t('msg.txt.searchByTags') }}</span>
                  </a>
                </li>
                <li><a href="#all">{{ $t('msg.txt.allServices') }}</a></li>
                <li v-for="(icon, cat) in data.cat2.icons">
                  <a :href="'#' + cat" :title="$t('msg.cat2.' + cat)">{{ $t('msg.cat2.' + cat) }}</a></li>
              </ul>
            </div>
          </nav>
        </div>

        <a class="anchor" id="tagssearch" rel="nofollow"></a>
        <div class="clearfix" style="margin:30px auto">
          <div class="col-sm-6 col-sm-offset-3 well">
            <div class="clearfix" style="margin:10px 0">
              <label class="col-sm-1 text-right" for="tags-select">
                <i class="fa fa-2x fa-search"></i>
                <span class="sr-only">{{ $t('msg.txt.searchByTags') }}</span>
              </label>
              <div class="col-sm-11">
                <v-select id="tags-select" multiple
                  :options="tags($t('msg.services')).concat(tags(data.services, 'gafam'))"
                  :placeholder="$t('msg.txt.searchByTags')"
                  v-model="results"
                ></v-select>
              </div>
            </div>
            <div class="clearfix h4">
              <ul class="list-inline text-center">
                <li v-for="(tag) in $t('msg.tags')">
                  <a :href="'#tag-' + tag" class="btn btn-xs btn-default"
                    @click="(results.indexOf(tag) === -1) ? results.push(tag) : results.pop(tag) ;"
                  >{{ tag }}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="panel-group col-xs-12">
          <div  id="results_wrapper" class="panel panel-default clearfix" v-show="results.length > 0">
            <div class="panel-heading">
              <h2 class="panel-title text-center h1">
                {{ $t('msg.txt.results') }}
              </h2>
            </div>
            <div id="results" class="clearfix" >
              <article
                v-for="(service, key) in data.services"
                v-if="(data.fight.indexOf(key) > -1)"
                v-show="isInResults($t('msg.services.' + key + '.tags'), results)"
                class="col-md-3 col-sm-6 text-center">
                <h3>
                  <i :class="'fa fa-2x fa-' + service.i"></i><br>
                  <p v-html="service.F"></p>
                </h3>
                <p class="desc" v-html="$t('msg.services.' + key + '.tDesc')"></p>
                <p><img class="img-responsive" :src="$t('/img/') + 'screens/' + noFrama(service.F) + '.png'" alt="" /></p>
                <div class="clearfix">
                  <a :href="service.FL" class="btn btn-link btn-lg pull-left text-uppercase">{{ $t('msg.txt.use') }}</a>

                  <dropdown dropup ref="dropdown" menu-right class="pull-right">
                    <btn type="button" class="btn btn-link btn-lg dropdown-toggle"
                      aria-haspopup="true" aria-expanded="false" :id="'dropdown-' + key">
                      <i class="fa fa-lg fa-question-circle-o" aria-hidden="true"></i>
                      <span class="sr-only">{{ $t('msg.txt.plus') }}</span>
                    </btn>
                    <template slot="dropdown">
                      <li><a href="javascript:void(0);" data-toggle="modal" :data-target="'#modal-t-' + key"
                        @click="modal.open = true; modal.key = key;"
                        >{{ $t('msg.txt.more') }}</a></li>
                      <li><a :href="$t('msg.link.docs') + stripTags(service.S).toLowerCase()">{{ $t('msg.txt.docs') }}</a></li>
                    </template>
                  </dropdown>

                </div>
              </article>
            </div>
          </div>
          <section v-for="(icon, cat) in data.cat2.icons">
            <a class="anchor" :id="cat" rel="nofollow"></a>
            <div class="panel panel-default clearfix">
              <div class="panel-heading">
                <h2 class="panel-title text-center h1">
                  {{ $t('msg.cat2.' + cat) }}
                </h2>
              </div>
              <div class="clearfix">
                <article
                  v-for="(service, key) in data.services"
                  v-if="data.fight.indexOf(key) > -1 && service.c2 === cat"
                  :class="'col-md-3 col-sm-6 text-center ' + tagsClass(key)">
                  <h3>
                    <i :class="'fa fa-2x fa-' + service.i"></i><br>
                    <p v-html="service.F"></p>
                  </h3>
                  <p class="desc" v-html="$t('msg.services.' + key + '.tDesc')"></p>
                  <p><img class="img-responsive" :src="$t('/img/') + 'screens/' + noFrama(service.F) + '.png'" alt="" /></p>
                  <div class="clearfix">
                    <a :href="service.FL" class="btn btn-link btn-lg pull-left text-uppercase">{{ $t('msg.txt.use') }}</a>

                    <dropdown dropup ref="dropdown" menu-right class="pull-right">
                      <btn type="button" class="btn btn-link btn-lg dropdown-toggle"
                        aria-haspopup="true" aria-expanded="false" :id="'dropdown-' + key">
                        <i class="fa fa-lg fa-question-circle-o" aria-hidden="true"></i>
                        <span class="sr-only">{{ $t('msg.txt.plus') }}</span>
                      </btn>
                      <template slot="dropdown">
                        <li><a href="javascript:void(0);" data-toggle="modal" :data-target="'#modal-t-' + key"
                          @click="modal.open = true; modal.key = key;"
                          >{{ $t('msg.txt.more') }}</a></li>
                        <li><a :href="$t('msg.link.docs') + stripTags(service.S).toLowerCase()">{{ $t('msg.txt.docs') }}</a></li>
                      </template>
                    </dropdown>

                  </div>
                </article>
              </div>
            </div>
          </section>

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
                    :href="'#tag-' + tag.replace(' ', '-').toLowerCase()"
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

          <a class="anchor" id="all" rel="nofollow"></a>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title text-center">
                {{ $t('msg.txt.allServices') }}
              </h2>
            </div>
            <div class="clearfix">
              <ul class="list-inline">
                <li class="col-xs-4 col-sm-3 col-md-2 text-center" style="padding:20px"
                  v-for="(service, key) in data.services" v-if="(data.fight.indexOf(key) > -1)">
                  <a :href="service.FL" class="btn btn-default btn-block"
                    :title="$t('msg.services.' + key + '.sDesc')"
                    rel="popover" data-placement="bottom"
                    :data-content="$t('msg.services.' + key + '.lDesc')">
                    <i :class="'fa fa-3x fa-fw fa-' + service.i + ' fc_g7'"></i>
                    <br/>
                    <span v-html="service.F"></span>
                  </a>
                </li>
              </ul>
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

export default {
  name: 'List',
  components: {
    HeaderComponent,
    Modal, Dropdown, Btn,
    Signature,
    BackTop,
  },
  data() {
    const hash = window.location.hash;
    const tags = [];
    if (hash && hash.indexOf('#tag-') > -1) {
      tags.push(hash.replace('#tag-', ''));
    }
    return {
      modal: {
        open: false,
        key: 'bitly',
      },
      results: tags,
      data: require('../../data.yml'), // eslint-disable-line
      scrollMenu: {
        bar: 40,
        left: 0,
        listWidth: 0,
        visibleWidth: 0,
        btnLeft: false,
        btnRight: true,
      }
    }
  },
  mounted() {
    this.scrollMenuRefresh();
    window.onresize = () => {
      this.scrollMenuRefresh();
    };

    $(document).ready(function() {

      $('a:has(b)').css('text-decoration','none');

      // Sticky
      $('body').attr({
        'data-spy': 'scroll',
        'data-target': '#sticky .navbar'
      });
    });

    $(window).scroll(() => {
      const $sticky = $('#sticky');
      if ($(window).scrollTop() > 240) {
        $('#sticky').css({'position': 'fixed', 'width': $('#tips').width()});
      } else {
        $('#sticky').css('position', 'relative');
      };
      if ($(window).scrollTop() > 640) {
        $('#sticky.cats').css({'position': 'fixed', 'width': $('#tips').width()});
      } else {
        $('#sticky.cats').css('position', 'relative');
      };
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
    }
  },
}
</script>
