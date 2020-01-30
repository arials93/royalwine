@extends('store.layout.master')

@section('title','Trang chủ')

@push('styles')
    <script src="//use.fontawesome.com/123456whatever.js"></script>
@endpush

@section('main')
    <section class="p-0">
        <div class="banner h-700 bg-image-6 bg-fixed">
            <div class="caption">
                <div class="title-group m-b-0">
                    <h5 class="sub-title">Royal wine</h5>
                    <h1 class="f-80">The Perfect Wine</h1>
                    <p class="line-mix star-group line-mix-f">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </p>
                    <h5>Lorem ipsum dolor sit amet, na aliquyam erat</h5>
                    <a href="#" class="ht-btn">Shop now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-fbf9f2">
        <div class="container">
            {{-- <div class="title-group">
                <h5 class="sub-title">Royal wine</h5>
                <h2>Our Products</h2>
                <p class="line-mix star-group">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </p>
            </div> --}}
            @include('store.layout.components.title-group',['extra' => ' ', 'page' => 'Sản phẩm của chúng tôi'])

            <div class="ht-tabs ht-tabs-product"><!-- Nav tabs -->
                <ul class="nav nav-tabs m-b-50 f-family-fredericka-the-great" role="tablist">
                    <li role="presentation" class="active"><a href="#tab-1.html" aria-controls="tab-1" role="tab" data-toggle="tab" aria-expanded="true">Bán chạy</a></li>
                    <li role="presentation"><a href="#tab-2.html" aria-controls="tab-2" role="tab" data-toggle="tab" aria-expanded="false">Mới nhất</a></li>
                    <li role="presentation"><a href="#tab-3.html" aria-controls="tab-3" role="tab" data-toggle="tab" aria-expanded="false">Giảm giá</a></li>
                    <li role="presentation"><a href="#tab-4.html" aria-controls="tab-4" role="tab" data-toggle="tab" aria-expanded="false">Nổi bật</a></li>
                </ul>
            <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab-1">
                        <div class="row">
                            @for ($i = 0; $i < 8; $i++)
                            <div class="col-sm-6 col-md-3">
                                @include('store.layout.components.product')
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab-2">
                        <div class="row">
                            @for ($i = 0; $i < 4; $i++)
                            <div class="col-sm-6 col-md-3">
                                @include('store.layout.components.product')
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab-3">
                        <div class="row">
                            @for ($i = 0; $i < 8; $i++)
                            <div class="col-sm-6 col-md-3">
                                @include('store.layout.components.product')
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab-4">
                        <div class="row">
                            @for ($i = 0; $i < 8; $i++)
                            <div class="col-sm-6 col-md-3">
                                @include('store.layout.components.product')
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-0">
        <div class="container">
            <div class="row bg-0">
                <div class="col-sm-5">
                    <div class="bg-image-7"></div>
                </div>
                <div class="col-sm-7">
                    <div class="p-bn">
                        <div class="title-group m-b-0">
                            <h5 class="sub-title">Royal wine</h5>
                            <h2>Tasting Wine</h2>
                            <p class="line-mix line-mix-f star-group">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                            <a href="#" class="ht-btn">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-dc4c46">
        <div class="container">
            <div class="testimonial">
                <div class="row">
                    <div class="owl" data-items="4" data-itemsDesktop="3" data-itemsDesktopSmall="2" data-itemsTablet="2" data-itemsMobile="1" data-transitionstyle="backslide" data-singleItem="true" data-autoplay="false" data-pag="true" data-buttons="false">
                        <div class="testimonial-item">
                            <p class="line-default line-default-f testimonial-txt">
                                <i class="fas fa-quote-left m-r-5"></i>
                                Lorem ipsum dolor sit amet consecsed d do eiusmod temp incidunt
                                 olore magna aliqu Lorem ipsum dolor sit amet et dincidunt ut labore et d
                                 olore magna aliqu Lorem ipsaliqu
                                 <i class="fa fa-quote-right m-l-5"></i>
                            </p>
                            <p class="line"></p>
                            <p><strong>Saul Castillo</strong></p>
                        </div>
                        <div class="testimonial-item">
                            <p class="line-default line-default-f testimonial-txt">
                                <i class="fa fa-quote-left m-r-5"></i>
                                Lorem ipsum dolor sit amet consecsed d do eiusmod temp incidunt olore mag
                                na aliqu Lorem ipsum dolor sit amet et dincidunt ut labore et dolore ma
                                gna aliqu Lorem ipsaliqu
                                <i class="fa fa-quote-right m-l-5"></i>
                            </p>
                            <p class="line"></p>
                            <p><strong>Simon batchelar</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-fbf9f2">
        <div class="container">
            {{-- <div class="title-group">
                <h5 class="sub-title">Royal wine</h5>
                <h2>News &amp; Events</h2>
                <p class="line-mix star-group">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </p>
            </div> --}}

            @include('store.layout.components.title-group',['extra' => ' ', 'page' => 'Tin tức &amp; sự kiện'])

            <div class="row">
                <div class="owl fas fa-arrow-right" data-items="2" data-itemsDesktop="2" data-itemsDesktopSmall="2" data-itemsTablet="1" data-itemsMobile="1" data-transitionstyle="backslide" data-singleItem="false" data-autoplay="false" data-pag="false" data-buttons="true">
                    <div class="col-md-12">
                        <div class="box-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="blog-image"><img src="images/restaurant-939439_960_720.jpg" alt="image"></a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="caption text-left">
                                        <h3 class="line-default"><a href="#">Lorem ipsum dolor sit amet, consectetur o eiusmo</a></h3>
                                        <ul class="post-date">
                                            <li>By <a href="#">Admin</a></li>
                                            <li>January 23 2017</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"><!-- Blog-item -->
                        <div class="box-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="blog-image"><img src="images/wine-850337_960_720.jpg" alt="image"></a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="caption text-left">
                                        <h3 class="line-default"><a href="#">Lorem ipsum dolor sit amet, consectetur o eiusmo</a></h3>
                                        <ul class="post-date">
                                            <li>By <a href="#">Admin</a></li>
                                            <li>January 23 2017</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="blog-image"><img src="images/restaurant-939439_960_720.jpg" alt="image"></a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="caption text-left">
                                        <h3 class="line-default"><a href="#">Lorem ipsum dolor sit amet, consectetur o eiusmo</a></h3>
                                        <ul class="post-date">
                                            <li>By <a href="#">Admin</a></li>
                                            <li>January 23 2017</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

