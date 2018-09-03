<template>
  <div id="app">
    <vue-headful
      :title="$t('meta.title')"
      :html="{ body: {id: $route.meta.id } }"
    />
    <router-view></router-view>
  </div>
</template>
