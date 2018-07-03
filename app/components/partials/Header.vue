<template>
  <div id="framaheader">
    <header class="clearfix">
      <div class="pull-right">
        <I18n/>
      </div>
      <h1 v-html="$t('msg.meta.DIo')"></h1>
      <p class="lead text-center" v-html="$t('msg.' + (this.$route.path.split('/')[2].replace('ernatives', '') || 'meta') + '.title')"></p>
      <hr class="trait clearfix" role="presentation" />
    </header>
  </div>
</template>

<script>
import I18n from './I18n.vue'
export default {
  name: 'framaheader',
  components: {
    I18n,
  }
}
</script>

