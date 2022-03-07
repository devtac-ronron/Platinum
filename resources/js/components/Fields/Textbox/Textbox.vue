<template>
  <div>
      <div class="form-group">
        <label class="fontStyle">
            {{ label }}
        </label>
        <input
        class="form-control fontStyle"
        v-bind="$attrs"
        v-bind:value="value"
        v-on:input="$emit('input', $event.target.value)"
        >
      </div>
  </div>
</template>

<script>
export default {
   props: ['label', 'value']
}
</script>

<style scope>
    .fontStyle {
        font-weight: bold;        
        font-size:16px;
        text-transform: capitalize;
    }
</style>