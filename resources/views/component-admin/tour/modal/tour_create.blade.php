<div class="breadcrumb mb-3 p-3" style="background-color: antiquewhite">
    <a style="color: orange; font-size: 1.5rem" href="{{ route('tour-management') }}">Tours</a>
    <span style="font-size: 1.5rem">&nbsp;>&nbsp;Create Tour</span>
</div>

<div class="container my-5 col-10">
    <h1>Create New Tour</h1>
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
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="number_of_guests" class="form-label">Number of Guests</label>
                    <input type="number" name="number_of_guests" class="form-control" id="number_of_guests" required>
                </div>
                <div class="mb-3">
                    <label for="tourPrice" class="form-label">Tour Price</label>
                    <input type="text" name="tour_price" class="form-control" id="tourPrice" required>
                </div>
            </div>

            <!-- Right Column: Details -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="departureTime" class="form-label">Departure Time</label>
                        <input type="datetime-local" name="departure_time" class="form-control" id="departureTime"
                            required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="departurePoint" class="form-label">Departure Point</label>
                        <input type="text" name="departure_point" class="form-control" id="departurePoint" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" name="duration" class="form-control" id="duration" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tourType" class="form-label">Tour Type</label>
                        <select id="tourType" class="form-select" multiple name="tour_type[]" required>
                            @foreach ($tourType as $type)
                                <option value="{{ $type->id }}">{{ $type->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="services" class="form-label">Services</label>
                        <select id="services" class="form-select" multiple name="services[]" required>
                            @foreach ($tourService as $service)
                                <option value="{{ $service->id }}">{{ $service->service }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="col-md-6 mb-3">
                        <label for="faq" class="form-label">FAQ</label>
                        <select id="faq" class="form-select" multiple name="faq[]" required>
                            @foreach ($tourFaq as $faq)
                                <option value="{{ $faq->id }}">{{ $faq->question }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                </div>
                <div class="mb-3">
                    <label for="destination" class="form-label">Destination</label>
                    <select id="destination" class="form-select" name="destination_id" required>
                        @foreach ($tourDestination as $destination)
                            <option value="{{ $destination->id }}">{{ $destination->city }} -
                                {{ $destination->province }} - {{ $destination->country }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tourRule" class="form-label">Tour Rule</label>
                    <textarea name="tour_rule" class="form-control" id="tourRule" rows="4" required></textarea>
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
