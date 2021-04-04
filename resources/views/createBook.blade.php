@extends('parent')

@section('main')

    <div align="right">
        <a href="{{ route('book.index') }}" class="btn btn-default">Back</a>
    </div>

    <form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Name</label>
            <div class="col-md-8">
                <input type="text" name="name" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Lesson</label>
            <div class="col-md-8">
                <input type="text" name="lesson" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Select Profile Image</label>
            <div class="col-md-8">
                <input type="file" name="image_url" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group text-center">
            <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
        </div>

    </form>

@endsection
