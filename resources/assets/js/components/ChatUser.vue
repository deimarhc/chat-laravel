<template lang="html">
  <div class="chat-user">
    <p>{{ user.name }}</p>
  </div>
</template>

<script>
  export default {
    props: ['user']
  }
</script>

<style lang="css">
  .chat-user {
    padding: .5rem 1rem;
  }
</style>
