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
    },
    methods: {
        async getPostBySlug() {
            await api.posts.getPostBySlug(this.slug)
                .then(response => {
                    this.post = response.data.post;
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

