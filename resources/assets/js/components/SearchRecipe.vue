<template>
    <div class="card">
        <div class="card-header">Search Recipe</div>
        <div class="card-body">
            <input type="text" name="search" v-model="searchTerm" id="search">
            <input type="button" name="searchBtn" value="Search" id="searchBtn" @click="searchRecipe">
        </div>
    </div>
</template>

<script>
    import {eventBus} from '../recipe.js';

    export default {
        name: "search-recipe",
        data() {
            return {
                searchTerm: "",
            }
        },
        methods: {
            searchRecipe() {
                axios.get('/search-recipe/' + this.searchTerm)
                    .then(response => {
                        if (response.status === 200) {
                            let result = response.data.results;
                            eventBus.$emit('searchResult', result);
                        }
                    })
                    .catch(err => {
                        console.log(err);
                    });
            }
        }
    }
</script>

<style scoped>

</style>