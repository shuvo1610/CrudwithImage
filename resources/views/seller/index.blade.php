@extends('layouts.master')
@section('content')
    <div class="main-content" style="min-height: 482px;">
        <section class="section">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Seller Information</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-stripe">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Name</td>
                                        <td>Phone</td>
                                        <td>Email</td>
                                        <td>Address</td>
                                        <td>Salary</td>
                                        <td>Image</td>
                                        <td>Action</td>
                                    </tr>
                                    </thead>
                                    @foreach($sellers as $seller)
                                        <tr>
                                            <td>{{ $seller->id }}</td>
                                            <td>{{ $seller->name }}</td>
                                            <td>{{ $seller->phone }}</td>
                                            <td>{{ $seller->email }}</td>
                                            <td>{{ $seller->address }}</td>
                                            <td>{{ $seller->salary }}</td>
                                            <td><img src="{{ asset($seller->image) }}" alt="{{$seller->name}}" height="100" width="100"></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="{{route('seller.edit',['id'=>$seller->id])}}">Edit</a>
                                                        <a class="dropdown-item" href="{{route('seller.delete',['id'=>$seller->id])}}">Delete</a>
                                                        <a class="dropdown-item" href="{{route('seller.profile',['id'=>$seller->id])}}">View</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

