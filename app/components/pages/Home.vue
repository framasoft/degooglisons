<template>
  <main>
    <vue-headful
      :description="text(`${$t('home.intro.bubble1')} ${$t('home.intro.bubble2')} ${$t('home.intro.bubble3')}`)"
    />
    <section class="row landing">
      <div class="container-fluid">
        <div class="container">
          <I18n />
          <h1 v-html="$t('meta.DIo')"></h1>
          <div class="row">
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well">
                <a
                  v-html="$t('home.intro.bubble1')"
                  href="#enjeux"
                  @mouseover="explain=true;"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
                </a>
              </p>
            </div>
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well">
                <a
                  v-html="$t('home.intro.bubble2')"
                  href="#solutions"
                  @mouseover="explain=true;"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
                </a>
              </p>
            </div>
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well">
                <router-link
                  v-html="$t('home.intro.bubble3')"
                  :to="`/${$t('lang')}/list`">
                </router-link>
              </p>
            </div>
          </div>
        </div>

        <div class="container ombre choice">
          <div class="row text-center">
            <router-link :to="`/${$t('lang')}/list`">
              <div class="col-md-6 fb_f6 h3 fc_light" style="margin:0 ; padding:5%">
                <p v-html="$t('home.intro.btnList1')" class="fc_light"></p>
                <p><small><i v-html="$t('home.intro.btnList2')" class="fc_light"></i></small></p>
                <p v-html="$t('home.intro.btnList3')" class="btn-lg btn-default"></p>
              </div>
            </router-link>
            <router-link :to="`/${$t('lang')}/alternatives`">
              <div class="col-md-6 fb_o6 h3" style="margin:0 ; padding:5%">
                <p v-html="$t('home.intro.btnAlt1')" class="fc_light"></p>
                <p><small><i v-html="$t('home.intro.btnAlt2')" class="fc_light"></i></small></p>
                <p v-html="$t('home.intro.btnAlt3')" class="btn-lg btn-default"></p>
              </div>
            </router-link>
          </div>
        </div>
      </div>
    </section>

    <section class="row more">
      <div class="container ombre">
        <div class="col-sm-12">
          <h2 v-html="$t('home.more.title')"></h2>
          <p v-html="$t('home.more.desc')" class="accroche"></p>
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
                <a
                  v-html="$t('home.more.docs.btn')"
                  :href="$t('link.docs')"
                  class="btn btn-xs btn-default">
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
                <a
                  v-html="$t('home.more.cloud.btn')"
                  :href="$t('link.cloud')"
                  class="btn btn-xs btn-default">
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
                <a
                  v-html="$t('home.more.chatons.btn')"
                  :href="$t('link.chatons')"
                  class="btn btn-xs btn-default">
                </a>
              </p>
            </div>
          </div>

          <h2 v-html="$t('home.why.title')"></h2>
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
                <a
                  v-html="$t('home.why.explain.btn')"
                  href="#enjeux"
                  class="btn btn-xs btn-default"
                  @mouseover="explain=true;"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
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
                  v-html="$t('home.why.props.btn')"
                  href="#solutions" class="btn btn-xs btn-default"
                  @mouseover="explain=true;"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
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
                <a
                  v-html="$t('home.why.who.btn')"
                  :href="`${$t('link.S')}/association`"
                  class="btn btn-xs btn-default">
                </a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-12 well">
          <div class="row">
            <div class="col-sm-6">
              <h2 v-html="$t('home.contact.title')"></h2>
              <p v-html="$t('home.contact.text1')"></p>
              <ul>
                <li
                  v-for="item in $t('home.contact.text2')"
                  :key="item"
                  v-html="item">
                </li>
              </ul>
              <p v-html="$t('home.contact.text3')"></p>
              <p class="clearfix">
                <a :href="$t('link.contact')" class="btn btn-primary col-sm-6 col-sm-offset-3 col-xs-12">
                  <i class="fa fa-fw fa-envelope" aria-hidden="true"></i> 
                  <span v-html="$t('home.contact.btn')"></span>
                </a>
              </p>
            </div>
            <div class="col-sm-6">
              <h2 v-html="$t('home.support.title')"></h2>
              <p v-html="$t('home.support.text1')"></p>
              <ul>
                <li
                  v-for="item in $t('home.support.text2')"
                  :key="item"
                  v-html="item">
                </li>
              </ul>
              <p v-html="$t('home.support.text3')"></p>
              <p class="clearfix">
                <a class="btn btn-soutenir col-sm-6 col-sm-offset-3 col-xs-12" :href="$t('link.S')">
                  <i class="fa fa-w fa-heart" aria-hidden="true"></i>
                  <span v-html="$t('home.support.btn')"></span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="speakabout" class="row">
      <div class="container ombre text-center">
        <h2 v-html="$t('home.speakabout.title')"></h2>
        <ul class="list-inline">
          <li v-for="media in $root.home.medias" :key="media">
            <a :href="media[0]"><img :src="`${$root['/']}img/medias/${media[1]}`" :alt="media[2]"></a>
          </li>
        </ul>
        <p>
          <router-link
            v-html="$t('home.speakabout.btn')"
            :to="`/${$t('lang')}/medias`"
            class="btn btn-default btn-lg">
          </router-link>
        </p>
      </div>
    </section>

    <section v-show="explain" id="enjeux" class="row">
      <div class="container ombre">
        <div class="col-sm-12">
          <h2 v-html="$t('home.explain.stakes.title')"></h2>
          <p v-html="$t('home.explain.stakes.text1')"></p>
          <p v-html="$t('home.explain.stakes.text2')"></p>
        </div>
        <div class="clearfix">
          <div class="col-sm-12">
            <h2 v-html="$t('home.explain.danger.title')"></h2>
            <p v-html="$t('home.explain.danger.text')"></p>
          </div>
          <div class="clearfix">
            <div class="col-sm-6">
              <h3 id="t2-espionnum">
                <i class="fa fa-fw fa-eye" aria-hidden="true"></i>
                <span v-html="$t('home.explain.danger.espionum.title')"></span>
              </h3>
              <p v-html="$t('home.explain.danger.espionum.desc')"></p>
              <p>
                <a
                  v-html="$t('txt.examples')"
                  :href="$t('home.explain.danger.espionum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('home.explain.danger.espionum.ref'); modal.title = $t('home.explain.danger.espionum.title')">
                </a>
              </p>
              <p class="text-center">
                <img :src="`${$root['/']}img/${$route.meta.lang}/${$root.img.gee[1]}`" alt="" />
              </p>
            </div>
            <div class="col-sm-6">
              <h3 id="t2-privatum">
                <i class="fa fa-fw fa-user" aria-hidden="true"></i>
                <span v-html="$t('home.explain.danger.privatum.title')"></span>
              </h3>
              <p v-html="$t('home.explain.danger.privatum.desc')"></p>
              <p>
                <a
                  v-html="$t('txt.examples')"
                  :href="$t('home.explain.danger.privatum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('home.explain.danger.privatum.ref'); modal.title = $t('home.explain.danger.privatum.title')">
                </a>
              </p>
            </div>
          </div>
          <div class="clearfix">
            <div class="col-sm-6">
              <h3 id="t2-centralisum">
                <i class="fa fa-fw fa-dot-circle-o" aria-hidden="true"></i>
                <span v-html="$t('home.explain.danger.centralisum.title')"></span>
              </h3>
              <p v-html="$t('home.explain.danger.centralisum.desc')"></p>
              <p>
                <a
                  v-html="$t('txt.examples')"
                  :href="$t('home.explain.danger.centralisum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('home.explain.danger.centralisum.ref'); modal.title = $t('home.explain.danger.centralisum.title')">
                </a>
              </p>
            </div>
            <div class="col-sm-6">
              <h3 id="t2-fermetum">
                <i class="fa fa-fw fa-lock" aria-hidden="true"></i>
                <span v-html="$t('home.explain.danger.fermetum.title')"></span> 
              </h3>
              <p v-html="$t('home.explain.danger.fermetum.desc')"></p>
              <p>
                <a
                  v-html="$t('txt.examples')"
                  :href="$t('home.explain.danger.fermetum.ref')"
                  class="btn btn-primary btn-xs" onclick="return false;"
                  @click="modal.open = true; modal.href = $t('home.explain.danger.fermetum.ref'); modal.title = $t('home.explain.danger.fermetum.title')">
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
              size="lg">
              <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" :src="modal.href"></iframe>
              </div>
              <div slot="footer">
                <button
                  v-html="$t('txt.close')"
                  class="btn btn-default"
                  @click="modal.open = false">
                </button>
              </div>
            </modal>
          </div>
        </div>
      </div>
    </section>

    <section v-show="explain" id="solutions" class="row">
      <div class="container ombre">
        <div class="clearfix">
          <div class="col-sm-12">
            <h2>
              <a id="leds"></a>
              <span v-html="$t('home.explain.props.title')"></span>
            </h2>
            <p v-html="$t('home.explain.props.text')"></p>
          </div>
          <div class="col-sm-6">
              <h3>
                <i class="fa fa-fw fa-unlock" aria-hidden="true"></i>
                <span v-html="$t('home.explain.props.libre.title')"></span>
              </h3>
              <p v-html="$t('home.explain.props.libre.text1')"></p>
              <p v-html="$t('home.explain.props.libre.text2')"></p>
              <p><strong v-html="$t('home.explain.props.libre.text3')"></strong></p>
          </div>
          <div class="col-sm-6">
              <h3>
                <i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i>
                <span v-html="$t('home.explain.props.ethic.title')"></span>
              </h3>
              <p v-html="$t('home.explain.props.ethic.text1')"></p>
              <p v-html="$t('home.explain.props.ethic.text2')"></p>
              <p><strong v-html="$t('home.explain.props.ethic.text3')"></strong></p>
          </div>
        </div>
        <div class="clearfix">
          <div class="col-sm-6">
              <h3>
                <i class="fa fa-fw fa-share-alt" aria-hidden="true"></i>
                <span v-html="$t('home.explain.props.decent.title')"></span>
              </h3>
              <p v-html="$t('home.explain.props.decent.text1')"></p>
              <p v-html="$t('home.explain.props.decent.text2')"></p>
              <p><strong v-html="$t('home.explain.props.decent.text3')"></strong></p>
          </div>
          <div class="col-sm-6">
              <h3>
                <i class="fa fa-fw fa-users" aria-hidden=""></i>
                <span v-html="$t('home.explain.props.solid.title')"></span>
              </h3>
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
            <h2 v-html="$t('home.explain.concrete.title')"></h2>
            <p v-html="$t('home.explain.concrete.text1')"></p>
            <p v-html="$t('home.explain.concrete.text2')"></p>
            <p v-html="$t('home.explain.concrete.text3')"></p>
            <p v-html="$t('home.explain.concrete.text4')"></p>
            <p v-html="$t('home.explain.concrete.text5')"></p>
            <p class="text-center">
              <router-link
                v-html="`${$t('list.title')} ${$root.meta.f}`"
                :to="`/${$t('lang')}/list`"
                class="btn btn-warning btn-lg">
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
