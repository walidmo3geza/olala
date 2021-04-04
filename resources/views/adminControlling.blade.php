@extends('parent')

@section('main')
    <div align="right">
        <a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">Add</a>
    </div>
    @if($message = \Illuminate\Support\Facades\Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered table-striped">
        <tr>
            <th width="35%">Name</th>
            <th width="35%">Email</th>
            <th width="30%">Action</th>
        </tr>
        <?php
        $data=App\User::all();
        ?>
        @foreach($data as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>
                    <a href="{{ route('admin.show',$row->id)}}" class="btn btn-primary">Show</a>
                    <a href="{{ route('admin.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                    <form style="display: inline" method="post" action="{{ route('admin.destroy',$row->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
