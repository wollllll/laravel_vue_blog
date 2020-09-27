<template>
    <Base>
        <div v-for="post in posts.data" class="item shadow-sm">
            <div class="image">
                gazou
            </div>
            <div class="detail">
                {{ post.title }}
            </div>
            <router-link :to="{name: 'PostShow', params: {slug: post.slug}}">aaa</router-link>
        </div>
        <button @click="getMorePosts" v-if="currentPage != posts.last_page" type="button">もっと見る</button>
    </Base>
</template>

<script>
import api from "../../api";
import Base from "../../components/layouts/Base";

export default {
    components: {
        Base,
    },
    data() {
        return {
            posts: {},
            currentPage: 1
        }
    },
    created() {
        this.getAll();
    },
    methods: {
        async getAll() {
            await api.posts.getAll()
                .then(response => {
                    this.posts = response.data.posts;
                    console.log('ajax success');
                })
                .catch(error => {
                    console.log(error);
                    console.log('ajax fail');
                });
        },
        async getMorePosts() {
            await api.posts.getAll(this.posts.current_page + 1)
                .then(response => {
                    const posts = response.data.posts;

                    this.posts.data = this.posts.data.concat(posts.data);
                    this.currentPage = posts.current_page
                    console.log('ajax success');
                })
                .catch(error => {
                    console.log(error);
                    console.log('ajax fail');
                });
        }
    }
}
</script>

<style lang="scss">
@import "resources/sass/common";

.item {
    display: flex;
    background: #fff;
    border-radius: 8px;
    width: 100%;
    height: 190px;
    margin-bottom: $space24;
    color: $baseColor;

    .image {
        width: 40%;
    }

    .detail {
        width: 60%;
    }
}

.item:last-child {
    margin-bottom: 0;
}

</style>
