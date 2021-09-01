@extends('layout')

<div class="push-top">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
@endif

@section('content')

    <div class="container my-5">
        <div class="row">
    @foreach($member as $members)
        <div class="col-md-4 mb-2">
            <div class="card">
                <img src="..." class="card-img-top" alt="{{$members->name}}">
                <div class="card-body">
                    <h5>{{$members->name}}</h5>
                    <p class="card-text">{{$members->name}} {{$members->firstname}} </p>
                </div>
                <div class="card-body">
                    <a href=""></a>
                    <a href=""></a>
                <div class="card-footer text-muted">
                    <a href="{{ route('members.edit', $members->id)}}"><button type="submit" class="btn btn-primary">Edit</button></a>
                    <form action="{{ route('members.destroy', $members->id) }}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

    @endforeach
        </div>
    </div>
@endsection
