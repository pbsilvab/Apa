<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        Yoou are logged in
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
           this.stenForBroadcast();
        },
        methods: {
            stenForBroadcast() {
                Echo.join("App.User.1")
                .here((users) => {
                  
                  console.log(users);
                  
                })
                .joining((user) => {
                    console.log(users);
                })
                .leaving((user) => {
                    console.log(users);
                })
                .listen('ProcessPodcast', (e) => {
                    cosole.log(e);
                });
            },
        },
    }
</script>
