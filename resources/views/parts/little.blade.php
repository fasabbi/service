<div class="col-lg-3 col-md-4 col-sm-6 mix fastfood @foreach($subcategories as $iii){{ $iii->subcategory_name }}@endforeach">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('services/img/featured/feature-4.png')}}" >

                        <div class="columnn">
   
                        <img src="{{asset('uploads/product')}}/{{$fff->product_photo}}"  alt="Mountains" style="width:100%;height:120px">
                        <h4>&nbsp;<i class="material-icons" style="font-size:18px;">star</i>{{$fff->product_rating}}/5</h4>
                        <h6>&nbsp;<i class="material-icons" style="font-size:16px;">access_alarms</i>{{$fff->product_time}} minutes</h6>

                        <hr style="border-top: 3px solid #bbb;" class="solid">

                        <p style="font-size:13px;margin-top: -17px;"><i class="material-icons" style="font-size:16px;">check</i>{{$fff->product_short}}</p>
                        <div id="buttonn"><a href="{{url('product/details')}}/{{$fff->id}}">
                        <button style="margin-top: -0px;" type="button" class="btn btn-dark btn-sm"><i class="material-icons" style="font-size:15px">info_outline</i>view full  Details and reviews</button>
                        </a>
                        {{-- <form action="{{route('addtocart',$fff->id)}}" method="POST">
                        @csrf
                        <button style="margin-top: -17px;" type="button" class="btn btn-success btn-sm">Add to cart</button>
                        </form>  --}}
                        </div>
                            <!-- <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul> -->
                            </div> 
                        </div>
        
                                <div class="featured__item__text">
                                <h6><a href="{{url('product/details')}}/{{$fff->id}}">{{$fff->product_name}}</a></h6>
                                <h5>${{$fff->product_price}}</h5>
                        </div>
                    </div>
                </div>







{{-- 


<li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>

                            <img src="{{asset('uploads/product')}}/{{$fff->product_photo}}" alt="not found">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{url('product/details')}}/{{$fff->id}}">{{$fff->product_name}}</a></h3>
                            <p class="pull-left">{{$fff->product_price}}</p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>  --}}