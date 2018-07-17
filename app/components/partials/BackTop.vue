<template>
  <a href="#" id="back-to-top" :title="$t('txt.backToTop')" v-scroll-to="'#app'" >
    <i class="fa fa-fw fa-arrow-up" aria-hidden="true"></i>
    <span class="sr-only">$t('txt.backToTop')</span>
  </a>
</template>

<script>
export default {
  mounted () {
    const bTT = document.querySelector('#back-to-top');
    bTT.onclick = () => {
      $('html, body').animate({ // jQuery to remove
        scrollTop: 0
      }, 1000);
    };

    window.addEventListener('scroll', () => {
      if (window.pageYOffset > window.innerHeight) {
        bTT.style = 'display: block;';
      } else {
        bTT.style = 'display: none;';
      };
    });
  }
}


</script>

<style>
#back-to-top {
  display: none;
  position: fixed;
  bottom: 30px;
  right: 30px;
  font-size: 3em;
  padding: 8px 10px;
  border-radius: 10px;
  background-color: #767676;
  opacity: 0.4;
  color: #FFF;
  border: none;

  &:hover,
  &focur {
    opacity: 1;
  }
}
</style>
