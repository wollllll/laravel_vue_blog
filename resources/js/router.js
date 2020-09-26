import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

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
