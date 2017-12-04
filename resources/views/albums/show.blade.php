@extends('layouts.app')

@section('content')

Album Name: <h1>{{ $album->name }}</h1><br>

<a href="{{ route('album.index') }}" class="btn btn-warning">Go Back</a>
<a href="{{ route('photos.create', $album->id) }}" class="btn btn-info">Upload Photos</a><hr>

@foreach($album->photos->chunk(2) as $photoChunk)

<div class="row">
	<div class="col-md-12">

		@foreach($photoChunk as $photo)

		<img class="img-thumbnail rounded" src="{{asset('photos/' . $photo->photo) }}" alt="{{ $photo->name}}" height="300" width="300">

		@endforeach

	</div>
</div>


@endforeach

@endsection