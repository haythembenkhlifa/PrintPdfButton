<template>
   <button v-on:click="print()" class="btn btn-default btn-primary">
       <font-awesome-icon  :icon="['fas',this.field.buttonIcon || 'print']"/>
        {{ this.field.buttonText || 'Print' }}
    </button>
</template>

<script>
import printJS from 'print-js'
export default {
    props: ['resourceName', 'field'],
    methods: {
        print(){
            printJS({printable:this.field.pdfUrl, type:'pdf'})
        }
    },
}
</script>
