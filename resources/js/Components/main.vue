<!-- <template>
    <title>Everard task</title>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Part number</th>
                        <th scope="col">Part description</th>
                        <th scope="col">Stock quantity</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th>
                            <button id="addPartButton" data-bs-target="#addPartModal" type="button" class="btn btn-dark rounded-0" data-bs-toggle="modal">Create new part</button>		
                        </th>
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
                        <td>
                                <button data-bs-target="#editEmployeeModal" type="button" class="btn btn-dark rounded-0" data-bs-toggle="modal">Edit</button>
                                <button data-bs-target="#deletePartModal" type="button" class="btn btn-danger rounded-0" data-bs-toggle="modal">Delete part</button>
				        </td>
                    </tr>
                </tbody>
            </table>

                <div id="addPartModal" class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content rounded-0">

                            <div class="modal-header">
                                <h4>Create part</h4>
                            </div>

                            <form action="insPartData" method="POST">
                                <div class="p-3">
                                    <label for="addPartForm" class="form-label">Part number</label>
                                    <input type="text" class="form-control rounded-0" id="addPartForm" name="partNum">
                                </div>

                                <div class="p-3">
                                    <label for="addQuantityForm" class="form-label">Stock quantity</label>
                                    <input type="text" class="form-control rounded-0" id="addQuantityForm" name="partQuantity">
                                </div>

                                <div class="p-3">
                                    <label for="addDescForm" class="form-label">Part description</label>
                                    <textarea id="addDescForm" class="form-control rounded-0" name="partDesc"></textarea>
                                </div>

                                <div class="p-3 mb-3">
                                    <button type="button" class="btn btn-dark rounded-0" data-bs-dismiss="modal">Discard</button>
                                    <button type="submit" class="btn btn-success rounded-0">Create part</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

        </div>
    </div>

</template>

<script>
import axios from 'axios';
import deleteBlade from './deleteBlade.vue';

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
body {
    font-family: 'Courier New', Courier, monospace;
}
.container {
    margin-top: 17%;
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
</style> -->