<div id="deletePartModal" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">

            <div class="modal-header text-start">
                <h4>Delete part</h4>
            </div>

            <div class="modal-body">					
        	    <p class="text-start"><b>Warning!</b> you are about to delete this part from the database. Are you sure you want to continue?</p>
        	    <p class="text-danger animate__animated animate__flash animate__faster"><b>This action cannot be undone.</b></p>
        	</div>

            <div class="modal-footer">
                <button type="button" class="btn btn-dark rounded-0" data-bs-dismiss="modal">Cancel</button>
                <a type="submit" class="btn btn-danger rounded-0" href="{{url('delete/'.$part->id)}}">Delete</a>
            </div>

        </div>
    </div>
</div>