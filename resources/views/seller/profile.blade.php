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
                                <h3 class="card-title">Seller profile</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-stripe">
                                    <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Phone</td>
                                        <td>Email</td>
                                        <td>Address</td>
                                        <td>Salary</td>
                                        <td>image</td>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>{{ $seller->name }}</td>
                                        <td>{{ $seller->phone }}</td>
                                        <td>{{ $seller->email }}</td>
                                        <td>{{ $seller->address }}</td>
                                        <td>{{ $seller->salary }}</td>
                                        <td><img src="{{ asset($seller->image) }}" alt="{{ $seller->phone }}" height="100" width="100"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

