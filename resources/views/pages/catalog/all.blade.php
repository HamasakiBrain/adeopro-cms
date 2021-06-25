@extends('layouts.app-pure')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Общий каталог
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="grid-menu grid-menu-2col">
                    <div class="no-gutters row">
                        <div class="col-sm-6">
                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-primary">
                                <i class="lnr-license btn-icon-wrapper"> </i>Primary
                            </button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-secondary">
                                <i class="lnr-map btn-icon-wrapper"> </i>Secondary
                            </button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-success">
                                <i class="lnr-music-note btn-icon-wrapper"> </i>Success
                            </button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-info">
                                <i class="lnr-heart btn-icon-wrapper"> </i>Info
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
