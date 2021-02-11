@extends('layouts.admin')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fa fa-superscript text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap mx-auto">
                            <div class="card-header">
                                <h4>Bilangan Pangkat & Akar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-chart-bar text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Persamaan & Pertidaksamaan Linier</h4>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-square-root-alt text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Matriks</h4>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-sort-numeric-up" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Fungsi</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-arrows-alt-h text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Barisan & Deret</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-chart-line text-white" style="font-size: 2rem;"></i></fas>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Program Linier</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-ruler-combined text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Trigonometri</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-shapes text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Geometri</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fab fa-accusoft text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Transformasi</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-adjust text-white" style="font-size: 2rem;"></i></fas>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Lingkaran</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-dice-five text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Peluang</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-chart-pie text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Statistika</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-infinity text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Limit</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-calculator text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Turunan</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fab fa-figma text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Integral</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection