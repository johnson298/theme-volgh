@extends('layouts.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">C3-Pie Charts</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">C3-Pie Charts</li>
								</ol>
							</div>
							<div class="mr-auto pageheader-btn">
								<a href="#" class="btn btn-success btn-icon text-white">
									<span>
										<i class="fe fe-plus"></i>
									</span> Add Account
								</a>
								<a href="#" class="btn btn-danger btn-icon text-white mr-2">
									<span>
										<i class="fe fe-log-in"></i>
									</span> Export
								</a>
							</div>
						</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pie Chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-pie" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pie Chart with Multiple colors</h3>
									</div>
									<div class="card-body">
										<div id="chart-pie2" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-1 CLOSE -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pie Chart3</h3>
									</div>
									<div class="card-body">
										<div id="chart-pie3" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pie Chart4</h3>
									</div>
									<div class="card-body">
										<div id="chart-pie4" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-2 CLOSE -->
					</div>
				</div>
				<!-- CONTAINER CLOSE -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/js/charts.js') }}"></script>
@endsection