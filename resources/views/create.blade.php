@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">

            <div class="card-header">
              {{ 'Create Listing' }}
              <span class="float-end"><a href="/" class="btn btn-secondary btn-sm">Go Back</a></span>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="/listings" method="post">
                  @csrf
                  <div class="form-group mb-2">
                    <label for="name">Enter your name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value=" {{ old('name') }}"> 
                  </div>
                  <div class="form-group mb-2">
                    <label for="address">Enter your address</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Enter address" value=" {{ old('address') }}"> 
                  </div>
                  <div class="form-group mb-2">
                    <label for="website">Enter your website</label>
                    <input type="text" name="website" id="website" class="form-control" placeholder="Enter website" value=" {{ old('website') }}"> 
                  </div>
                  <div class="form-group mb-2">
                    <label for="email">Enter your email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" value=" {{ old('email') }}"> 
                  </div>
                  <div class="form-group mb-2">
                    <label for="phone">Enter your phone</label>
                    <input type="number" name="phone" id="phone" class="form-control" placeholder="Enter phone" value=" {{ old('phone') }}"> 
                  </div>
                  <div class="form-group mb-2">
                    <label for="bio">Enter your bio</label>
                    <input type="text" name="bio" id="bio" class="form-control" placeholder="Enter bio" value=" {{ old('bio') }}"> 
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div> 

        </div>
    </div>
</div>
  
@endsection