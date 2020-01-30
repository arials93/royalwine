@extends('store.layout.master')

@section('title','Sản phẩm')

@section('main')
    <section class="bg-fbf9f2">
        <div class="container">
            <div class="content">
                {{-- <div class="title-group underline-double">
                    <h5 class="sub-title">Royal wine</h5>
                    <h2 class="selected">our Products</h2>
                    <p class="line-mix star-group">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </p>
                </div> --}}

                @include('store.layout.components.title-group',['extra' => 'underline-double', 'page' => 'Sản phẩm'])

                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <div class="box">
                            <h3 class="title line-default">Categories</h3>
                            <ul class="list list-border">
                                <li><a href="#">White wine</a></li>
                                <li><a href="#">Red wine</a></li>
                                <li>Champane</li>
                                <li><a href="#">Rose wibne</a></li>
                                <li><a href="#">Gray wine</a></li>
                            </ul>
                        </div>
                        <div class="box">
                            <h3 class="title line-default">Search</h3>
                            <select class="form-item">
                                <option>Price</option>
                                <option>$20 - $100</option>
                                <option>100 - $500</option>
                                <option>$500- $5000</option>
                                <option>&gt; $5000</option>
                            </select>
                            <select class="form-item">
                                <option>Year</option>
                                <option>1998</option>
                                <option>2000</option>
                                <option>2007</option>
                                <option>2017</option>
                            </select>
                            <select class="form-item">
                                <option>Wine Size</option>
                                <option>100 ml</option>
                                <option>200 ml</option>
                                <option>300 ml</option>
                                <option>400 ml</option>
                            </select>
                            <a href="#" class="ht-btn bg-dc4c46">Search</a>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-9">
                        <div class="row">
                            <div class="col-xs-6 col-sm-4">
                                <div class="iconc"><i class="fa fa-th"></i></div>
                                <div class="iconc"><i class="fa fa-list"></i></div>
                            </div>
                            <div class="col-xs-6 col-sm-4 pull-right">
                                <select class="form-item">
                                    <option>Sort by</option>
                                    <option>Option 1</option>
                                    <option>Option 1</option>
                                    <option>Option 1</option>
                                    <option>Option 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="box-item">
                                    <a href="images/r1.png" class="img hover-img image-zoom">
                                        <img src="images/r1.png" alt="image">
                                        <div class="hover-caption">
                                            <i class="fa fa-search-plus"></i>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <h3 class="heading"><a>Justin sauvignon blanc</a></h3>
                                        <p class="line-mix price">$200,00</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipi</p>
                                        <a href="#" class="ht-btn">Add to cart</a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="box-item">
                                    <a href="images/r2.png" class="img hover-img image-zoom">
                                        <img src="images/r2.png" alt="image">
                                        <div class="hover-caption">
                                            <i class="fa fa-search-plus"></i>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <h3 class="heading"><a>Justin sauvignon blanc</a></h3>
                                        <p class="line-mix price">$200,00</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipi</p>
                                        <a href="#" class="ht-btn">Add to cart</a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="box-item">
                                    <a href="images/r3.png" class="img hover-img image-zoom">
                                        <img src="images/r3.png" alt="image">
                                        <div class="hover-caption">
                                            <i class="fa fa-search-plus"></i>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <h3 class="heading"><a>Justin sauvignon blanc</a></h3>
                                        <p class="line-mix price">$200,00</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipi</p>
                                        <a href="#" class="ht-btn">Add to cart</a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="box-item">
                                    <a href="images/r4.png" class="img hover-img image-zoom">
                                        <img src="images/r4.png" alt="image">
                                        <div class="hover-caption">
                                            <i class="fa fa-search-plus"></i>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <h3 class="heading"><a>Justin Sauvignon Blanc</a></h3>
                                        <p class="line-mix price">$200,00</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipi</p>
                                        <a href="#" class="ht-btn">Add to cart</a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="box-item">
                                    <a href="images/r5.png" class="img hover-img image-zoom">
                                        <img src="images/r5.png" alt="image">
                                        <div class="hover-caption">
                                            <i class="fa fa-search-plus"></i>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <h3 class="heading"><a>Justin Sauvignon Blanc</a></h3>
                                        <p class="line-mix price">$200,00</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipi</p>
                                        <a href="#" class="ht-btn">Add to cart</a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="box-item">
                                    <a href="images/r6.png" class="img hover-img image-zoom">
                                        <img src="images/r6.png" alt="image">
                                        <div class="hover-caption">
                                            <i class="fa fa-search-plus"></i>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <h3 class="heading"><a>Justin Sauvignon Blanc</a></h3>
                                        <p class="line-mix price">$200,00</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipi</p>
                                        <a href="#" class="ht-btn">Add to cart</a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination ht-pagination">
                                <li><a href="#" aria-label="Previous"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#" aria-label="Next"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection