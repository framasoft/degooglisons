<template>
  <main>
    <vue-headful
      :title="text(`${$t('meta.title')} - ${$t('medias.title')}`)"
      :description="$t('map.alt')"
    />
    <div class="container ombre">
      <header-component />
      <div class="clearfix">
        <h2 v-html="$t('medias.title')"></h2>
        <p v-html="$t('medias.intro')"></p>
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item" height="400"
                :title="$t('medias.timeline')"
                :src="`${$root['/']}${$t('lang')}/timeline`">
              </iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix">
        <!-- Visuels-->
        <h2 v-html="$t('medias.tabs.title')"></h2>
        <p v-html="$t('medias.tabs.intro')"></p>

        <tabs>
          <!-- Cartes -->
          <tab id="cartes" :title="$t('medias.tabs.tab1.title')" :html-title="true">
            <p v-html="$t('medias.tabs.tab1.intro')"></p>
            <div class="row">
              <div
                v-for="key in Object.keys($t('medias.tabs.tab1.img'))"
                :key="key"
                class="col-sm-4" >
                <div class="thumbnail text-center">
                  <h3 v-html="$t(`medias.tabs.tab1.img.${key}[0]`)"></h3>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                    :title="$t('medias.tabs.saveas')" alt=""
                    :src="`${$root['/']}img/${$route.meta.lang}/${$root.img.carte[key]}`">
                  <p class="text-center" v-html="$t(`medias.tabs.tab1.img.${key}[1]`)"></p>
                </div>
              </div>
            </div>
          </tab>

          <!-- Dessins Gee -->
          <tab id="dessins" :title="$t('medias.tabs.tab2.title')" :html-title="true">
            <p v-html="$t('medias.tabs.tab2.intro')"></p>
            <div class="row">
              <div
                v-for="index in Object.keys($t('medias.tabs.tab2.img'))"
                :key="index"
                class="col-sm-4" >
                <div class="thumbnail text-center">
                  <h3 v-html="$t(`medias.tabs.tab2.img[${index}]`)"></h3>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                    :title="$t('medias.tabs.saveas')" alt=""
                    :src="`${$root['/']}img/${$route.meta.lang}/${$root.img.gee[index]}`">
                </div>
              </div>
              <div class="col-sm-8 col-sm-offset-2">
                <div class="thumbnail text-center">
                  <h3 v-html="$t('meta.dio')"></h3>
                  <video controls="controls" width="540" height="360">
                    <source :src="`${$root['/']}img/${$route.meta.lang}/anim_dio.webm`" type="video/webm" />
                    <source :src="`${$root['/']}img/${$route.meta.lang}/anim_dio.mp4`" type="video/mp4" />
                  </video>
                  <pre
                    v-text="`&lt;video controls=&quot;controls&quot; width=&quot;540&quot; height=&quot;360&quot;&gt;&lt;source src=&quot;${$root.link.dio}/img/${$route.meta.lang}/anim_dio.webm&quot; type=&quot;video/webm&quot; /&gt;&lt;source src=&quot;${$root.link.dio}/img/${$route.meta.lang}/anim_dio.mp4&quot; type=&quot;video/mp4&quot;&gt;&lt;/video&gt;`">
                  </pre>
                </div>
              </div>
            </div>
          </tab>

          <!-- Dessins Péhä -->
          <tab id="dessins-peha" :title="$t('medias.tabs.tab6.title')" :html-title="true">
            <p v-html="$t('medias.tabs.tab6.intro')"></p>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <div class="thumbnail text-center">
                  <h3 v-html="$t('medias.tabs.tab6.img[4]')"></h3>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                    :title="$t('medias.tabs.saveas')" alt=""
                    :src="`${$root['/']}img/${$route.meta.lang}/${$root.img.peha[4]}`">
                </div>
              </div>
              <div
                v-for="index in Object.keys($t('medias.tabs.tab6.img')).filter(i => i != 4)"
                :key="index"
                class="col-sm-6" >
                <div class="thumbnail text-center">
                  <h3 v-html="$t(`medias.tabs.tab6.img[${index}]`)"></h3>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                    :title="$t('medias.tabs.saveas')" alt=""
                    :src="`${$root['/']}img/${$route.meta.lang}/${$root.img.peha[index]}`">
                </div>
              </div>
            </div>
          </tab>

          <!-- Stickers -->
          <tab id="stickers" :title="$t('medias.tabs.tab5.title')" :html-title="true">
            <div class="row">
              <div
                v-for="(sticker, index) in $root.img.stickers"
                :key="index"
                class="col-sm-4" >
                <div class="thumbnail text-center">
                  <h3 v-html="sticker[0]"></h3>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                    :title="$t('medias.tabs.saveas')" alt=""
                    :src="`${$root['/']}img/${sticker[1]}`">
                  <p class="text-center" v-html="sticker[2]"></p>
                </div>
              </div>
            </div>
          </tab>

          <!-- Vidéos -->
          <tab id="videos" :title="$t('medias.tabs.tab3.title')" :html-title="true">
            <p v-html="$t('medias.tabs.tab3.intro')"></p>
            <div class="row">
              <div v-for="key in Object.keys($t('medias.tabs.tab3.video'))" :key="key" class="col-md-6">
                <h3 v-html="$t(`medias.tabs.tab3.video.${key}[0]`)"></h3>
                <p class="text-center"><iframe width="560" height="315" :src="$t(`medias.tabs.tab3.video.${key}[1]`)" allowfullscreen></iframe></p>
                <pre
                  v-text="`&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;${$t(`medias.tabs.tab3.video.${key}[1]`)}&quot; allowfullscreen&gt;&lt;/iframe&gt;`">
                </pre>
              </div>
             </div>
          </tab>

          <!-- Présentation -->
          <tab id="presentation" :title="$t('medias.tabs.tab4.title')" :html-title="true">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="text-center">
                  <h3 v-html="$t('medias.tabs.tab4.title')"></h3>
                  <p class="text-center">
                    <iframe :src="`${$root.link.dio}/presentation/`" width="800" height="600" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
                  </p>
                  <pre
                    v-text="`&lt;iframe src=&quot;${$root.link.dio}/presentation/&quot; width=&quot;800&quot; height=&quot;600&quot; frameborder=&quot;0&quot; marginwidth=&quot;0&quot; marginheight=&quot;0&quot; scrolling=&quot;no&quot;&gt;&lt;/iframe&gt;`">
                  </pre>
                </div>
              </div>
            </div>
          </tab>

          <!-- Infographie G Dorne -->
          <tab id="infographie" :title="$t('medias.tabs.tab7.title')" :html-title="true">
            <p v-html="$t('medias.tabs.tab7.intro')"></p>
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="thumbnail text-center">
                  <h3 v-html="$t('medias.tabs.tab7.title')"></h3>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                    :title="$t('medias.tabs.saveas')" alt=""
                    :src="`${$root['/']}img/${$route.meta.lang}/infographie_Le-Monde-de-Framasoft_CC-By-SA-Geoffrey-Dorne-1920px-2018.jpg`"
                  >
                  <p class="text-center" v-html="$t('medias.tabs.tab7.img[0]')"></p>
                </div>
              </div>
            </div>
          </tab>
        </tabs>
      </div>

      <div class="clearfix">
        <!-- Revue de web-->
        <h2 v-html="$t('medias.press.title')"></h2>
        <p v-html="$t('medias.press.intro')"></p>
        <div class="col-sm-8 col-sm-offset-2 well">
          <table class="table">
            <thead>
              <tr>
                <th v-html="$t('medias.press.th1')"></th>
                <th v-html="$t('medias.press.th2')"></th>
                <th v-html="$t('medias.press.th3')"></th>
              </tr>
            </thead>
            <tbody>
              <tr
                v-for="item in $root.medias.press.list"
                :key="item[3]"
                :class="!(item[0] === $t('lang') || (item[0] === 'en' && $t('lang') !== 'fr')) ? 'hidden' : ''">
                <td v-html="(new Intl.DateTimeFormat($t('lang')).format(new Date(item[1])))"></td>
                <td v-html="item[2]"></td>
                <td><a :href="item[3]" :hreflang="item[0]" v-html="$t(item[4])"></a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="clearfix">
        <h2 v-html="$t('medias.frama.title')"></h2>
        <div class="col-sm-8">
          <ul>
            <li
              v-for="item in $t('medias.frama.list')"
              :key="item"
              v-html="item">
            </li>
          </ul>
          <p class="text-center">
            <img :src="`${$root['/']}img/biglogo.png`" alt="" style="width:220px; margin:10px 30px"/>
            <img :src="`${$root['/']}img/biglogo-noir.png`" alt="" style="width:220px; margin:10px 30px"/>
          </p>
        </div>

        <div class="col-sm-4 well">
          <p v-html="$t('medias.frama.text1')"></p>
          <p v-html="$t('medias.frama.text2')"></p>
          <p v-html="$t('medias.frama.text3')"></p>
        </div>
      </div>
      <Signature />
    </div>
    <BackTop />
  </main>
</template>
<script>
import { Tabs, Tab } from 'uiv';

import HeaderComponent from '../partials/Header.vue';
import Signature from '../partials/Signature.vue';
import BackTop from '../partials/BackTop.vue';

export default {
  name: 'Medias',
  components: {
    HeaderComponent,
    Signature,
    BackTop,
    Tabs, Tab,
  },
}
</script>
