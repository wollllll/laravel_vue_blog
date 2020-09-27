<template>
    <Base>
        <p>{{ post.id }}</p>
        <p>{{ post.title }}</p>
        <p>{{ post.content }}</p>
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
        }
    },
    created() {
        this.getPostBySlug();
        console.log(this.post);
    },
    methods: {
        async getPostBySlug() {
            await api.posts.getPostBySlug(this.slug)
                .then(response => {
                    if (response.data.post) {
                        this.post = response.data.post;
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

