@extends('BackEnd.master')
@section('title')
    Delivery Page
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-md-5 my-lg-5">
                @if(Session::get('sms'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('sms') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">


                    <div class="card-header text-center">
                        Delivery Boy
                    </div>
                    <div class="card-body">
                        <form action="{{ route('delivery_save') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="delivery_boy_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="delivery_boy_phone_number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="delivery_boy_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Added on</label>
                                <input type="date" name="added_on" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <div class="radio">
                                    <input type="radio" name="delivery_boy_status" value="1"> Active
                                    <input type="radio" name="delivery_boy_status" value="0"> Inactive
                                </div>
                            </div>
                            <button type="submit" name="btn" class="btn btn-outline-primary btn-block">DeliveryBoy Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
