<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form @submit.prevent="updateData">
          <div class="form-group row">
            <label for="id" class="col-sm-3 col-form-label">ID</label>
            <input
              type="text"
              class="col-sm-9 form-control-plaintext"
              readonly
              id="id"
              v-model="task.id"
            />
          </div>
          <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">タイトル</label>
            <input type="text" class="col-sm-9 form-control" id="title" v-model="task.title" />
          </div>
          <div class="form-group row">
            <label for="content" class="col-sm-3 col-form-label">出版社</label>
            <input type="text" class="col-sm-9 form-control" id="content" v-model="task.content" />
          </div>
          <div class="form-group row">
            <label for="person-in-charge" class="col-sm-3 col-form-label">著者</label>
            <input
              type="text"
              class="col-sm-9 form-control"
              id="person-in-charge"
              v-model="task.person_in_charge"
            />
          </div>
          <button type="submit" class="btn btn-secondary">更新</button>
        </form>
      </div>
    </div>
  </div>
</template>

 <script>
export default {
  props: {
    taskId: Number,
  },
  data() {
    return {
      task: {},
    };
  },
  methods: {
    getTask() {
      axios
        .get("/api/tasks/" + this.taskId)
        .then((res) => {
          this.task = res.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    updateData() {
      axios
        .put("/api/tasks/" + this.taskId, this.task)
        .then((res) => {
          this.$router.push({ name: "task.list" }); // データ更新後、一覧ページにリダイレクト
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  mounted() {
    this.getTask();
  },
};
</script>