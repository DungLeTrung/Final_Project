<div class="my-5 mx-5">
    <div class="d-flex justify-content-between mb-3">
        <div>
        </div>
        <div> <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTourType">
            Add New <i class="fas fa-plus"></i>
        </button>
        </div>
    </div>

    <table id="example" class="table table-striped table-bordered table-config">
        <colgroup>
            <col span="1" style="width: 5%;">
            <col span="1" style="width: 50%;">
            <col span="1" style="width: 10%;">
        </colgroup>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
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

<div class="modal fade" id="createTourType" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-tour-service">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create Tour Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex">
                    <div class="col-12">
                        <form id="createForm">
                            <div class="form-row">
                                <div class="form-col">
                                    <label for="service" class="form-label">Type</label>
                                    <input type="text" class="form-control" id="service" required>
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
