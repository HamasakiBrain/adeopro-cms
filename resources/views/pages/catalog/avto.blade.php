@extends('layouts.app-bootstrap5')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card my-5">
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Бренды</h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <form class="d-flex flex-wrap justify-content-between">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				    Continental
				  </span>
                                    </label> <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				   Continental
				  </span>
                                    </label>  <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				  Continental
				  </span>
                                    </label>  <!-- form-check.// -->
                                </form>

                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- card-group-item.// -->

                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Сезонность</h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <form class="">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				    всесезонная
				  </span>
                                    </label> <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				   летняя
				  </span>
                                    </label>  <!-- form-check.// -->
                                </form>

                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Ширина, мм</h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <form class="">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				    175
				  </span>
                                    </label> <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				   195
				  </span>
                                    </label>  <!-- form-check.// -->
                                </form>

                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Высота профиля, %</h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <form class="">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				    55
				  </span>
                                    </label> <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				   65
				  </span>
                                    </label>  <!-- form-check.// -->
                                </form>

                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Диаметр, дюймы</h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <form class="">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				    13
				  </span>
                                    </label> <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				   14
				  </span>
                                    </label><label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				   15
				  </span>
                                    </label>  <!-- form-check.// --><label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				   16
				  </span>
                                    </label>  <!-- form-check.// -->
                                </form>

                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Тип шины</h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <form class="">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">


    SUV
				  </span>
                                    </label> <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				   коммерческая
				  </span>
                                    </label> <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
				   легковая
				  </span>
                                    </label>  <!-- form-check.// -->
                                </form>

                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                    <button class="btn btn-danger m-2">Применить</button>

                </div> <!-- card.// -->
            </div>
            <div class="col-md-8">
                <div class="my-5">
                    *Товары*
                </div>
            </div>
        </div>
    </div>
@endsection
