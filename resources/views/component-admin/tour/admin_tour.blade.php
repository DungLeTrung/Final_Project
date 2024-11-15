<div class="my-5 mx-5">
    <div class="d-flex justify-content-between mb-3">
        <div>
        </div>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                Add New <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>

    <table id="example" class="table table-striped table-bordered table-config">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Number Of Guests</th>
                <th>Departure Time</th>
                <th>Departure Point</th>
                <th>Duration</th>
                <th>Address</th>
                <th>Destination</th>
                <th>Description</th>
                <th>Tour Price</th>
                <th>Tour Type</th>
                <th>Tour Rule</th>
                <th>FAQ</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="https://via.placeholder.com/40" class="rounded-circle" style="width: 100%; height: auto; object-fit: cover;" alt="Avatar"></td>
                <td>Arlene McCoy</td>
                <td>August 2, 2013</td>
                <td>205.555.0100</td>
                <td>$5.22</td>
                <td>Arlene McCoy</td>
                <td>August 2, 2013</td>
                <td>205.555.0100</td>
                <td>$5.22</td>
                <td>$5.22</td>
                <td>$5.22</td>
                <td>$5.22</td>
                <td>$5.22</td>
                <td><button class="btn btn-light">
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

<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create Tour</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex">
                    <div class="image-upload me-4 col-3">
                        <img src="https://via.placeholder.com/150" alt="Placeholder Image" id="previewImage">
                        <input type="file" class="form-control" id="uploadImage" accept="image/*">
                    </div>
                    <div class="col-9">
                        <form id="createForm">
                            <div class="form-row">
                                <div class="form-col">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="form-col">
                                    <label for="guests" class="form-label">Number of Guests</label>
                                    <input type="number" class="form-control" id="guests" required>
                                </div>
                                <div class="form-col">
                                    <label for="departureTime" class="form-label">Departure Time</label>
                                    <input type="text" class="form-control" id="departureTime" required>
                                </div>
                                <div class="form-col">
                                    <label for="departurePoint" class="form-label">Departure Point</label>
                                    <input type="text" class="form-control" id="departurePoint" required>
                                </div>
                                <div class="form-col">
                                    <label for="duration" class="form-label">Duration</label>
                                    <input type="text" class="form-control" id="duration" required>
                                </div>
                                <div class="form-col">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" required>
                                </div>
                                <div class="form-col">
                                    <label for="destination" class="form-label">Destination</label>
                                    <input type="text" class="form-control" id="destination" required>
                                </div>
                                <div class="form-col">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description" required>
                                </div>
                                <div class="form-col">
                                    <label for="tourPrice" class="form-label">Tour Price</label>
                                    <input type="text" class="form-control" id="tourPrice" required>
                                </div>
                                <div class="form-col">
                                    <label for="tourRule" class="form-label">Tour Rule</label>
                                    <input type="text" class="form-control" id="tourRule" required>
                                </div>
                                <div class="form-col">
                                    <label for="tourType" class="form-label">Tour Type</label>
                                    <select id="tourType" class="form-select" multiple required>
                                        <option value="Family">Family</option>
                                        <option value="Adventure">Adventure</option>
                                        <option value="Luxury">Luxury</option>
                                        <option value="Eco-tour">Eco-tour</option>
                                        <!-- Add more tour types here -->
                                    </select>
                                </div>
                                <div class="form-col">
                                    <label for="faq" class="form-label">FAQ</label>
                                    <select id="faq" class="form-select" multiple required>
                                        <option value="Cancellation Policy">Cancellation Policy</option>
                                        <option value="What to Bring">What to Bring</option>
                                        <option value="Accommodation Details">Accommodation Details</option>
                                        <!-- Add more FAQ options here -->
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
