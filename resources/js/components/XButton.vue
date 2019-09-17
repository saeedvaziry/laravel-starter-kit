<template>
  <button :disabled="disabled" @click="clicked">
    <template v-if="loading">
      <i class="fa fa-spin fa-spinner mr-1"></i> Please Wait
    </template>
    <slot v-else></slot>
  </button>
</template>

<script>
  export default {
    name: 'XButton',
    props: {
      loading: {
        type: Boolean,
        default: false
      },
      disabled: {
        type: Boolean,
        default: false
      }
    },
    methods: {
      clicked() {
        this.$emit('click');
      }
    }
  }
</script>
