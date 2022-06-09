<template>
    <Vueform v-bind="vueform" />
</template>

<script>
import { ref } from 'vue'

export default {
    setup(props, context)
    {
        const vueform = ref({
            validateOn: 'step',
            schema: {
                h1: {
                    type: 'static',
                    content: '<h1 style="font-size: 36px; font-weight: 600; line-height: 1.5;">Create a new competition</h1>',
                },
                location: {
                    type: 'text',
                    label: 'Location',
                },
                max_participants: {
                    type: 'text',
                    inputType: 'number',
                    rules: [
                        'nullable',
                        'min:10',
                        'max:100',
                        'numeric',
                    ],
                    autocomplete: 'off',
                    label: 'maximum number of participants',
                },
                date: {
                    type: 'date',
                    label: 'Date:',
                },
                submit: {
                    type: 'button',
                    buttonLabel: 'Submit',
                    columns: {
                        container: 12,
                        label: 12,
                        wrapper: 12,
                    },
                    buttonType: 'anchor',
                },
            },
        })

        return {
            vueform,
        }
    }
}
</script>

