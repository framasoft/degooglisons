<template>
  <main id="timeline">
    <section class="intro">
      <div class="container">
        <h1 class="box">
          <img alt="" :src="baseImg + 'smalllogo.png'" /></span>
          <span class="text" v-html="$t('msg.timeline.title')"></span>
        </h1>
        <hr>
      </div>
    </section>
    <section class="timeline">
      <ul>
        <li v-for="(event, index) in $t('msg.timeline.events')" :class="'li-' + $t('msg.timeline.events[' + index + '][0]')">
          <div :class="'fond-' + $t('msg.timeline.events[' + index + '][0]')">
            <time>{{ $t('msg.timeline.events[' + index + '][1]') }}</time>
            <p v-html="$t('msg.timeline.events[' + index + '][2]')"></p>
          </div>
        </li>
      </ul>
    </section>
  </main>
</template>

<script>
export default {
  name: 'Timeline',
  data() {
    const { lang } = document.getElementsByTagName('html')[0];
    const base = (window.location.href.split('/')[3] !== lang) ? `/${window.location.href.split('/')[3]}` : '';
    return {
      frama: 'frama',
      culture: 'culture',
      services: 'services',
      baseImg: `${base}/img/`,
    };
  },
  mounted () {
    (function() {
      // check if an element is in viewport
      // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
      function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }

      function callbackFunc() {
        const items = document.querySelectorAll('.timeline li:not(.in-view)');
        for (let i = 0; i < items.length; i += 1) {
          if (isElementInViewport(items[i])) {
            items[i].classList.add('in-view');
          }
        }
      }

      // listen for events
      window.addEventListener('load', callbackFunc);
      window.addEventListener('resize', callbackFunc);
      window.addEventListener('scroll', callbackFunc);
    })();
  },
}
</script>
