<template>
    <div>
        <h1>Title: {{catalogue.title}}</h1>
        <h3>Price: {{catalogue.price}}</h3>
        <h5>Genre: {{catalogue.genre}}</h5> <br>
    </div>
</template>

<script>
export default {
    name: 'BaseComponent',
    props: {
        catalogue: Object
    },
}
</script>

<style scoped>

</style>
