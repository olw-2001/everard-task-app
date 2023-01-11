<div id="editPartModal" class="modal text-start" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">

            <div class="modal-header">
                <h4>Update part</h4>
            </div>

            <form action="update" method="POST">
                @csrf
                <div class="p-3">
                    <label for="editPartForm" class="form-label">Part number</label>
                    <input type="text" class="form-control rounded-0" id="editPartForm" name="partNum" value="{{ $part->part_number }}">
                </div>

                <div class="p-3">
                    <label for="editQuantityForm" class="form-label">Stock quantity</label>
                    <input type="text" class="form-control rounded-0" id="editQuantityForm" name="partQuantity" value="{{ $part->stock_quantity }}">
                </div>

                <div class="p-3">
                    <label for="editDescForm" class="form-label">Part description</label>
                    <textarea id="editDescForm" class="form-control rounded-0" name="partDesc">{{ $part->part_description }}</textarea>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3 mb-3">
                    <button type="button" class="btn btn-dark rounded-0 me-md-2" data-bs-dismiss="modal">Discard</button>
                    <button type="submit" class="btn btn-success rounded-0">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>