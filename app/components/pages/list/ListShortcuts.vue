<template>
  <section>
    <a id="all" class="anchor" rel="nofollow"></a>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 v-text="$t('txt.allServices')" class="panel-title text-center"></h2>
      </div>
      <div class="clearfix">
        <ul class="list-inline">
          <li
            v-for="key in Object.keys($root.services).filter(key => $root.fight.indexOf(key) > -1)"
            :key="key"
            class="col-xs-4 col-sm-3 col-md-2 text-center"
            style="padding:20px">
            <a :href="$root.services[key].FL" class="btn btn-default btn-block"
              :title="$t(`services.${key}.sDesc`)"
              rel="popover" data-placement="bottom"
              :data-content="$t(`services.${key}.lDesc`)">
              <i :class="`fa fa-3x fa-fw fa-${$root.services[key].i} fc_g7`"></i>
              <br>
              <span v-html="$root.services[key].F"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
</template>