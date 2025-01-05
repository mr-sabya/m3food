<section id="single1">
    <div class="container">
        <div class="content">
            <div class="text-center">
                <div class="">
                    <div class="title">
                        <p style="text-align: center;"><span style="color: #ba372a;"><strong><span style="font-size: 24pt;">
                                        {{ $product->title }}
                                    </span></strong></span></p>
                    </div>
                    <p class="tagline" style="text-align: center;"><span style="font-size: 18pt;">{{ $product->tagline }}</span></p>
                    </p>

                    <a href="#orderForm" class="btn btn-order">অর্ডার করতে চাই</a>

                    <img class="banner-img" src="{{ url('storage', $product->image) }}" alt="" loading="lazy">

                    <div class="details">{!! $product->details !!}</div>

                    <a href="#orderForm" class="btn btn-order">অর্ডার করতে চাই</a>

                    @foreach($product->facilities as $facility)
                    <div class="facility-title {{ !$loop->first ? 'mt-4' : '' }}">
                        {{ $facility->title }}
                    </div>

                    <div class="facilities">
                        <div class="row row-cols-1 ">
                            <div>
                                <div class="left">
                                    <ul>
                                        @foreach($facility->items as $item)
                                        <li>{{ $item->text }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="right">
                                    <p class="info-source">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="price-detail">
                        <div class="contact">
                            প্রয়োজনে কল করুন-
                            <a href="callto:09639 81 25 25">
                                09639 81 25 25
                            </a>,
                            <a href="callto:01979 91 25 25">01979 91 25 25
                            </a>
                        </div>

                    </div>
                </div>

                <!--  -->
                <livewire:frontend.product.order-form />


            </div>
        </div>
        <div class="my-3 text-center">
            <small>
                <a href="https://naturobd.com" id="buy-more" class="btn btn-danger btn-lg">সকল পণ্য দেখুন</a>

            </small>
        </div>
    </div>
    </div>
</section>