<template>
                <button type="button" v-on:click="print()" :class="this.field.buttonClass || 'btn btn-default btn-primary white-text align-middle'">
                    <font-awesome-icon class="mr-2"  :icon="['fas',this.field.buttonIcon || 'print']"/>
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
