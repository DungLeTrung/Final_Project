<div class="col-12">
    <div class="row my-3">
        <img id="mainImage" src="{{ asset('images/muine.png') }}" alt="Main Display" class="img-fluid rounded w-100"
            style="height: 70vh; object-fit: cover; padding: 0; box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.1);">
    </div>

    <div class="row my-3">
        <div class="col-12 p-0 d-flex gap-2 destination-cards-container carousel" style="overflow-x: auto;">
            <div class="col-3 p-0">
                <img onclick="updateMainImage('{{ asset('images/muine.png') }}')" src="{{ asset('images/muine.png') }}"
                    class="img-fluid thumbnail rounded" alt="Thumbnail 1"
                    style="width: 100%; height: 15vh; object-fit: cover; cursor: pointer;">
            </div>
            <div class="col-3 p-0">
                <img onclick="updateMainImage('{{ asset('images/detail_tour.jpg') }}')"
                    src="{{ asset('images/detail_tour.jpg') }}" class="img-fluid thumbnail rounded" alt="Thumbnail 2"
                    style="width: 100%; height: 15vh; object-fit: cover; cursor: pointer;">
            </div>
            <div class="col-3 p-0">
                <img onclick="updateMainImage('{{ asset('images/hadong.jpg') }}')"
                    src="{{ asset('images/hadong.jpg') }}" class="img-fluid thumbnail rounded" alt="Thumbnail 3"
                    style="width: 100%; height: 15vh; object-fit: cover; cursor: pointer;">
            </div>
            <div class="col-3 p-0">
                <img onclick="updateMainImage('{{ asset('images/hoian.jpg') }}')" src="{{ asset('images/hoian.jpg') }}"
                    class="img-fluid thumbnail rounded" alt="Thumbnail 4"
                    style="width: 100%; height: 15vh; object-fit: cover; cursor: pointer;">
            </div>
            <!-- Additional thumbnails -->
            <div class="col-3 p-0">
                <img onclick="updateMainImage('{{ asset('images/sapa.jpg') }}')" src="{{ asset('images/sapa.jpg') }}"
                    class="img-fluid thumbnail rounded" alt="Thumbnail 5"
                    style="width: 100%; height: 15vh; object-fit: cover; cursor: pointer;">
            </div>
        </div>
    </div>
</div>
