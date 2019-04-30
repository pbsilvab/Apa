<template>
    <div class="conversation">
        
        <h1>{{contacts ? contacts.name : 'Select a contacts'}}</h1>
        <MessageFeed :contact="contacts"  :messages="messages" />
        <MessageComposer @send="sendMessage" />
    </div>
</template>

<script>
import MessageComposer from './MessageComposer';
import MessageFeed from './MessageFeed';
export default {
    props:{
        contacts:{
            type:Object,
            default:null
        },
        messages:{
            type:Array,
            default:[]
        }
    },
    methods:{
        sendMessage(text){

            if(!this.contacts){
                return;
            }

            axios.post('conversation/send', {
                    contact_id : this.contacts.id,
                    text: text            
                })
                .then((response)=>{
                    this.$emit('new', response.data);
                })
            console.log(text);
        }
    },
    components:{
        MessageComposer, MessageFeed
    }
    
}
</script>
<style lang="scss" scoped>
        .conversation{
            flex:5;
            display: flex;
            flex-direction: column;
            justify-content: space-between;

            h1{
                font-size:20px;
                padding: 10px;
                margin: 0;
                border-bottom: 1px dashed lightgray;
            }
        }

</style>

