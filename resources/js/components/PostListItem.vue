<template>
    <div class="mb-10">
        <router-link :to="{name:'post', params: {id: post.id}}"><h4 class="text-2xl pb-1 font-semibold hover:underline hover:text-gray-600">{{post.title}}</h4></router-link>
        <p class="text-gray-600 pb-1">{{post.title}}</p>
        <p class="text-gray-800 py-2">{{post.lead}}</p>
        <div>By <router-link :to="{name:'author', params:{id: post.author.id}}" class="underline hover:text-black">{{ post.author.name }}</router-link>  in <router-link :to="{name:'topic', params:{slug: post.topic.slug}}" class="underline hover:text-black">{{ post.topic.name }}</router-link> </div>
    </div>
</template>
<script>
export default {
    props: {
        post: Object
    }
}
</script>