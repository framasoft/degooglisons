<template>
  <div class="pull-right">
    <dropdown ref="dropdown" menu-right>
      <btn type="button" class="btn btn-default dropdown-toggle"
        aria-haspopup="true" aria-expanded="false"
        :title="$t('nav.langChange')">
        <i class="fa fa-lg fa-language" aria-hidden="true"></i>
        <span v-html="$t('nav.lang')"></span>
        <span class="caret"></span>
      </btn>
      <template slot="dropdown">
        <li v-for="lang in locales.available"
          :key="lang"
          @click="changeLanguage(lang)">
          <router-link
            v-text="locales[lang]"
            :to="`/${lang}/${($route.path.split('/')[2] || '')}`">
          </router-link>
        </li>
        <li v-if="$root.meta.i18n" role="separator" class="divider"></li>
        <li v-if="$root.meta.i18n">
          <a :href="$root.meta.i18n">
            <i class="fa fa-fw fa-plus" aria-hidden="true"></i>
            <span v-html="$t('nav.translate')"></span>
          </a>
        </li>
      </template>
    </dropdown>
  </div>
</template>

<script>
import { Btn, Dropdown } from 'uiv';

export default {
  components: {
    Btn, Dropdown,
  },
  data() {
    return {
      currentComponent: '',
      switchLanguage: 'en',
      locales: this.$i18n.messages.locales,
    };
  },
  methods: {
    changeLanguage(lang) {
      this.switchLanguage = lang;
      this.$i18n.locale = lang;
      this.currentComponent = this.$route.path.split('/')[2]; // eslint-disable-line prefer-destructuring
    },
  },
};
</script>
