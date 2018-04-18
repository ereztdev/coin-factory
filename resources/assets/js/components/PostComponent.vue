<template>
    <ul>
        <div>POSTS</div>
        <li v-for="post of posts">
            <p><strong>{{post.title}}</strong></p>
            <p>{{post.body}}</p>
        </li>
    </ul>
</template>

<script>
    export default {
        // name: "PostComponent"
        data() {
            return {
                posts: [],
                errors: []
            }
        },
        methods: {
            getPosts: function() {
                console.log('started');
                //let that = this;
                let uri = 'https://jsonplaceholder.typicode.com/posts';
                this.axios.get(uri).then((response) => {
                    this.posts = response.data;
                     console.log( this.posts);
                    }).catch(e => {
                    this.errors.push(e)
                })
            }
        },
        created(){
            this.getPosts();
        }
    }
</script>

<style scoped>

</style>