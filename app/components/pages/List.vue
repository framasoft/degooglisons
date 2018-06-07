<template>
  <main id="list">
    <div class="container ombre">
      <header-component/>
      <div class="clearfix">
        <h1>{{ $t('msg.list.title') }}</h1>
      </div>
    </div>
  </main>
</template>

<script>
import HeaderComponent from '../partials/Header.vue';
import Signature from '../partials/Signature.vue';
import BackTop from '../partials/BackTop.vue';
