@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Create Quiz</li>
					</ul>
				</div>
				<div class="col-md-2">
					@include('layouts.left-panel')
				</div>
				<div class="col-md-10">
					@include('contents.create')
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
