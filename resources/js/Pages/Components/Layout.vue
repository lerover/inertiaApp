<template>
    <div>
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <Link class="navbar-brand" href="/">Navbar</Link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <Link class="nav-link active" href="/">Home</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" aria-current="page" href="/about">About</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="/articles">Articles</Link>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <slot></slot>
        </div>
    </div>
</template>

<script setup>
    import {Link} from "@inertiajs/vue3"
</script>

<style lang="scss" scoped>

</style>
