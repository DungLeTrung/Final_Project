<div class="my-5 mx-5">
    <div class="d-flex justify-content-between mb-3">
        <div>
        </div>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTourItenerary">
                Add New <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>

    <table id="example" class="table table-striped table-bordered table-config">
        <colgroup>
            <col span="1" style="width: 5%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 40%;">
            <col span="1" style="width: 10%;">
        </colgroup>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tour</th>
                <th>Day</th>
                <th>Place</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>ABC</td>
                <td>ABC</td>
                <td>ABC</td>
                <td>ABC</td>
                <td>
                    <button class="btn btn-light">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button class="btn btn-light">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="createTourItenerary" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-tour-normal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create Tour Itenerary</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex">
                    <div class="col-12">
                        <form id="createForm">
                            <div class="form-row">
                                <div class="form-col">
                                    <label for="day" class="form-label">Day</label>
                                    <input type="number" class="form-control" id="day" required>
                                </div>
                                <div class="form-col">
                                    <label for="place" class="form-label">Place</label>
                                    <input type="text" class="form-control" id="place" required>
                                </div>
                                <div class="form-col">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description" required>
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="form-col">
                                    <label for="faq" class="form-label">Tour</label>
                                    <select id="faq" class="form-select" multiple required>
                                        <option value="Cancellation Policy">Cancellation Policy</option>
                                        <option value="What to Bring">What to Bring</option>
                                        <option value="Accommodation Details">Accommodation Details</option>
                                    </select>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary mt-3" id="saveBtn">Save</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "pagingType": "simple_numbers",
            "lengthMenu": [5, 10, 25, 50],
            "language": {
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "paginate": {
                    "previous": "<",
                    "next": ">"
                }
            }
        });
    });
</script>
