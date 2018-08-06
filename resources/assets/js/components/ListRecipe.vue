<template>
    <div class="card" style="margin-top: 10px;">
        <div class="card-header">Search Result</div>

        <div class="card-body" style="height: 400px;overflow: auto;">
            <ul class="list-group">
                <li class="list-group-item" v-for="recipe in list">
                    <img :src="recipe.thumbnail" alt="img">
                    <a @click="detail(recipe)">
                        {{ recipe.title }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import {eventBus} from '../recipe.js';

    export default {
        name: "list-recipe",
        data() {
            return {
                list: []
            }
        },
        created() {
            eventBus.$on('searchResult', (result) => {
                this.list = result;
            });
        },
        methods: {
            detail(recipe) {
                eventBus.$emit('detail', recipe);
            }
        }
    }
</script>

<style scoped>

</style>