<div>
    <style>
        .carousel-item {
            height:30rem;
            background: #777;
            color: white;
            position:relative;
            background-position: top;
            background-size: cover;
            opacity: 0.8;
        }
    </style>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2000">
                <img src="{{ asset('images/Layout_Watermarked.jpg') }}" class="d-block w-100" alt="Layout">
            </div>
            <div class="carousel-item" data-interval="1000">
                <img src="{{ asset('images/Layout_1_Watermarked.jpg') }}" class="d-block w-100" alt="Layout_1">
            </div>
            <div class="carousel-item" data-interval="500">
                <img src="{{ asset('images/Layout_2_Watermarked.jpg') }}" class="d-block w-100" alt="Layout_2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>