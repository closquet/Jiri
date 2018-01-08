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
                    available:'',
                    avatar:'',
                    company:'',
                    is_admin:'',
                    name:'',
                },
            }
        },
        methods:{
            sub(){
                console.log('/login');
                axios.post('/login',{'email':'admin@jiri.be','password':'24012018'})
                    .then(response => {

                        this.currentUser = response.data;
                        console.log(response.data.error);
                    });
            }
        },
        mounted() {

        }
    }
</script>
