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
          :style="`left: ${scrollMenu.left}px`">
          <li>
            <a href="#tagssearch" :title="$t('txt.searchByTags')">
              <i class="fa fa-lg fa-search" aria-hidden="true"></i>
              <span v-text="$t('txt.searchByTags')" class="sr-only"></span>
            </a>
          </li>
          <li><a href="#all" v-text="$t('txt.allServices')"></a></li>
          <li v-for="cat in Object.keys($root.cat2.icons)" :key="cat">
            <a v-text="$t(`cat2.${cat}`)" :href="`#${cat}`" :title="$t(`cat2.${cat}`)"></a>
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
        this.scrollMenu.sticky = `position: fixed; width: ${document.querySelector('#tips').offsetWidth}px;`;
      }
    },
  },
}
</script>