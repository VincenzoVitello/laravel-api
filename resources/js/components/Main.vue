<template>
  <div>
    <div v-for="(post, index) in posts" :key="index">
        <!-- <span>
            Category: 
            {{ post.category.name}}
        </span> -->
        <h1>{{ post.title }}</h1>
        <p>{{ post.content }}</p>
        <!-- <p>Tags:</p>
        <span v-for="(tag, index) in post.tags" :key="index">{{tag.name}} </span> -->
    </div>
  </div>
</template>

<script>
export default {
    name: "Main",
    data() {
        return {
            posts: []
        };
    },
    mounted() {
        axios
        .get("/api/posts")
        .then( (response) => {
            this.posts = response.data;
            console.log(this.posts)
        });
    },
};
</script>

<style>

</style>