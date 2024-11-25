<template>
    <div>
        <Layout>
            <div class="pt-5">
                <h5>Update Form</h5>
                <form @submit.prevent="update(props.article.id)">

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
                        Update
                    </button>
                </form>
            </div>
        </Layout>
    </div>
</template>

<script setup>
import Layout    from "../Components/Layout.vue";
import { useForm } from "@inertiajs/vue3";
const props = defineProps({
    article:Object
});

const form = useForm({
    title: props.article.title,
    description:props.article.description
});

const update = (id) => {
    form.put(`/articles/${props.article.id}`,{
        onSuccess: () =>{
            alert('Article updated successfully');
        }
    })
}
</script>

<style lang="scss" scoped>

</style>
