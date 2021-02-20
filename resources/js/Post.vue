<template>
    <div class="container mx-auto px-4 w-full md:w-3/4 lg:w-3/4 xl:w-1/2 mt-20">
        <h2 class="text-4xl"><router-link :to="{ name:'index' }" class="text-gray-600 hover:underline">All Posts</router-link> / <span>{{ post.title }}</span></h2>
        <div v-if="$apollo.loading">Loading...</div>
        <div>
            <div class="text-lg text-gray-600">By <router-link class="underline text-gray-800" :to="{ name: 'index' }">{{ post.author.name }}</router-link> in <router-link :to="{name:'topic', params:{slug: post.topic.slug}}" class="hover:underline hover:text-gray-800">{{ post.topic.name }}</router-link> - 3 hours ago</div>
            <h1 class="text-5xl mt-10 font-bold mb-6"> {{ post.title }} </h1>
            <div class="text-gray-700 pb-3 mb-12 whitespace-pre-line"> {{ post.content }} </div>
            <div class="mb-24 flex">
                <img :src="'/storage/faces/'+ post.author.avatar" class="rounded-full w-16 h-16 mr-4 border" alt="user">
                <div class="flex flex-col justify-center">
<div class="text-xl text-gray-600">Written by {{ post.author.name }}</div>
                    <div class="text-gray-700">Published in <router-link :to="{name:'topic', params:{slug: post.topic.slug}}" class="underline hover:text-black">{{ post.topic.name }}</router-link> on May 19, 2021</div>
                </div>
            </div>
        </div>    
    </div>
</template>
<script>
import gql from 'graphql-tag';
export default {
    apollo: {
        post: { query: gql`query ($id: ID!) {
                post(id: $id){
                    id
                    title
                    content
                    author{
                        id
                        name
                        avatar
                    }
                    topic{
                        name
                        slug
                    }
                }
            }`,
            variables(){
                return {
                    id: this.$route.params.id
                }
            }
        }
    }
}
</script>
