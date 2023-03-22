<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toodolist</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div id="app">
    
    <section class="mx-a">
        <div class="container text-center">
            <h1>{{ text }}</h1>
        </div>
        <div class="container ">
            <ul class="list-group mx-auto col-6">
                <li v-for="el in todos" :key="el" class="list-group-item">
                    {{ el }}
                </li>
            </ul>
            <div class="col-auto d-flex justify-content-center">
                <input v-model="taskUser" @keyup.enter="addTask" class="my-5" type="text col-6" placeholder="do it" name="todo">
                <input @click="addTask" class="my-5" type="submit">
            </div>
        </div>
    </section>
</div>
    
<script src="./app.js"></script>
</body>
</html>