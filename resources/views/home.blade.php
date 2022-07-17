@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                {{"Dashboard"}}
                <span class="float-end"><a class="btn btn-secondary btn-sm" href="listings/create">Create Listing</a></span>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h2>Yours Listings</h2>
                    @if(count($listings))
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{ $listing->name }}</td>
                                    <td>
                                        <form action="listings/{{ $listing->id }}" method="post" class="float-end ms-2" >
                                            @csrf 
                                            @method("DELETE")
                                            <button class="btn btn-danger" >Delete</button>
                                        </form>
                                        <a role="button" href="listings/{{ $listing->id }}/edit" class="btn btn-primary float-end ">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    @else 
                        <p>You don't have any listings yet!</p>

                    @endif
                    
            </div>
        </div>
    </div>
</div>
@endsection
