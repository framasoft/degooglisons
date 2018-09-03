<template>
  <main>
    <div class="container ombre">
      <header-component />
      <div class="clearfix">
        <h2>{{ $t('medias.title') }}</h2>
        <p v-html="$t('medias.intro')"></p>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="embed-responsive embed-responsive-4by3">
              <iframe class="embed-responsive-item" :title="$t('medias.timeline')" :src="`${data['/']}${$t('lang')}/timeline`" height="400">
              </iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix">
        <!-- Visuels-->
        <h2>{{ $t('medias.tabs.title') }}</h2>
        <p v-html="$t('medias.tabs.intro')"></p>

        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#cartes" aria-controls="cartes" role="tab" data-toggle="tab" v-html="$t('medias.tabs.tab1.title')"></a></li>
          <li role="presentation"><a href="#dessins" aria-controls="dessins" role="tab" data-toggle="tab" v-html="$t('medias.tabs.tab2.title')"></a></li>
          <li role="presentation"><a href="#dessins-peha" aria-controls="dessins-peha" role="tab" data-toggle="tab" v-html="$t('medias.tabs.tab6.title')"></a></li>
          <li role="presentation"><a href="#stickers" aria-controls="stickers" role="tab" data-toggle="tab" v-html="$t('medias.tabs.tab5.title')"></a></li>
          <li role="presentation"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab" v-html="$t('medias.tabs.tab3.title')"></a></li>
          <li role="presentation"><a href="#presentation" aria-controls="presentation" role="tab" data-toggle="tab" v-html="$t('medias.tabs.tab4.title')"></a></li>
          <li role="infographie"><a href="#infographie" aria-controls="infographie" role="tab" data-toggle="tab" v-html="$t('medias.tabs.tab7.title')"></a></li>
        </ul>

        <div class="tab-content">

          <!-- Cartes -->
          <div role="tabpanel" class="tab-pane active" id="cartes">
            <p v-html="$t('medias.tabs.tab1.intro')"></p>
            <div class="row">
              <div class="col-sm-4" v-for="(img, index) in $t('medias.tabs.tab1.img')">
                <div class="thumbnail text-center">
                  <h3>{{ $t('medias.tabs.tab1.img[' + index + '][0]') }}</h3>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                    :title="$t('medias.tabs.saveas')" alt=""
                    :src="data['/img/'] + $t('medias.tabs.tab1.img[' + index + '][1]')" />
                  <p class="text-center">{{ $t('medias.tabs.tab1.img[' + index + '][2]') }}</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Dessins Gee-->
          <div role="tabpanel" class="tab-pane" id="dessins">
            <p v-html="$t('medias.tabs.tab2.intro')"></p>
            <div class="row">
              <div class="col-sm-4" v-for="(img, index) in $t('medias.tabs.tab2.img')">
                <div class="thumbnail text-center">
                  <h3>{{ $t('medias.tabs.tab2.img[' + index + '][0]') }}</h3>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                    :title="$t('medias.tabs.saveas')" alt=""
                    :src="data['/img/'] + $t('medias.tabs.tab2.img[' + index + '][1]')" />
                </div>
              </div>
              <div class="col-sm-8 col-sm-offset-2">
                <div class="thumbnail text-center">
                  <h3 v-html="$t('medias.tabs.tab2.video[0][0]')"></h3>
                  <video controls="controls" width="540" height="360">
                    <source :src="data['/img/'] + $t('medias.tabs.tab2.video[0][1]') + '.webm'" type="video/webm" />
                    <source :src="data['/img/'] + $t('medias.tabs.tab2.video[0][1]') + '.mp4'" type="video/mp4" />
                  </video>
                  <pre>&lt;video controls="controls" width="540" height="360"&gt;&lt;source src="{{ data['/img/'] + $t('medias.tabs.tab2.video[0][1]') }}.webm" type="video/webm" /&gt;&lt;source src="{{ data['/img/'] + $t('medias.tabs.tab2.video[0][1]') }}.mp4" type="video/mp4"&gt;&lt;/video&gt;</pre>
                </div>
              </div>
            </div>
          </div>
          <!-- Dessins Péhä-->
          <div role="tabpanel" class="tab-pane" id="dessins-peha">
            <p v-html="$t('medias.tabs.tab6.intro')"></p>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <div class="thumbnail text-center">
                  <h3>{{ $t('medias.tabs.tab6.img[4][0]') }}</h3>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                    :title="$t('medias.tabs.saveas')" alt=""
                    :src="data['/img/'] + $t('medias.tabs.tab6.img[4][1]')" />
                </div>
              </div>
              <div class="col-sm-6" v-for="(img, index) in $t('medias.tabs.tab6.img')" v-if="index != 4">
                <div class="thumbnail text-center">
                  <h3>{{ $t('medias.tabs.tab6.img[' + index + '][0]') }}</h3>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                    :title="$t('medias.tabs.saveas')" alt=""
                    :src="data['/img/'] + $t('medias.tabs.tab6.img[' + index + '][1]')" />
                </div>
              </div>
            </div>
          </div>
          <!-- Stickers -->
          <div role="tabpanel" class="tab-pane" id="stickers">
            <div class="row">
              <div class="col-sm-4" v-for="(img, index) in $t('medias.tabs.tab5.img')">
                <div class="thumbnail text-center">
                  <h3>{{ $t('medias.tabs.tab5.img[' + index + '][0]') }}</h3>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                    :title="$t('medias.tabs.saveas')" alt=""
                    :src="data['/img/'] + $t('medias.tabs.tab5.img[' + index + '][1]')" />
                  <p class="text-center" v-html="$t('medias.tabs.tab5.img[' + index + '][2]')"></p>
                </div>
              </div>
            </div>
          </div>
          <!-- Vidéos -->
          <div role="tabpanel" class="tab-pane" id="videos">
            <p v-html="$t('medias.tabs.tab3.intro')"></p>
            <div class="row">
              <div class="col-md-6">
                <h3 v-html="$t('medias.tabs.tab3.video[0][0]')"></h3>
                <p class="text-center"><iframe width="560" height="315" :src="$t('medias.tabs.tab3.video[0][1]')" allowfullscreen></iframe></p>
                <pre>&lt;iframe width="560" height="315" src="{{ $t('medias.tabs.tab3.video[0][1]') }}" allowfullscreen&gt;&lt;/iframe&gt;</pre>
              </div>
              <div class="col-md-6">
                <h3 v-html="$t('medias.tabs.tab3.video[1][0]')"></h3>
                <p class="text-center"><iframe width="560" height="315" :src="$t('medias.tabs.tab3.video[1][1]')" allowfullscreen></iframe></p>
                <pre>&lt;iframe width="560" height="315" src="{{ $t('medias.tabs.tab3.video[1][1]') }}" allowfullscreen&gt;&lt;/iframe&gt;</pre>
              </div>
             </div>
          </div>
          <!-- Présentation -->
          <div role="tabpanel" class="tab-pane" id="presentation">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="text-center">
                  <h3 v-html="$t('medias.tabs.tab4.title')"></h3>
                  <p class="text-center"><iframe :src="$t('medias.tabs.tab4.link')" width="800" height="600" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></p>
                  <pre>&lt;iframe src="{{ $t('medias.tabs.tab4.link') }}" width="800" height="600" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"&gt;&lt;/iframe&gt;</pre>
                </div>
              </div>
            </div>
          </div>
          <!-- Infographie G Dorne -->
          <div role="tabpanel" class="tab-pane" id="infographie">
            <p v-html="$t('medias.tabs.tab7.intro')"></p>
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="thumbnail text-center">
                  <h3 v-html="$t('medias.tabs.tab7.title')"></h3>
                  <p><a :href="data['/img/'] + $t('medias.tabs.tab7.img[1][1]')">{{ $t('medias.tabs.tab7.img[1][0]') }}</a></p>
                  <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                     :title="$t('medias.tabs.saveas')" alt=""
                     :src="data['/img/'] + $t('medias.tabs.tab7.img[0][1]')" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix">
        <!-- Revue de web-->
        <h2>{{ $t('medias.press.title') }}</h2>
        <p v-html="$t('medias.press.intro')"></p>
        <div class="col-sm-8 col-sm-offset-2 well">
          <table class="table">
            <thead>
              <tr>
                <th>{{ $t('medias.press.th1') }}</th>
                <th>{{ $t('medias.press.th2') }}</th>
                <th>{{ $t('medias.press.th3') }}</th>
              </tr>
            </thead>
            <tbody>
                  <tr v-for="item in data.medias.press.list" :key="item[3]" v-if="item[0] === $t('lang') || (item[0] === 'en' && $t('lang') !== 'fr')">
                    <td>{{ (new Intl.DateTimeFormat($t('lang')).format(new Date(item[1]))) }}</td>
                    <td>{{ item[2] }}</td>
                    <td><a :href="item[3]" :hreflang="item[0]">{{ $t(item[4]) }}</a></td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>

      <div class="clearfix">
        <h2>{{ $t('medias.frama.title') }}</h2>
        <div class="col-sm-8">
          <ul>
            <li v-for="item in $t('medias.frama.list')" v-html="item"></li>
          </ul>
          <p class="text-center">
            <img :src="data['/img/'] + 'biglogo.png'" alt="" style="width:220px; margin:10px 30px"/>
            <img :src="data['/img/'] + 'biglogo-noir.png'" alt="" style="width:220px; margin:10px 30px"/>
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
import HeaderComponent from '../partials/Header.vue';
import Signature from '../partials/Signature.vue';
import BackTop from '../partials/BackTop.vue';

export default {
  name: 'Medias',
  components: {
    HeaderComponent,
    Signature,
    BackTop,
  },
  data() {
    return {
      data: this.$i18n.messages.data,
    }
  },
  mounted () {
    document.querySelector('a[href="#presentation"]').onclick = () => {
      const prez = document.querySelector('#presentation iframe');
      prez.src = `${prez.src.replace('/#/', '/')}#/`;
    };
  },
}
</script>
