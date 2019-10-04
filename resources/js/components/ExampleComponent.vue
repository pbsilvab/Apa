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
            Echo.private('test-channel')
                .notification((notification) => {
                    console.log(notification);
                    
            });
        },
        methods: {
            stenForBroadcast() {
                Echo.join('test-channel')
                .here((users) => {
                    this.users_viewing = users;
                    this.$forceUpdate();
                })
                .joining((user) => {
                    if (this.checkIfUserAlreadyViewingSurvey(user)) {
                        this.users_viewing.push(user);
                        this.$forceUpdate();
                    }
                })
                .leaving((user) => {

                        this.removeViewingUser(user);
                        this.$forceUpdate();
                })
                .notification((noti) => {
                    console.log(noti);
                })
                .listen('test-channel', (e) => {
                    console.log(e);
                });
            },
        },
    }
</script>
