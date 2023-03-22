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
        }
    },
    mounted() {
        this.fetchToDo()
    },
}).mount('#app')