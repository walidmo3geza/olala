@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if($message = \Illuminate\Support\Facades\Session::get('failed'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form method="post" action="/adminControlling">
                            @csrf
                            <input type="submit" value="Admin Controlling" class="btn btn-primary">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
