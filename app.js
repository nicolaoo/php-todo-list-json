const { createApp } = Vue

createApp({
    data() {
        return {
            text: 'Toodolist',
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
                listDo: this.taskUser,
            }

            axios
                .post('./server.php', $data, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((res) => {
                    this.todos = res.data


                })
                .catch((err) => {
                    todos = []
                })
        }
    },
    mounted() {
        this.fetchToDo()
    },
}).mount('#app')