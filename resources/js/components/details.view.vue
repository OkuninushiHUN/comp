<template>
            <p> {{game.user_id1}}  VS  <span>{{game.user_id2}}</span> </p>
</template>

<script>




export default {
    name: "detailsView",
    props: {
        id: {
            type: String,
            default: 0
        },
    },
    data(){
        return{
            isLoaded : false,
            game : {
                id : this.id,
                competitions_id :'-competitions_id-',
                winner :'-winner-',
                user_id1 :'-userid1-',
                user_id2 : '-userid2-',
                created_at :'-created_at-',
                updated_at :'-updated_at-'
            },
            name1:'john doe',
            name2:'jane doe'
        }
    },
    methods: {
        getData() {
            this.axios
                .get('/api/games/' + this.id)
                .then((response) => {
                    console.log("siker");
                    this.game = response.data[0];
                    this.isLoaded = true;

                })
        },
        manNeedname($id){
            this.axios
                .get('/api/users/' + $id)
                .then((response) =>{
                    this.name1 = response.data;
            })
        }

    },
    mounted() {
        this.getData();
        if (!this.isLoaded){
            this.manNeedname(this.game.user_id1)
            this.manNeedname(this.game.user_id2)
        }
    },

}
</script>

<style scoped>

</style>
