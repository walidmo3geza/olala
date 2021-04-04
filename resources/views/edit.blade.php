@extends('parent')

@section('main')

    <div align="right">
        <a href="{{ route('admin.index') }}" class="btn btn-default">Back</a>
    </div>
    <br />
    <form method="post" action="{{ route('admin.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Name</label>
            <div class="col-md-8">
                <input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Email</label>
            <div class="col-md-8">
                <input type="text" name="email" value="{{ $data->email }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Password</label>
            <div class="col-md-8">
                <input type="text" name="password" value="{{ $data->password }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <div class="col-md-8">
                <input type="checkbox" name="adminCreation" id="adminCreation" value="1">
                <label for="adminCreation" class="col-md-4 text-right">A New Admin Creation</label>
                <!-- <input type="text" name="adminCreation" value="{{ $data->adminCreation }}" class="form-control input-lg" /> -->
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group text-center">
            <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
        </div>
    </form>

@endsection
