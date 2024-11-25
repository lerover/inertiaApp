<template>
    <Layout>
        <div class="d-flex justify-content-end">
            <Link href="/articles/create" class="btn btn-primary">Create New Article</Link>
        </div>
        <div>
            <div class="d-flex justify-content-between mt-5">
                <div class="card" style="width: 18rem;" v-for="article in articles" :key="article.id">
                    <div class="card-body">
                        <h5 class="card-title">{{article.title}}</h5>
                        <p class="card-text">{{article.description}}</p>
                        <Link :href="`/articles/${article.id}/edit`" class="btn btn-primary me-3">Edit</Link>
                        <Link :href="`/articles/${article.id}`" method="DELETE" class="btn btn-danger">Delete</Link>
                    </div>
                </div>
            </div>

        </div>
    </Layout>
</template>

<script setup>
    import Layout from "../Components/Layout.vue";
    import {Link} from "@inertiajs/vue3";
    import {useForm} from "@inertiajs/vue3";
    defineProps(['articles'])
    const form = useForm({})
    const deleteArticle = (id) => {
        // form.delete('/articles/id')
        form.delete(`/articles/${id}`)
    }
</script>

<style lang="scss" scoped>

</style>
