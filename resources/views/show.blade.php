@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                {{$listings->name}}
            </div>

            <div class="card-body">
                    <div class="list-group">
                            <div class="list-group-item">
                              Address: {{ $listings->address }}
                            </div>
                            <div class="list-group-item">
                              Website: <a href="{{ $listings->website }}">{{ $listings->website }}</a>
                            </div>
                            <div class="list-group-item">
                              Email: <a href="mailto:{{ $listings->email }}" >{{ $listings->email }}</a>
                            </div>
                            <div class="list-group-item">
                              Phone: {{ $listings->phone }}
                            </div>
                            <div class="list-group-item">
                              Bio: {{ $listings->bio }}
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
