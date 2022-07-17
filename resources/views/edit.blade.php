@extends('layouts.app')

@section('content')

  <div class="row justify-content-center">
    <div class="column-md-8">
      <div class="card">

        <div class="card-header">
          Edit Listings
          <span class="float-end" ><a href="/home" class="btn btn-secondary btn-sm" >Back</a></span>
        </div>

        <div class="card-body">
          @if(session('status'))
            <div class="alert alert-success" role="alert" >
              {{ session('status') }}
            </div>
          @endif

          <form action="/listings/{{ $listings->id }}" method="post" >
            @csrf 
            @method("PUT")
              <div class="form-group mb-2">
                <label for="name">Enter name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" value="{{ $listings->name }}">
              </div>
              <div class="form-group mb-2">
                <label for="address">Enter address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter address" value="{{ $listings->address }}">
              </div>
              <div class="form-group mb-2">
                <label for="website">Enter website</label>
                <input type="text" name="website" id="website" class="form-control" placeholder="Enter website" value="{{ $listings->website }}">
              </div>
              <div class="form-group mb-2">
                <label for="email">Enter email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter email" value="{{ $listings->email }}">
              </div>
              <div class="form-group mb-2">
                <label for="phone">Enter phone</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone" value="{{ $listings->phone }}">
              </div>
              <div class="form-group mb-2">
                <label for="bio">Enter bio</label>
                <input type="text" name="bio" id="bio" class="form-control" placeholder="Enter bio" value="{{ $listings->bio }}">
              </div>

              <button type="submit" class="btn btn-primary mt-2" >Submit</button>
          </form>

        </div>

      </div>
    </div>
  </div>

@endsection