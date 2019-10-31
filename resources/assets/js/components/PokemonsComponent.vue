<template>
    <div class="row">
        <spinner v-show="loading"></spinner>
        <div class="col-sm" v-for="pokemon in pokemons">
            <div class="card text-center" style="width: 18rem; margin-top: 70px;">
                <img style="heigth: 100px; width: 100px; background-color: #EFEFEF;
                margin: 20px;" class="card-img-top rounded-circle mx-auto d-block"
                     src="images/" alt="">

                <div class="card-body">
                    <h5 class="card-title">{{ pokemon.name }}</h5>

                    <p class="card-text">some quick example text to build the pokemonm app</p>
                    <a href="/traieners" class="btn btn-primary">Ver mas...</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PokemonsComponent",
        data(){
            return{
                pokemons: [],
                loading: true,
            }
        },
            mounted(){
                axios
                    .get('http://laravel-vue.test/pokemons')
                    .then( (res) => {
                        this.pokemons = res.data
                        this.loading = false
                    });
            }
    }
</script>

<style scoped>

</style>