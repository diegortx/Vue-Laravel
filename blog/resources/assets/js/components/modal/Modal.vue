<template>
        <div class="modal fade" v-bind:id="nome" tabindex="-1" role="dialog" v-bind:aria-labelledby="nome" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <slot></slot>
                </div>
            </div>
        </div>

</template>

<script>
    export default {
        props:['nome']
       
    }
</script>
