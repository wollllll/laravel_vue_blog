<template>
    <Base>
        <div class="item-box">
            <div class="item">
                aaa
            </div>
            <div class="item">
                aaa
            </div>
        </div>
    </Base>
</template>

<script>
import Base from "../../components/layouts/Base";

export default {
    components: {
        Base
    },
}
</script>

<style lang="scss">
@import "resources/sass/common";

.item-box {
    display: flex;

    .item {
        width: 50%;
        border: 1px solid red;
    }

    .item:nth-child(odd) {
        margin-right: $space16;
    }

    .item:nth-child(even) {
        margin-left: $space16;
    }
}
</style>
