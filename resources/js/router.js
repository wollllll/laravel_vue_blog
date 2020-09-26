import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(VueRouter);
Vue.use(BootstrapVue);

// コンポーネントをインポート
import TopIndex from './views/tops/Index.vue';

const DEFAULT_TITLE = '俺のポートフォリオ | ';

const router = new VueRouter({
    // モードの設定
    mode: 'history',
    routes: [
        {
            path: '/',
            name: TopIndex,
            component: TopIndex,
            meta: {title: 'TOP'}
        },
    ]
});

router.afterEach((to, from) => {
    document.title = DEFAULT_TITLE + to.meta.title;
});

export default router;
