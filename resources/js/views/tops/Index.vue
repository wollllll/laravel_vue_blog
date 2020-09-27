<template>
    <Base>
        <div v-for="post in posts" class="item shadow-sm">
            <div class="image">
                gazou
            </div>
            <div class="detail">
                {{ post.title }}
            </div>
            <router-link :to="{name: 'PostShow', params: {id: 1}}">aaa</router-link>
        </div>
    </Base>
</template>

<script>
import Base from "../../components/layouts/Base";

export default {
    components: {
        Base,
    },
    data() {
        return {
            posts: [
                {id: 1, title: 'title 1', content: 'title 1 da'},
                {id: 2, title: 'title 2', content: 'title 2 da'},
                {id: 3, title: 'title 3', content: 'title 3 da'},
                {id: 4, title: 'title 4', content: 'title 4 da'}
            ]
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
