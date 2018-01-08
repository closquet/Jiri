<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div @click="sub" class="panel-body">
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
        methods:{
            sub(){
                console.log('/login');
                axios.post('/login',{'email':'admin@jiri.be','password':'24012018'})
                    .then(response => {

                        console.log(response.data);
                        this.currentUser.name = response.data.name
                    });
            }
        },
        mounted() {

            /*console.log('/api/user/all');
            axios.get('/api/user/all')
                .then(response => {

                    console.log(response.data);
                    this.currentUser.name = response.data.name
                });
            const data = {
                name: 'adminaccesstoken',
                scopes: []
            };
            axios.post('/oauth/personal-access-tokens', data)
                .then(response => {
                    console.log(response.data.accessToken);
                })
                .catch (response => {
                    // List errors on response...
                });*/

        }
    }
</script>
