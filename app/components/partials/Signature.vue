<template>
  <div class="clearfix col-xs-12">
    <p class="signature text-right small" style="margin-right:20px">
      {{ $t('meta.start') }} {{ data.meta.start }}<br>
      {{ $t('meta.edit') }} {{ data.meta.edit }}
    </p>
  </div>
</template>

<script>
export default {
  name: 'Signature',
  data() {
    return {
      data: this.$i18n.messages.data,
    }
  },
}
</script>
