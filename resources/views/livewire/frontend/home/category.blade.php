<section id="trending">
    <div class="container">
        <div class="content">
            <div class="owl-carousel category-carousel">
                <a class="item" href="category/6.html">
                    <img class="icon" src="{{ url('assets/frontend/img/trending.png') }}" alt="" loading="lazy">
                    <p class="caption">Trending</p>
                </a>
                @foreach($categories as $category)
                <a class="item" href="category/7.html">
                    <img class="icon" src="{{ url('storage', $category->image) }}" alt="" loading="lazy">
                    <p class="caption">{{ $category->name }}</p>
                </a>
                @endforeach
                
                <a class="item" href="category/18.html">
                    <img class="icon" src="{{ url('assets/frontend/img/all-category.png') }}" alt="" loading="lazy">
                    <p class="caption">All</p>
                </a>
            </div>
        </div>
    </div>
</section>