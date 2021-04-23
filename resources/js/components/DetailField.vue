<template>
            <div class="flex border-b border-40">
            <div class="w-1/4 py-4">

            </div>
            <div class="w-3/4 py-4 break-words">
                <button type="button" v-on:click="print()" :class="this.field.buttonClass || 'btn btn-default btn-primary white-text align-middle'">
                    <font-awesome-icon class="mr-2"  :icon="['fas',this.field.buttonIcon || 'print']"/>
                        {{ this.field.buttonText || 'Print' }}
                </button>
            </div>
        </div>
</template>

<script>
import printJS from 'print-js'
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
        methods: {
        print(){
            printJS({printable:this.field.pdfUrl, type:'pdf'})
        }
    },
}
</script>
