<template>
    <div class="card">
        <div class="card-header">Recipe Detail</div>

        <div class="card-body" style="height: 525px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" :src="data.href"></iframe>
            </div>
        </div>
    </div>
</template>

<script>
    import {eventBus} from '../recipe.js';

    export default {
        name: "detail-recipe",
        data() {
            return {
                data: []
            }
        },
        created() {
            eventBus.$on('detail', (result) => {
                console.log(result);
                this.data = result;
            });
        },
    }
</script>

<style scoped>

</style>