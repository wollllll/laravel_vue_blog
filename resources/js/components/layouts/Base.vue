<template>
    <div>
        <Header></Header>
        <main class="main">
            <div class="container">
                <slot></slot>
            </div>
        </main>
        <Footer></Footer>
    </div>
</template>

<script>
import Header from "./Header";
import Footer from "./Footer";

export default {
    components: {
        Header,
        Footer
    },
}
</script>

<style lang="scss">
.main {
    height: 100vh;
}
</style>
