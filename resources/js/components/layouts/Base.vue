<template>
    <div class="app">
        <Header></Header>

        <section class="content container">
            <main class="main">
                <slot></slot>
            </main>
            <SideBar class="sidebar"></SideBar>
        </section>

        <Footer></Footer>
    </div>
</template>

<script>
import Header from "./Header";
import Footer from "./Footer";
import SideBar from "./SideBar";

export default {
    components: {
        Header,
        Footer,
        SideBar
    },
}
</script>

<style lang="scss">
@import "resources/sass/common";

.app {
    background: #fdfdfe;

    .content {
        display: flex;
        height: 100vh;
        margin-top: $space48;
        margin-bottom: $space48;
        padding: 0;

        .main {
            width: 70%;
            padding: 0 $space16;
        }

        .sidebar {
            width: 30%;
            margin-left: $space56;
            padding: 0 16px;
        }
    }
}
</style>
