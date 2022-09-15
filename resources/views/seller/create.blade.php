@extends('layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Validation</h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <form action="{{route('seller.store') }}" method="POST" enctype="multipart/form-data">@csrf
                            <div class="card-header">
                                <h5>Add Seller</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">@if($errors->has('name'))
                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="number" class="form-control" name="phone" value="{{ old('phone') }}">@if($errors->has('phone'))
                                        <div class="text-danger">{{ $errors->first('phone') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">@if($errors->has('email'))
                                        <div class="text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group ">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                                </div>

                                <div class="form-group ">
                                    <label>Salary</label>
                                    <input type="number" class="form-control" name="salary" value="{{ old('salary') }}">@if($errors->has('salary'))
                                        <div class="text-danger">{{ $errors->first('salary') }}</div>
                                    @endif
                                </div>

                                <div class="form-group ">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">@if($errors->has('image'))
                                    <div class="text-danger">{{ $errors->first('image') }}</div>
                                @endif
                            </div>

                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
