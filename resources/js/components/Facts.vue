<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Here are your Cat Facts</div>

                    <div class="card-body">
                        
                        <div class="list-group-item" v-for="fact in facts">
                            {{ fact.fact }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                facts: []
            }
        },

        mounted() {
            this.loadFacts();
        },

        methods: {
            loadFacts: function() {
                axios.get('/')
                    .then((response) => {
                    console.log(response);
                        this.facts = response.data.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>
