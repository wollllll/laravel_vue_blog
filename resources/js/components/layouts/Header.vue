<template>
    <header class="shadow-sm">
        <div class="container">
            <router-link to="/" class="link-top">俺のポートフォリオ</router-link>
        </div>
    </header>
</template>

<style lang="scss">
@import "resources/sass/common";

header {
    font-size: 26px;
    background: #fff;

    div {
        padding: 24px 0;

        .link-top {
            text-decoration: none;
            color: $baseColor;
            font-weight: bold;

            &:hover {
                opacity: .7;
            }
        }
    }
}
</style>
