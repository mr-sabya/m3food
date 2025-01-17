<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($banners as $banner)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img src="{{ url('/storage/', $banner->image)}}" class="d-block w-100" alt=".">
            <div class="carousel-caption d-none d-md-block">
                <h5>.</h5>
                <p></p>
            </div>
        </div>
        @endforeach
        
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>