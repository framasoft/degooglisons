<template>
  <article v-if="$root.fight.indexOf(id) > -1 && (category === 'all' || category === $root.services[id].c2)"
    class="col-md-3 col-sm-6 text-center">
    <h3>
      <i :class="`fa fa-2x fa-${$root.services[id].i}`"></i><br>
      <p v-html="$root.services[id].F"></p>
    </h3>
    <p class="desc" v-html="$t(`services.${id}.tDesc`)"></p>
    <p><img class="img-responsive" :src="`${$root['/']}img/screens/${text($root.services[id].F, 'noframa latin sanitize')}.png`" alt="" /></p>
    <div class="clearfix">
      <a v-text="$t('txt.use')" :href="$root.services[id].FL" class="btn btn-link btn-lg pull-left text-uppercase"></a>

      <dropdown dropup ref="dropdown" menu-right class="pull-right">
        <btn :id="`dropdown-${id}`"
          type="button" class="btn btn-link btn-lg dropdown-toggle"
          aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-lg fa-question-circle-o" aria-hidden="true"></i>
          <span v-text="$t('txt.plus')" class="sr-only"></span>
        </btn>
        <template slot="dropdown">
          <li>
            <a
              v-text="$t('txt.more')"
              href="javascript:void(0);"
              data-toggle="modal" :data-target="`#modal-t-${id}`"
              @click="modal.open = true; modal.key = id;">
            </a>
          </li>
          <li><a :href="docLink(id)" v-text="$t('txt.docs')"></a></li>
        </template>
      </dropdown>
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
      size="lg"
    >
      <!-- modal-header -->
      <div slot="title">
        <img class="pull-left" :src="`https://framasoft.org/nav/img/icons/${text($root.services[modal.key].F, 'noframa latin sanitize')}.png`">
        <span v-html="$root.services[modal.key].F" class="frama"></span>
        <br>
        <span v-html="$t(`services.${modal.key}.lDesc`)" class="desc"></span>
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
      <p v-if="$t(`services.${modal.key}.mBody.more`) !== `services.${modal.key}.mBody.more`"
          v-html="$t(`services.${modal.key}.mBody.more`).replace(/@framaservice/g, $root.services[modal.key].F)"></p>

      <!-- features -->
      <div v-if="$t(`services.${modal.key}.mBody.feat`) !== `services.${modal.key}.mBody.feat`">
        <h5 v-text="$t('txt.features')" class="h3 violet"></h5>
        <ul v-if="Array.isArray($t(`services.${modal.key}.mBody.feat`))">
          <li
            v-for="item in $t(`services.${modal.key}.mBody.feat`)"
            :key="item"
            v-html="item.replace(/@framaservice/g, $root.services[modal.key].F)"
          ></li>
        </ul>
        <p
          v-else
          v-html="$t(`services.${modal.key}.mBody.feat`).replace(/@framaservice/g, $root.services[modal.key].F)">
        </p>
      </div>

      <!-- modal-footer -->
      <div slot="footer">
        <!-- tags buttons -->
        <ul class="list-inline col-md-6 text-left">
          <li
            v-for="tag in $t(`services.${modal.key}.tags`).split(', ').filter(e => e !== '' && e !== ' ')"
            :key="tag">
            <a
              v-text="tag.replace(/ /, '').toLowerCase()"
              :href="`#tag-${tag.replace(' ', '-').toLowerCase()}`"
              class="btn btn-xs btn-default"
              @click="modal.open = false; (results.indexOf(tag) === -1) ? results.push(tag) : results.pop(tag) ;"
              v-scroll-to="'#results_wrapper'">
            </a>
          </li>
        </ul>
        <!-- docs / install buttons -->
        <div class="col-md-6 text-right">
          <a :href="docLink(modal.key)"
            class="btn btn-lg btn-link text-uppercase"
            v-text="$t('txt.docs')">
          </a>

          <a v-text="$t('txt.use')"
            :href="$root.services[modal.key].FL"
            class="btn btn-lg btn-link text-uppercase">
          </a>
        </div>
      </div>
    </modal>
    <!-- </modal> -------------------------------------------- -->
  </article>
</template>

<script>
import { Modal, Dropdown, Btn } from 'uiv';

export default {
  components: {
    Modal, Dropdown, Btn,
  },
  props: {
    id: {
      type: String,
      required: true,
    },
    category: {
      type: String,
      required: true,
    },
  },
  data() {
    return {
      modal: {
        open: false,
        key: 'bitly',
      },
    }
  },
  methods: {
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