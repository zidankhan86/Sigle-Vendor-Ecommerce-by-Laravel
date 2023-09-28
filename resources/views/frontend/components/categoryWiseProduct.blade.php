<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Product</h2>
                </div>
                <div class="featured__controls">

                </div>
            </div>
        </div>
        <div class="row featured__filter">

            @foreach ($products as $item)

            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic">
                        <a href="{{url('/product-details',$item->id)}}"> <img src="{{ asset('/public/uploads/' . $item->image) }}" alt="Product Image"></a>
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="{{url('/product-details',$item->id)}}"><i class="fa fa-eye"></i></a></li>
                            <li><a href="{{route('add.to.cart',$item->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    {{-- <div>
                        <a href="{{route('add.to.cart',$item->id)}}" class="primary-btn">ADD TO CART</a>
                    </div> --}}
                    <div class="featured__item__text">
                        <h6><a href="#">{{$item->name}}</a></h6>
                        <div class="star-rating">
                            <span class="star" style="font-size: 24px; color: gold;">&#9733;</span>
                            <span class="star" style="font-size: 24px; color: gold;">&#9733;</span>
                            <span class="star" style="font-size: 24px; color: gold;">&#9733;</span>
                            <span class="star" style="font-size: 24px; color: gold;">&#9733;</span>
                            <span class="star half" style="font-size: 24px; color: gold;">&#9733;</span>
                          </div>
                        <h5>{{$item->price}} Tk.</h5>
                    </div><br>

                </div>

            </div>

            @endforeach

        </div >

    </div>
</section>
<!-- Featured Section End -->