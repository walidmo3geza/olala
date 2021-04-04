@extends('parent')

@section('main')

    <div class="jumbotron text-center">
        <div align="right">
            <a href="{{ route('book.index') }}" class="btn btn-default">Back</a>
        </div>
        <br />
        <img src="{{ URL::to('/') }}/images/{{ $data->image_url }}" class="img-thumbnail" />
        <h3>Name - {{ $data->index_name }}</h3>
        <h3>Lesson - {{ $data->lesson }} </h3>
    </div>
@endsection
