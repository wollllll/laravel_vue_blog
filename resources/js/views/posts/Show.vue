<template>
    <Base>
        <p>{{ post.id }}</p>
        <p>{{ post.title }}</p>
        <p>{{ post.content }}</p>
<!--        <div class="d-flex">-->
<!--            <router-link v-if="prevPost" :to="{name: 'PostShow', params: {slug: prevPost.slug}}">-->
<!--                前の記事-->
<!--            </router-link>-->
<!--            <router-link v-if="nextPost" :to="{name: 'PostShow', params: {slug: nextPost.slug}}">-->
<!--                次の記事-->
<!--            </router-link>-->
<!--        </div>-->
    </Base>
</template>

<script>
import api from "../../api";
import Base from "../../components/layouts/Base";

export default {
    props: [
        'slug'
    ],
    components: {
        Base
    },
    data() {
        return {
            post: {},
            prevPost: {},
            nextPost: {}
        }
    },
    created() {
        this.getPostBySlug();
    },
    methods: {
        async getPostBySlug() {
            await api.posts.getPostBySlug(this.slug)
                .then(response => {
                    const data = response.data;

                    if (data.post) {
                        this.post = data.post;
                        this.prevPost = data.prevPost;
                        this.nextPost = data.nextPost;
                    } else {
                        this.$router.push('/error/404');
                    }
                    console.log('ajax success');
                })
                .catch(error => {
                    console.log(error);
                    console.log('ajax fail');
                });
        },
    }
}
</script>

