@extends('layouts.app')

@section('content')

<form method="post" action="{{ route('photos.store') }}" enctype="multipart/form-data">
		
		{{ csrf_field() }}
		
		<h1>Upload Photo</h1><hr>
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="text"><strong>Title</strong></label>
					<input type="text" name="title" class="form-control">
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
					<input type="file" name="photo" class="form-control">
				</div>
			</div>
		</div>
		<input type="hidden" name="album_id" value="{{ $photo->id}}">
		<input type="submit" class="btn btn-success" value="Submit">

	</form>

@endsection