<template>
  <main id="home">
    <div class="row landing">
      <div class="container-fluid">
        <div class="container">
          <I18n />
          <h1 v-html="$t('msg.meta.DIo')"></h1>
          <div class="row">
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well">
                <a href="#enjeux"
                  v-html="$t('msg.home.intro.bubble1')"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));"
                ></a>
                </p>
            </div>
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well">
                <a href="#solutions"
                  v-html="$t('msg.home.intro.bubble2')"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));"
                ></a></p>
            </div>
            <div class="col-sm-4 hidden-xs">
              <p class="text-center well">
                <router-link :to="'/' + $t('lang') + '/list'"
                  v-html="$t('msg.home.intro.bubble3')">
                </router-link>
              </p>
            </div>
          </div>
        </div>

        <div class="container ombre choice">
          <div class="row text-center">
            <router-link :to="'/' + $t('lang') + '/list'">
              <div class="col-md-6 fb_f6 h3 fc_light" style="margin:0 ; padding:5%">
                <p class="fc_light">{{ $t('msg.home.intro.btnList1') }}</p>
                <p><small><i class="fc_light">{{ $t('msg.home.intro.btnList2') }}</i></small></p>
                <p class="btn-lg btn-default" v-html="$t('msg.home.intro.btnList3')"></p>
              </div>
            </router-link>
            <router-link :to="'/' + $t('lang') + '/alternatives'">
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
                <a href="#enjeux"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-user-secret fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('msg.home.why.explain.desc')"></p>
              <p>
                <a href="#enjeux" class="btn btn-xs btn-default"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
                  {{ $t('msg.home.why.explain.btn') }}
                </a>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="text-center text-success" aria-hidden="true">
                <a href="#solutions"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-shield fa-stack-1x"></i>
                  </span>
                </a>
              </p>
              <p v-html="$t('msg.home.why.props.desc')"></p>
              <p>
                <a
                  href="#solutions" class="btn btn-xs btn-default"
                  @click="explain=true; $scrollTo($event.currentTarget.href.replace(/(.*)(#.*)/, '$2'));">
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
          <li v-for="media in $t('data.home.medias')">
            <a :href="media[0]"><img :src="$t('baseImg') +'medias/' + media[1]" :alt="media[2]"></a>
          </li>
        </ul>
        <p>
          <router-link :to="'/' + $t('lang') + '/medias'" class="btn btn-default btn-lg"
            v-html="$t('msg.home.speakabout.btn')">
          </router-link>
        </p>
      </div>
    </div>

    <div class="row" id="enjeux" v-show="explain">
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
                <img :src="$t('baseImg') + $t('msg.medias.tabs.tab2.img[1][1]')" alt="" />
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
              <img :src="$t('baseImg') + $t('msg.medias.tabs.tab2.img[0][1]')" alt="" />
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

    <div class="row" id="solutions" v-show="explain">
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
          <img :src="$t('baseImg') + $t('msg.medias.tabs.tab2.img[4][1]')" alt="" />
        </p>
        <div class="clearfix">
          <h2>{{ $t('msg.home.explain.concrete.title') }}</h2>
          <p v-html="$t('msg.home.explain.concrete.text1')"></p>
          <p v-html="$t('msg.home.explain.concrete.text2')"></p>
          <p v-html="$t('msg.home.explain.concrete.text3')"></p>
          <p v-html="$t('msg.home.explain.concrete.text4')"></p>
          <p v-html="$t('msg.home.explain.concrete.text5')"></p>
          <p class="text-center">
            <router-link :to="'/' + $t('lang') + '/list'"
              class="btn btn-warning btn-lg"
              v-html="$t('msg.list.title') + ' ' + $t('data.meta.f')">
            </router-link>
          </p>
          <p><img :src="$t('baseImg') + 'img/cloud.jpg'" alt="" class="center-block img-responsive" /></p>
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
    return {
      modal: {
        open: false,
      },
      explain: false,
    }
  },
  mounted () {
    $('a:has(b)').css('text-decoration', 'none');
  }
}
</script>
