@extends('layouts.app-pure')
@section('content')
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/ui.css') }}">
    <div class="row">
        <aside class="col-md-2">
            <article class="filter-group">
                <h6 class="title">
                    <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_2"> Бренды </a>
                </h6>
                <div class="filter-content collapse show" id="collapse_2">
                    <div class="inner">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label">Adidas
                                <b class="badge badge-pill badge-light float-right">120</b>  </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label">Nike
                                <b class="badge badge-pill badge-light float-right">15</b>  </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label">The Noth Face
                                <b class="badge badge-pill badge-light float-right">35</b> </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label">The cat
                                <b class="badge badge-pill badge-light float-right">89</b> </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <div class="custom-control-label">Honda
                                <b class="badge badge-pill badge-light float-right">30</b>  </div>
                        </label>
                    </div> <!-- inner.// -->
                </div>
            </article> <!-- filter-group .// -->
            <article class="filter-group">
                <h6 class="title">
                    <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_3">Цена</a>
                </h6>
                <div class="filter-content collapse show" id="collapse_3">
                    <div class="inner">
                        <input type="range" class="custom-range" min="0" max="100" name="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Мин</label>
                                <input class="form-control" placeholder="100 ₽" type="number" min="1">
                            </div>
                            <div class="form-group text-right col-md-6">
                                <label>Макс</label>
                                <input class="form-control" placeholder="10000 ₽" type="number" min="1">
                            </div>
                        </div> <!-- form-row.// -->
                        <button class="btn btn-block btn-primary">Сохранить</button>
                    </div> <!-- inner.// -->
                </div>
            </article> <!-- filter-group .// -->
            <article class="filter-group">
                <h6 class="title">
                    <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_4"> Размеры </a>
                </h6>
                <div class="filter-content collapse show" id="collapse_4">
                    <div class="inner">
                        <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> XS </span>
                        </label>

                        <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> SM </span>
                        </label>

                        <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> LG </span>
                        </label>

                        <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> XXL </span>
                        </label>
                    </div> <!-- inner.// -->
                </div>
            </article> <!-- filter-group .// -->
        </aside> <!-- col.// -->
        <main class="col-md-10">


            <header class="mb-3">
                <div class="form-inline">
                    <strong class="mr-md-auto">32 найдено </strong>
                    <select class="mr-2 form-control">
                        <option>Latest items</option>
                        <option>Trending</option>
                        <option>Most Popular</option>
                        <option>Cheapest</option>
                    </select>
                </div>
            </header><!-- sect-heading -->


            <article class="card card-product-list">
                <div class="row no-gutters">
                    <aside class="col-md-3">
                        <a href="#" class="img-wrap">
                            <span class="badge badge-danger"> NEW </span>
                            <img src="https://sun9-25.userapi.com/impg/lt5n2mksg9B8KQSXe3JZNivjNt0zQQrHG_LRZg/zp84NaDXRng.jpg?size=1620x2160&quality=96&sign=0a30f724da2846da9d03fbae5dcac60e&type=album">
                        </a>
                    </aside> <!-- col.// -->
                    <div class="col-md-6">
                        <div class="info-main">
                            <a href="#" class="h5 title">Test 123</a>
                            <div class="rating-wrap mb-2">
                                <ul class="rating-stars">
                                    <li style="width:100%" class="stars-active">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">9/10</div>
                            </div> <!-- rating-wrap.// -->

                            <p class="mb-3">
                                <span class="tag"> <i class="fa fa-check"></i> Verified</span>
                                <span class="tag"> 5 Years </span>
                                <span class="tag"> 80 reviews </span>
                                <span class="tag"> Russia </span>
                            </p>

                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, recusandae. </p>

                        </div> <!-- info-main.// -->
                    </div> <!-- col.// -->
                    <aside class="col-sm-3">
                        <div class="info-aside">
                            <div class="price-wrap">
                                <span class="h5 price">$25.00-$40.00</span>
                                <small class="text-muted">/per item</small>
                            </div> <!-- price-wrap.// -->
                            <small class="text-warning">Paid shipping</small>

                            <p class="text-muted mt-3">Grand textile Co</p>
                            <p class="mt-3">
                                <a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>
                            </p>
                        </div> <!-- info-aside.// -->
                    </aside> <!-- col.// -->
                </div> <!-- row.// -->
            </article> <!-- card-product .// -->

        </main> <!-- col.// -->

    </div>

@endsection
