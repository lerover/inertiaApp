<template>
    <div>
        <Layout>
            <div class="pt-5">
                <h5>Article Entrance Form</h5>
                <form method="POST" @submit.prevent="storeArticle">

                    <div class="mb-3">
                        <input type="text" class="form-control" v-model="form.title">
                        <small v-if="form.errors.title" class="text-danger">
                            {{form.errors.title}}
                        </small>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" v-model="form.description">
                        <small v-if="form.errors.description" class="text-danger">
                            {{form.errors.description}}
                        </small>
                    </div>
                    <button class="btn btn-primary" type="submit">
                        Save
                    </button>
                </form>
            </div>
        </Layout>
    </div>
</template>

<script setup>
import Layout    from "../Components/Layout.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    title:'',
    description:''
});

const storeArticle = () =>{
    form.post('/articles',{
        onSuccess: () =>{
            alert('Article created successfully');
        }
    })
}
</script>

<style lang="scss" scoped>

</style>
