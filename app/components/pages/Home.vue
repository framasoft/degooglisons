<template>
  <main>
    <section class="row landing">
      <div class="container-fluid">
        <div class="container">
          <I18n />
          <h1 v-html="$t('meta.DIo')"></h1>
          <div class="row">
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well">
                <a href="#enjeux"
                  v-html="$t('home.intro.bubble1')"
                  @mouseover="explain=true;"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));"
                ></a>
                </p>
            </div>
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well">
                <a href="#solutions"
                  v-html="$t('home.intro.bubble2')"
                  @mouseover="explain=true;"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));"
                ></a></p>
            </div>
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well">
                <router-link :to="'/' + $t('lang') + '/list'"
                  v-html="$t('home.intro.bubble3')">
                </router-link>
              </p>
            </div>
          </div>
        </div>

        <div class="container ombre choice">
          <div class="row text-center">
            <router-link :to="'/' + $t('lang') + '/list'">
              <div class="col-md-6 fb_f6 h3 fc_light" style="margin:0 ; padding:5%">
                <p class="fc_light">{{ $t('home.intro.btnList1') }}</p>
                <p><small><i class="fc_light">{{ $t('home.intro.btnList2') }}</i></small></p>
                <p class="btn-lg btn-default" v-html="$t('home.intro.btnList3')"></p>
              </div>
            </router-link>
            <router-link :to="'/' + $t('lang') + '/alternatives'">
              <div class="col-md-6 fb_o6 h3" style="margin:0 ; padding:5%">
                <p class="fc_light">{{ $t('home.intro.btnAlt1') }}</p>
                <p><small><i class="fc_light">{{ $t('home.intro.btnAlt2') }}</i></small></p>
                <p class="btn-lg btn-default" v-html="$t('home.intro.btnAlt3')"></p>
              </div>
            </router-link>
          </div>
        </div>
      </div>
    </section>

    <section class="row more">
      <div class="container ombre">
        <div class="col-sm-12">
          <h2>{{ $t('home.more.title') }}</h2>
          <p class="accroche" v-html="$t('home.more.desc')"></p>
          <div class="row">
            <div class="col-sm-4">
              <p class="text-center text-primary" aria-hidden="true">
                <a :href="$t('link.docs')">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-graduation-cap fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('home.more.docs.desc')"></p>
              <p>
                <a :href="$t('link.docs')" class="btn btn-xs btn-default">
                  {{ $t('home.more.docs.btn') }}
                </a>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="text-center text-success" aria-hidden="true">
                <a :href="$t('link.cloud')">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-leaf fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('home.more.cloud.desc')"></p>
              <p>
                <a :href="$t('link.cloud')" class="btn btn-xs btn-default">
                  {{ $t('home.more.cloud.btn') }}
                </a>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="text-center text-chatons" aria-hidden="true">
                <a :href="$t('link.chatons')">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-paw fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('home.more.chatons.desc')"></p>
              <p>
                <a :href="$t('link.chatons')" class="btn btn-xs btn-default">
                  {{ $t('home.more.chatons.btn') }}
                </a>
              </p>
            </div>
          </div>

          <h2>{{ $t('home.why.title') }}</h2>
          <p class="accroche" v-html="$t('home.why.desc')"></p>
          <div class="row">
            <div class="col-sm-4">
              <p class="text-center text-danger" aria-hidden="true">
                <a href="#enjeux"
                  @mouseover="explain=true;"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-user-secret fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('home.why.explain.desc')"></p>
              <p>
                <a href="#enjeux" class="btn btn-xs btn-default"
                  @mouseover="explain=true;"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
                  {{ $t('home.why.explain.btn') }}
                </a>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="text-center text-success" aria-hidden="true">
                <a href="#solutions"
                  @mouseover="explain=true;"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-shield fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('home.why.props.desc')"></p>
              <p>
                <a
                  href="#solutions" class="btn btn-xs btn-default"
                  @mouseover="explain=true;"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
                  {{ $t('home.why.props.btn') }}
                </a>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="text-center text-primary" aria-hidden="true">
                <a :href="$t('link.S') + '/association'">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-id-card fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('home.why.who.desc')"></p>
              <p>
                <a :href="$t('link.S') + '/association'" class="btn btn-xs btn-default">
                  {{ $t('home.why.who.btn') }}
                </a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-12 well">
          <div class="row">
            <div class="col-sm-6">
              <h2>{{ $t('home.contact.title') }}</h2>
              <p v-html="$t('home.contact.text1')"></p>
              <ul>
                <li v-for="item in $t('home.contact.text2')" v-html="item"></li>
              </ul>
              <p v-html="$t('home.contact.text3')"></p>
              <p class="clearfix">
                <a :href="$t('link.contact')" class="btn btn-primary col-sm-6 col-sm-offset-3 col-xs-12">
                  <i class="fa fa-fw fa-envelope" aria-hidden="true"></i> 
                  {{ $t('home.contact.btn') }}
                </a>
              </p>
            </div>
            <div class="col-sm-6">
              <h2>{{ $t('home.support.title') }}</h2>
              <p v-html="$t('home.support.text1')"></p>
              <ul>
                <li v-for="item in $t('home.support.text2')" v-html="item"></li>
              </ul>
              <p v-html="$t('home.support.text3')"></p>
              <p class="clearfix">
                <a class="btn btn-soutenir col-sm-6 col-sm-offset-3 col-xs-12" :href="$t('link.S')">
                  <i class="fa fa-w fa-heart" aria-hidden="true"></i>
                  {{ $t('home.support.btn') }}
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="row" id="speakabout">
      <div class="container ombre text-center">
        <h2>{{ $t('home.speakabout.title') }}</h2>
        <ul class="list-inline">
          <li v-for="media in $root.home.medias">
            <a :href="media[0]"><img :src="$root['/'] +'img/medias/' + media[1]" :alt="media[2]"></a>
          </li>
        </ul>
        <p>
          <router-link :to="'/' + $t('lang') + '/medias'" class="btn btn-default btn-lg"
            v-html="$t('home.speakabout.btn')">
          </router-link>
        </p>
      </div>
    </section>

    <section class="row" id="enjeux" v-show="explain">
      <div class="container ombre">
        <div class="col-sm-12">
          <h2>{{ $t('home.explain.stakes.title') }}</h2>
          <p v-html="$t('home.explain.stakes.text1')"></p>
          <p v-html="$t('home.explain.stakes.text2')"></p>
        </div>
        <div class="clearfix">
          <div class="col-sm-12">
            <h2>{{ $t('home.explain.danger.title') }}</h2>
            <p v-html="$t('home.explain.danger.text')"></p>
          </div>
          <div class="clearfix">
            <div class="col-sm-6">
              <h3 id="t2-espionnum"><span class="fa fa-fw fa-eye"></span> {{ $t('home.explain.danger.espionum.title') }}</h3>
              <p v-html="$t('home.explain.danger.espionum.desc')"></p>
              <p>
                <a :href="$t('home.explain.danger.espionum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('home.explain.danger.espionum.ref'); modal.title = $t('home.explain.danger.espionum.title')">
                  {{ $t('txt.examples') }}
                </a>
              </p>
              <p class="text-center">
                <img :src="`${$root['/']}img/${$route.meta.lang}/${$root.img.gee[1]}`" alt="" />
              </p>
            </div>
            <div class="col-sm-6">
              <h3 id="t2-privatum"><span class="fa fa-fw fa-user"></span> {{ $t('home.explain.danger.privatum.title') }}</h3>
              <p v-html="$t('home.explain.danger.privatum.desc')"></p>
              <p>
                <a :href="$t('home.explain.danger.privatum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('home.explain.danger.privatum.ref'); modal.title = $t('home.explain.danger.privatum.title')">
                  {{ $t('txt.examples') }}
                </a>
              </p>
            </div>
          </div>
          <div class="clearfix">
            <div class="col-sm-6">
              <h3 id="t2-centralisum"><span class="fa fa-fw fa-dot-circle-o"></span> {{ $t('home.explain.danger.centralisum.title') }}</h3>
              <p v-html="$t('home.explain.danger.centralisum.desc')"></p>
              <p>
                <a :href="$t('home.explain.danger.centralisum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('home.explain.danger.centralisum.ref'); modal.title = $t('home.explain.danger.centralisum.title')">
                  {{ $t('txt.examples') }}
                </a>
              </p>
            </div>
            <div class="col-sm-6">
              <h3 id="t2-fermetum"><span class="fa fa-fw fa-lock"></span> {{ $t('home.explain.danger.fermetum.title') }}</h3>
              <p v-html="$t('home.explain.danger.fermetum.desc')"></p>
              <p>
                <a :href="$t('home.explain.danger.fermetum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('home.explain.danger.fermetum.ref'); modal.title = $t('home.explain.danger.fermetum.title')">
                  {{ $t('txt.examples') }}
                </a>
              </p>
            </div>
            <p class="col-sm-12 text-center">
              <img :src="`${$root['/']}img/${$route.meta.lang}/${$root.img.gee[0]}`" alt="" />
            </p>
            <modal
              id="myFramaModal"
              v-model="modal.open"
              :title="modal.title"
              :ok-text="$t('txt.close')"
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
                  @click="modal.open = false">{{ $t('txt.close') }}
                </button>
              </div>
            </modal>
          </div>
        </div>
      </div>
    </section>

    <section class="row" id="solutions" v-show="explain">
      <div class="container ombre">
        <div class="clearfix">
          <div class="col-sm-12">
            <h2><a id="leds"></a>{{ $t('home.explain.props.title') }}</h2>
            <p v-html="$t('home.explain.props.text')"></p>
          </div>
          <div class="col-sm-6">
              <h3><span class="fa fa-fw fa-unlock"></span> {{ $t('home.explain.props.libre.title') }}</h3>
              <p v-html="$t('home.explain.props.libre.text1')"></p>
              <p v-html="$t('home.explain.props.libre.text2')"></p>
              <p><strong v-html="$t('home.explain.props.libre.text3')"></strong></p>
          </div>
          <div class="col-sm-6">
              <h3><span class="fa fa-fw fa-eye-slash"></span> {{ $t('home.explain.props.ethic.title') }}</h3>
              <p v-html="$t('home.explain.props.ethic.text1')"></p>
              <p v-html="$t('home.explain.props.ethic.text2')"></p>
              <p><strong v-html="$t('home.explain.props.ethic.text3')"></strong></p>
          </div>
        </div>
        <div class="clearfix">
          <div class="col-sm-6">
              <h3><span class="fa fa-fw fa-share-alt"></span> {{ $t('home.explain.props.decent.title') }}</h3>
              <p v-html="$t('home.explain.props.decent.text1')"></p>
              <p v-html="$t('home.explain.props.decent.text2')"></p>
              <p><strong v-html="$t('home.explain.props.decent.text3')"></strong></p>
          </div>
          <div class="col-sm-6">
              <h3><span class="fa fa-fw fa-users"></span> {{ $t('home.explain.props.solid.title') }}</h3>
              <p v-html="$t('home.explain.props.solid.text1')"></p>
              <p v-html="$t('home.explain.props.solid.text2')"></p>
              <p><strong v-html="$t('home.explain.props.solid.text3')"></strong></p>
          </div>
        </div>
        <p class="col-sm-12 text-center">
          <img :src="`${$root['/']}img/${$route.meta.lang}/${$root.img.gee[4]}`" alt="" />
        </p>
        <div class="clearfix">
          <div class="sm-12">
            <h2>{{ $t('home.explain.concrete.title') }}</h2>
            <p v-html="$t('home.explain.concrete.text1')"></p>
            <p v-html="$t('home.explain.concrete.text2')"></p>
            <p v-html="$t('home.explain.concrete.text3')"></p>
            <p v-html="$t('home.explain.concrete.text4')"></p>
            <p v-html="$t('home.explain.concrete.text5')"></p>
            <p class="text-center">
              <router-link :to="'/' + $t('lang') + '/list'"
                class="btn btn-warning btn-lg"
                v-html="$t('list.title') + ' ' + $root.meta.f">
              </router-link>
            </p>
            <p><img :src="`${$root['/']}img/cloud.jpg`" alt="" class="center-block img-responsive" /></p>
          </div>
        </div>
        <Signature />
      </div>
    </section>
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
    return {
      modal: {
        open: false,
      },
      explain: false,
    }
  },
}
</script>
