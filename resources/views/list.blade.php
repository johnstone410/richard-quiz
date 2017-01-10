@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">List</li>
					</ul>
				</div>
				<div class="col-md-4">
					@include('layouts.left-panel')
				</div>
				<div class="col-md-8">
					@include('contents.list')
				</div>
			</div>


		</div>
	</div>
</div>
@endsection