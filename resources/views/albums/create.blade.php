@extends('layouts.app')

@section('content')

	<form method="post" action="{{ route('albums.store') }}" enctype="multipart/form-data">
		
		{{ csrf_field() }}

		<h1>Create Album</h1><hr>
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="text"><strong>Name</strong></label>
					<input type="text" name="name" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="text"><strong>Desciption</strong></label>
					<textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="text"><strong>Choose Cover Image</strong></label>
					<input type="file" name="cover_image" class="form-control">
				</div>
			</div>
		</div>

		<input type="submit" class="btn btn-success" value="Submit">

	</form>

@endsection