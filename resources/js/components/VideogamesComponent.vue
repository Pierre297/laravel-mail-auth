<template>
  <div id="videogames">
    <h1>videogames</h1>
    <table border="1">
      <tr>
        <th>Title</th>
        <th>Subtitle</th>
        <th>Rating</th>
        <th v-if="user">Action</th>
      </tr>

      <tr v-for="videogame in videogames" :key="videogame.id">
        <td>{{ videogame.title }}</td>
        <td>{{ videogame.subtitle }}</td>
        <td>{{ videogame.rating }}</td>
        <td v-if="user">
          <a
            class="btn btn-danger"
            :href="`/api/videogame/delete/${videogame.id}`"
            >DELETE</a
          >
        </td>
      </tr>
    </table>
  </div>
</template>


<script>
export default {
  data: function () {
    return {
      videogames: [],
    };
  },

  props: {
    user: String,
  },

  mounted() {
    axios
      .get("/api/videogames/list")
      .then((r) => (this.videogames = r.data))
      .catch((e) => console.error(e));
  },
};
</script>