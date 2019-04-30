<template>
    <div class="chat-app">
        <conversation :contacts="selectedContact" :messages="messages" @new="saveNewMessage" />    
        <contactsList :contacts="contacts" @selected="startConversationWidth"/>
    </div>
</template>

<script>   
    import conversation from './conversation';
    import contactsList from './contactsList';


    export default {
        props:{
            user:{
                type:Object,
                required:true
            }
        },
        data(){
            return {
                selectedContact:null,
                messages:[],
                contacts:[]
            }
        },
        components:{
            contactsList,
            conversation
        },
        mounted() {
            Echo.private(`messages.${this.user.id}`)
                .listen('MessagePushed', (e)=>{
                    this.handleIncoming(e.message);
                } )


            console.log(this.user);
            axios.get('/contacts')
                .then((resp)=>{
                    console.log(resp);
                    this.contacts = resp.data;
                })
       },
        methods: {
            startConversationWidth(contact){
                this.updateUnreadCount(contact, true);

                axios.get(`/conversation/${contact.id}`)
                        .then((response)=>{
                            this.messages = response.data;
                            this.selectedContact = contact;
                        });
            },
            saveNewMessage(message){
                //console.log(message);
                this.messages.push(message);
            },
            handleIncoming(message){
                if(this.selectedContact && message.from == this.selectedContact.id){
                    this.saveNewMessage(message);
                    return;
                }
               // console.log(contact);
                this.updateUnreadCount(message.from_contact, false);
            },
            updateUnreadCount(contact, reset){

                this.contacts = this.contacts.map((single) => {
                    if(single.id != contact.id){
                        return single;
                    }

                    if(reset){
                        single.unread = 0;
                    }else{
                        single.unread += 1;
                    }

                    return single;
                });

            }
        },
    }
</script>
<style lang="scss" scoped>
        .chat-app{
            display: flex;
        }

</style>
