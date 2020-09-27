<template>
    <Base>
        syousai
    </Base>
</template>

<script>
import Base from "../../components/layouts/Base";

export default {
    props: [
        'id'
    ],
    components: {
        Base
    },
    created() {
        console.log(this.id);
    }
}
</script>

