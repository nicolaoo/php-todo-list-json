const { createApp } = Vue

createApp({
    data() {
        return {
            text: 'Todo List',
            todos: [],
            taskUser: '',
        }
    },
    methods: {
        fetchToDo() {
            axios
                .get('./server.php')
                .then((res) => {
                    this.todos = res.data
                }).catch((err) => {
                    this.todos = []
                })
        },
        addTask() {
            console.log(this.taskUser)

            $data = {
                todo: this.taskUser,
            }

            axios
                .post('./server.php', $data, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((res) => {
                    this.todos = res.data
                    this.taskUser = ''
                })
                .catch((err) => {
                    this.todos = []
                })
        }
    },
    mounted() {
        this.fetchToDo()
    },
}).mount('#app')