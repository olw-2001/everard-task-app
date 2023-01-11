<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Everard task</title>

        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.typekit.net/ypp6afn.css">


        @vite(['resources/js/app.js', 'resources/css/app.css'])
        
    </head>

    <body class="antialiased">
        <div class="container">
            <h1 class="text-center mb-5">Everard parts manager</h1>
            <div class="row">
                <table class="table text-center mt-5">
                    <thread>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Part number</th>
                            <th scope="col">Part description</th>
                            <th scope="col">Stock quantity</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                            <th>
                                <button data-bs-target="#addPartModal" type="button" class="btn btn-dark rounded-0 mb-2" data-bs-toggle="modal">Create new part</button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parts as $part)
                        <tr>
                            <td>{{ $part->id }}</td>
                            <td>{{ $part->part_number }}</td>
                            <td>{{ $part->part_description }}</td>
                            <td>{{ $part->stock_quantity }}</td>
                            <td>{{ $part->created_at }}</td>
                            <td>{{ $part->updated_at }}</td>
                            <td>
                                <button data-bs-target="#editPartModal" type="button" class="btn btn-dark rounded-0" data-bs-toggle="modal">Edit</button>
                                <button data-bs-target="#deletePartModal" type="button" class="btn btn-danger rounded-0" data-bs-toggle="modal">Delete part</button>
				            </td>
                        </tr>
                        @include('parts/delete')
                        @include('parts/edit')
                        @endforeach
                    </tbody>
                </table>

            <div id="addPartModal" class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">

                        <div class="modal-header">
                            <h4>Create part</h4>
                        </div>

                        <form>
                            @csrf
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

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3 mb-3">
                                <button type="button" class="btn btn-dark rounded-0 me-md-2" data-bs-dismiss="modal">Discard</button>
                                <button type="submit" class="btn btn-success rounded-0">Create part</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>