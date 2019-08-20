<template>
  <div id="sticky" class="hidden-xs cats" :style="scrollMenu.sticky">
    <div
      class="scroller scroller-left"
      v-if="scrollMenu.btnLeft"
      @click="scrollMenu.left += scrollMenu.visibleWidth; scrollMenuRefresh();">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div
      class="scroller scroller-right"
      v-if="scrollMenu.btnRight"
      @click="scrollMenu.left -= scrollMenu.visibleWidth; scrollMenuRefresh();">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
    <nav class="navbar navbar-default nav-cats" role="navigation">
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul
          class="nav navbar-nav nav-tabs" role="tablist"
          :style="'left: ' + scrollMenu.left + 'px'">
          <li>
            <a href="#bloc-carte" :title="$t('txt.backToMap')"
            data-toggle="tooltip" data-placement="bottom">
            <img
              :src="`${$root['/']}img/${$route.meta.lang}/carte_petite.png`"
              :alt="$t('txt.backToMap')">
            </a>
          </li>
          <li v-for="(icon, cat) in $root.cat1.icons" :key="cat">
            <a :href="`#${cat}`" :title="$t(`cat1.${cat}`)"
              data-toggle="tooltip" data-placement="bottom">
              <i :class="`fa fa-${icon}`" aria-hidden="true"></i>
              <span v-html="$t(`cat1.${cat}`)"></span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  data() {
    return {
      scrollMenu: {
        left: 0,
        listWidth: 0,
        visibleWidth: 0,
        btnLeft: false,
        btnRight: true,
        sticky: 'position: relative;'
      },
    }
  },
  mounted() {
    this.scrollMenuRefresh();
    window.onresize = () => {
      this.scrollMenuRefresh();
      this.stickyCSS();
    };
    window.onscroll = () => {
      this.stickyCSS();
    };

    $(document).ready(() => {
      // Sticky (to replace by https://uiv.wxsm.space/scroll-spy/)
      // (works thanks to the framanav actually)
      $('body').attr({
        'data-spy': 'scroll',
        'data-target': '#sticky .navbar'
      });
    });
  },
  methods: {
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
    },
    stickyCSS() {
      this.scrollMenu.sticky = 'position: relative;';
      if (document.documentElement.scrollTop > 640) {
        this.scrollMenu.sticky = `position: fixed; width: ${document.querySelector('#tips .ombre').offsetWidth}px;`;
      }
    },
  },
}
</script>