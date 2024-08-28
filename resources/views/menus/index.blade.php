@extends('layouts.nav-menu')

@section('content')

            <section class="content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 col-lg-9 col-md-12">
                            <div class="site-filters style-1 clearfix">
                                <ul class="filters" data-bs-toggle="buttons">
                                    <li data-filter=".All" class="btn active"><a href="{{ route('menu') }}"><span><i
                                                    class="flaticon-fast-food"></i></span>ALL</a></li>
                                                    @foreach ($Categories as $item )
                                                    

                                                    <li  class="btn"><a href="{{ route('filter', $item ) }}"><span>{!!$item->icon!!}</i></span>{{$item->name}}</a></li>
                                                  @endforeach
                                </ul>
                            </div>
                        </div>


                    </div>
                    <ul id="masonry" class="row">
                        @forelse ( $products as $product )
                        <li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All drink pizza burger">
                            <div class="dz-img-box style-4 box-hover">
                                <div class="menu-detail">
                                    <div class="dz-media">
                                        <img src="{{ asset('storage/' . $product->photo) }}" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a> {{$product->name}}</a></h5>
                                        <p> {{$product->slug}}</p>
                                    </div>
                                </div>
                                <div class="menu-footer">
                                    <span>Regular Price</span>
                                    <h5 class="price">$ {{$product->Price}}</h5>
                                </div>
                            </div>
                        </li>
                        @empty
                        <h4>No Data Found!</h4>
                    @endforelse
                       
                    </ul>
                </div>
            </section>
            <!-- Our Menu-->
            @endsection