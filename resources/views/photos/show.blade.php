@extends('layouts.app')

@section('content')

@foreach($albums->chunk(3) as $albumChunk)
<div class="row">

	<div class="col-md-10">

		@foreach($albumChunk as $album)

		<a href="{{ route('album.show', $album->id) }}">
			<img class="thumbnail" src="{{asset('cover_images/' . $album->cover_image) }}" alt="{{ $album->name}}" height="200" width="200">
		</a>

		@endforeach

	</div>

</div>

@endforeach

@endsection