<template>
  <main>
    <section class="intro">
      <div class="container">
        <h1 class="box">
          <img alt="" :src="`${$root['/']}img/smalllogo.png`" /></span>
          <span class="text" v-html="$t('timeline.title')"></span>
        </h1>
        <hr>
      </div>
    </section>
    <section class="timeline">
      <ul>
        <li v-for="(event, index) in $root.timeline.events" :class="'li-' + event[0]" v-if="event[1] !== undefined">
          <div :class="'fond-' + event[0]">
            <time>{{ (new Intl.DateTimeFormat($t('lang'), $root.timeline.format).format(new Date(event[1]))) }}</time>
            <p v-html="$t('timeline.events[' + index + ']').replace('<a ', '<a target=\'_parent\' ')"></p>
          </div>
        </li>
      </ul>
    </section>
  </main>
</template>

<script>
export default {
  name: 'Timeline',
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
