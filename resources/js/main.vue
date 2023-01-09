<template>
    <title>Everard task</title>
    <div class="container">
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Part number</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Part description</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Stock quantity</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="inputGroupPrepend">
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-dark" type="submit">Add part</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Part number</th>
                    <th scope="col">Part description</th>
                    <th scope="col">Stock quantity</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="part in parts">
                    <th scope="row">{{ part.id }}</th>
                    <td>{{ part.part_number }}</td>
                    <td>{{ part.part_description }}</td>
                    <td>{{ part.stock_quantity }}</td>
                    <td>{{ part.created_at }}</td>
                    <td>{{ part.updated_at }}</td>
                </tr>
            </tbody>
        </table>

    </div>

</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                parts: []
            }
        },

        methods: {
            getParts() {
                axios.get('/api/parts')
                .then((response) => {
                    this.parts = response.data
                })
            },
        },

        mounted() {
            this.getParts()
            console.log("mounted");
        }
    }
</script>

<style>
* {
    font-family: 'Courier New', Courier, monospace;
}
form {
    margin-bottom: 10%;
}
.container {
    margin-top: 10%;
}
.btn {
    transition: none !important;
}
.btn:hover {
    background-color: white;
    color: black;
    border: 1px solid black;
    transition: none !important;
}
</style>