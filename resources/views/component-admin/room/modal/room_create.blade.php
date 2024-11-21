<div class="breadcrumb mb-3 p-3" style="background-color: antiquewhite">
    <a style="color: orange; font-size: 1.5rem" href="{{ route('room-management') }}">Rooms</a>
    <span style="font-size: 1.5rem">&nbsp;>&nbsp;Create Room</span>
</div>

<div class="container my-5 col-10">
    <h1>Create New Room</h1>
    <form id="createForm" method="POST" action="{{ route('tour-management.execute') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Left Column: Image and General Info -->
            <div class="col-md-4">
                <div class="mb-4">
                    <label for="image" class="form-label">Thumbnail Image</label>
                    <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
                    <img id="previewImage"
                        src="https://th.bing.com/th/id/OIP.KGdLPsiqGjKqCYuhzhmmWgHaEP?rs=1&pid=ImgDetMain"
                        class="img-thumbnail mt-3 w-100" alt="Preview Image">
                </div>
                <div class="mb-3">
                    <label for="number_of_people" class="form-label">Number of People</label>
                    <input type="number" name="number_of_people" class="form-control" id="number_of_people" required>
                </div>
                <div class="mb-3">
                    <label for="number_of_bed" class="form-label">Number of Bed</label>
                    <input type="number" name="number_of_bed" class="form-control" id="number_of_bed" required>
                </div>
                <div class="mb-3">
                    <label for="room_price" class="form-label">Room Price</label>
                    <input type="text" name="room_price" class="form-control" id="room_price" required>
                </div>
                <div class="mb-3">
                    <label for="area" class="form-label">Area</label>
                    <input type="text" name="area" class="form-control" id="area" required>
                </div>
            </div>

            <!-- Right Column: Details -->
            <div class="col-md-8">
                <div class="row">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="roomType" class="form-label">Room Type</label>
                        <select id="roomType" class="form-select" multiple name="room_type[]" required>
                            @foreach ($roomType as $type)
                                <option value="{{ $type->id }}">{{ $type->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="services" class="form-label">Services</label>
                        <select id="services" class="form-select" multiple name="services[]" required>
                            @foreach ($roomService as $service)
                                <option value="{{ $service->id }}">{{ $service->service }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="roomRule" class="form-label">Tour Rule</label>
                    <textarea name="room_rule" class="form-control" id="roomRule" rows="4" required></textarea>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <label class="form-label">Album</label>
            <!-- File upload block -->
            <div class="col-3">
                <div class="file-upload-wrapper" id="fileUploadWrapper">
                    <i class="fas fa-plus file-upload-icon"></i>
                    <input type="file" class="custom-file-input" name="gallery_images[]" id="galleryImages"
                        accept="image/*" multiple>
                </div>
            </div>

            <!-- Thumbnails -->
            <div class="row mt-3 g-3" id="thumbnailContainer"></div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Save</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#createForm').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    showVanillaToast(response.message, 'success');
                    $('#createModal').modal('hide');
                },
                error: function(xhr, status, error) {
                    formValidAjax(xhr);
                }
            });
        });
    });

    document.getElementById('image').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const previewImage = document.getElementById('previewImage');

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                previewImage.src = e.target.result;
            };

            reader.readAsDataURL(file);
        } else {
            previewImage.src = 'https://via.placeholder.com/150';
        }
    });

    document.getElementById('fileUploadWrapper').addEventListener('click', function() {
        document.getElementById('galleryImages').click();
    });

    document.getElementById('galleryImages').addEventListener('change', function(event) {
        const files = event.target.files;
        const thumbnailContainer = document.getElementById('thumbnailContainer');

        Array.from(files).forEach((file) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const col = document.createElement('div');
                col.classList.add('col-3');

                const thumbnailContainer = document.createElement('div');
                thumbnailContainer.classList.add('thumbnail-container');

                const img = document.createElement('img');
                img.src = e.target.result;

                const closeButton = document.createElement('button');
                closeButton.classList.add('thumbnail-close');
                closeButton.innerHTML = '&times;';

                closeButton.addEventListener('click', function() {
                    col.remove();
                });

                thumbnailContainer.appendChild(img);
                thumbnailContainer.appendChild(closeButton);
                col.appendChild(thumbnailContainer);
                document.getElementById('thumbnailContainer').appendChild(col);
            };
            reader.readAsDataURL(file);
        });
    });
</script>
