const { createApp } = Vue

createApp({
    data() {
        return {
            text: 'Toodolist',
            todos: [],
        }
    }
}).mount('#app')