<template lang="html">
  <div class="users-block">
    <chat-user v-for="user in users" :key="user.id" :user="user"></chat-user>
  </div>
</template>

<script>
  export default {
    props: ['users']
  }
</script>

<style lang="css">
  .users-block .chat-user:nth-child(even) {
    background-color: #ccc;
  }
</style>
