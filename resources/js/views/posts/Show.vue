<template>
    <Base>
        {{ slug }}
    </Base>
</template>

<script>
import Base from "../../components/layouts/Base";

export default {
    props: [
        'slug'
    ],
    components: {
        Base
    },
}
</script>

