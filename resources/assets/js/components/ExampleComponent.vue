<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        salut {{currentUser.name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                currentUser : {
                    name:'',
                },
            }
        },
        mounted() {
            axios.get('/api/user')
                .then(response => {
                    console.log(response.data);
                    this.currentUser.name = response.data.name
                })
        }
    }
</script>
