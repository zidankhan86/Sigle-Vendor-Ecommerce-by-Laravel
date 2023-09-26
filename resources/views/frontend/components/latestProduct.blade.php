<!-- latest Product -->

<br><section >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="featured__controls">

                    <ul>
                        <li class="active" data-filter="*"><strong>New Arrival</strong></li>

                        @foreach ($latestCategories as $item)

                       <a href="{{ route('category.wize.products',$item->id) }}"> <li>{{$item->type}}</li> </a>

                        @endforeach
                    </ul>


                </div>
            </div>
        </div>
        <div class="row featured__filter">

            @foreach ($latestProducts as $item)

            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="featured__item">
                    <div class="featured__item__pic">
                        <a href="{{route('product.details',$item->id)}}"> <img src="{{ asset('/public/uploads/' . $item->image) }}" alt="Product Image"></a>
                        <ul class="featured__item__pic__hover">
                            {{-- <li><a href="#"><i class="fa fa-heart"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> --}}
                            <li><a href="{{route('add.to.cart',$item->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div>
                        <a href="{{route('add.to.cart',$item->id)}}" class="primary-btn">ADD TO CART</a>
                    </div>

                    <div class="featured__item__text">
                        <h6><a href="#">{{$item->name}}</a></h6>
                        <h5>{{$item->price}} Tk.</h5>
                    </div><br>


                    {{-- <a href="{{route('product.details',$item->id)}}" class="btn btn-info btn-lg" style="width: 150px;">Details</a>
                    <a href="" class="btn btn-success btn-lg" style="width: 100px;">Order</a> --}}

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
