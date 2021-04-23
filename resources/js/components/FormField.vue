<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
                <button type="button" v-on:click="print()" class="btn btn-default btn-primary">
                    <font-awesome-icon  :icon="['fas',this.field.buttonIcon || 'print']"/>
                        {{ this.field.buttonText || 'Print' }}
                </button>
        </template>
    </default-field>
</template>
<script>
import { FormField, HandlesValidationErrors,FormError } from 'laravel-nova'
export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    props: ['field'],

    methods: {
        print(){
            printJS({printable:this.field.pdfUrl, type:'pdf'})
        },
                /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(null, this.value || '');
        },
        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
}
</script>
