@extends('BackEnd.master')
@section('title')
    Order Details
@endsection
@section('content')
    <div class="offset-2 col-md-8">
        <div class="card my-5">
            <div class="card-header">
                <h1 class="text-center text-muted">Customer Info</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered">

                    <tr>
                        <th>Name</th>
                        <td>lol</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>lol</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>lol</td>
                    </tr>
                    <tbody>
                    @php($i = 1)
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>
                                {{ $order->name }}
                            </td>
                            <td>{{ $order->order_total }}</td>
                            <td>{{ $order->order_status }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->payment_type }}</td>
                            <td>{{ $order->payment_status }}</td>
                            {{--                        <td><img src="{{ asset($dish->dish_image) }}" height="25" width="68" class="img-fluid img-thumbnail" alt="Any alt text"></td>--}}

                            <td>

                                {{--                            @if($dish->dish_status==1)--}}

                                <a class="btn btn-outline-success" href="{{ route('view_order', ['order_id'=>$dish->dish_id]) }}">
                                    <i class="fas fa-fa-search" title="View Order Details"></i>
                                </a>
                                {{--                            @else--}}
                                <a class="btn btn-outline-info" href="{{--{{ route('dish_active', ['dish_id'=>$dish->dish_id]) }}--}}">
                                    <i class="fas fa-search-plus" title="View Invoice"></i>
                                </a>
                                <a class="btn btn-outline-primary" href="{{--{{ route('dish_active', ['dish_id'=>$dish->dish_id]) }}--}}">
                                    <i class="fas fa-arrow-circle-down" title="Download Invoice"></i>
                                </a>
                                {{--                            @endif--}}
                                <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{--{{$dish->dish_id}}--}}">
                                    <i class="fas fa-edit" title="Click to Edit"></i>
                                </a>
                                <a class="btn btn-outline-danger mt-1" href="{{--{{ route('delete_dish', ['dish_id'=>$dish->dish_id]) }}--}}">
                                    <i class="fas fa-trash" title="Click to delete"></i>
                                </a>

                            </td>
                        </tr>
                        {{-- =============== --}}

                        {{--                    <div class="modal fade" id="edit{{$dish->dish_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                        {{--                        <div class="modal-dialog" role="document">--}}
                        {{--                            <div class="modal-content">--}}
                        {{--                                <div class="modal-header">--}}
                        {{--                                    <h5 class="modal-title">Update Dish</h5>--}}
                        {{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--                                        <span aria-hidden="true">&times;</span>--}}
                        {{--                                    </button>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="modal-body">--}}
                        {{--                                    <form action="{{ route('update_dish') }}" method="post" enctype="multipart/form-data">--}}
                        {{--                                        @csrf--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Name</label>--}}
                        {{--                                            <input type="text" class="form-control" name="dish_name" value="{{$dish->dish_name}}">--}}
                        {{--                                            <input type="hidden" class="form-control" name="dish_id" value="{{$dish->dish_id}}">--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Previous Category</label>--}}
                        {{--                                            <input type="text" class="form-control" name="dish_name" value="{{$dish->category_name}}">--}}
                        {{--                                            <label>Category</label>--}}
                        {{--                                            <select name="category_id" class="form-control">--}}
                        {{--                                                <option value="">----Select Category----</option>--}}
                        {{--                                                @foreach($categories as $cate)--}}
                        {{--                                                    <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>--}}
                        {{--                                                @endforeach--}}
                        {{--                                            </select>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Details</label>--}}
                        {{--                                            <textarea type="text" name="dish_detail" class="form-control" rows="5">{{ $dish->dish_detail }}</textarea>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Previous Image</label>--}}
                        {{--                                            <img src="{{ asset($dish->dish_image) }}" style="height: 150px; width: 150px; border-radius: 50%">--}}
                        {{--                                            <input type="file" name="dish_image" class="form-control" accept="image/*">--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="card">--}}
                        {{--                                            <div class="card-header">Dish Attributes</div>--}}
                        {{--                                            <div class="card-body">--}}
                        {{--                                                <div class="form-group">--}}
                        {{--                                                    <div class="row">--}}

                        {{--                                                        <div class="col-md-6">--}}
                        {{--                                                            <input type="text" class="form-control" name="full_price" value="{{$dish->full_price}}" placeholder="Full Price">--}}
                        {{--                                                        </div>--}}
                        {{--                                                        <div class="col-md-6">--}}
                        {{--                                                            <input type="text" class="form-control" name="half_price" value="{{$dish->half_price}}" placeholder="Half Price">--}}
                        {{--                                                        </div>--}}
                        {{--                                                    </div>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="form-group">--}}
                        {{--                                    <input type="submit" class="form-control" name="btn" class="btn btn-outline-primary btn-block" value="Update">--}}
                        {{--                                </div>--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{-- =============== --}}
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

        <div class="card my-5">
            <div class="card-header">
                <h1 class="text-center text-muted">Shipping Info</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered">

                    <tr>
                        <th>Name</th>
                        <td>lol</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>lol</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>lol</td>
                    </tr>
                    <tbody>
                    @php($i = 1)
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>
                                {{ $order->name }}
                            </td>
                            <td>{{ $order->order_total }}</td>
                            <td>{{ $order->order_status }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->payment_type }}</td>
                            <td>{{ $order->payment_status }}</td>
                            {{--                        <td><img src="{{ asset($dish->dish_image) }}" height="25" width="68" class="img-fluid img-thumbnail" alt="Any alt text"></td>--}}

                            <td>

                                {{--                            @if($dish->dish_status==1)--}}

                                <a class="btn btn-outline-success" href="{{ route('view_order', ['order_id'=>$dish->dish_id]) }}">
                                    <i class="fas fa-fa-search" title="View Order Details"></i>
                                </a>
                                {{--                            @else--}}
                                <a class="btn btn-outline-info" href="{{--{{ route('dish_active', ['dish_id'=>$dish->dish_id]) }}--}}">
                                    <i class="fas fa-search-plus" title="View Invoice"></i>
                                </a>
                                <a class="btn btn-outline-primary" href="{{--{{ route('dish_active', ['dish_id'=>$dish->dish_id]) }}--}}">
                                    <i class="fas fa-arrow-circle-down" title="Download Invoice"></i>
                                </a>
                                {{--                            @endif--}}
                                <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{--{{$dish->dish_id}}--}}">
                                    <i class="fas fa-edit" title="Click to Edit"></i>
                                </a>
                                <a class="btn btn-outline-danger mt-1" href="{{--{{ route('delete_dish', ['dish_id'=>$dish->dish_id]) }}--}}">
                                    <i class="fas fa-trash" title="Click to delete"></i>
                                </a>

                            </td>
                        </tr>
                        {{-- =============== --}}

                        {{--                    <div class="modal fade" id="edit{{$dish->dish_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                        {{--                        <div class="modal-dialog" role="document">--}}
                        {{--                            <div class="modal-content">--}}
                        {{--                                <div class="modal-header">--}}
                        {{--                                    <h5 class="modal-title">Update Dish</h5>--}}
                        {{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--                                        <span aria-hidden="true">&times;</span>--}}
                        {{--                                    </button>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="modal-body">--}}
                        {{--                                    <form action="{{ route('update_dish') }}" method="post" enctype="multipart/form-data">--}}
                        {{--                                        @csrf--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Name</label>--}}
                        {{--                                            <input type="text" class="form-control" name="dish_name" value="{{$dish->dish_name}}">--}}
                        {{--                                            <input type="hidden" class="form-control" name="dish_id" value="{{$dish->dish_id}}">--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Previous Category</label>--}}
                        {{--                                            <input type="text" class="form-control" name="dish_name" value="{{$dish->category_name}}">--}}
                        {{--                                            <label>Category</label>--}}
                        {{--                                            <select name="category_id" class="form-control">--}}
                        {{--                                                <option value="">----Select Category----</option>--}}
                        {{--                                                @foreach($categories as $cate)--}}
                        {{--                                                    <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>--}}
                        {{--                                                @endforeach--}}
                        {{--                                            </select>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Details</label>--}}
                        {{--                                            <textarea type="text" name="dish_detail" class="form-control" rows="5">{{ $dish->dish_detail }}</textarea>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Previous Image</label>--}}
                        {{--                                            <img src="{{ asset($dish->dish_image) }}" style="height: 150px; width: 150px; border-radius: 50%">--}}
                        {{--                                            <input type="file" name="dish_image" class="form-control" accept="image/*">--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="card">--}}
                        {{--                                            <div class="card-header">Dish Attributes</div>--}}
                        {{--                                            <div class="card-body">--}}
                        {{--                                                <div class="form-group">--}}
                        {{--                                                    <div class="row">--}}

                        {{--                                                        <div class="col-md-6">--}}
                        {{--                                                            <input type="text" class="form-control" name="full_price" value="{{$dish->full_price}}" placeholder="Full Price">--}}
                        {{--                                                        </div>--}}
                        {{--                                                        <div class="col-md-6">--}}
                        {{--                                                            <input type="text" class="form-control" name="half_price" value="{{$dish->half_price}}" placeholder="Half Price">--}}
                        {{--                                                        </div>--}}
                        {{--                                                    </div>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="form-group">--}}
                        {{--                                    <input type="submit" class="form-control" name="btn" class="btn btn-outline-primary btn-block" value="Update">--}}
                        {{--                                </div>--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{-- =============== --}}
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

        <div class="card my-5">
            <div class="card-header">
                <h1 class="text-center text-muted">Payment Info</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered">

                    <tr>
                        <th>Name</th>
                        <td>lol</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>lol</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>lol</td>
                    </tr>
                    <tbody>
                    @php($i = 1)
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>
                                {{ $order->name }}
                            </td>
                            <td>{{ $order->order_total }}</td>
                            <td>{{ $order->order_status }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->payment_type }}</td>
                            <td>{{ $order->payment_status }}</td>
                            {{--                        <td><img src="{{ asset($dish->dish_image) }}" height="25" width="68" class="img-fluid img-thumbnail" alt="Any alt text"></td>--}}

                            <td>

                                {{--                            @if($dish->dish_status==1)--}}

                                <a class="btn btn-outline-success" href="{{ route('view_order', ['order_id'=>$dish->dish_id]) }}">
                                    <i class="fas fa-fa-search" title="View Order Details"></i>
                                </a>
                                {{--                            @else--}}
                                <a class="btn btn-outline-info" href="{{--{{ route('dish_active', ['dish_id'=>$dish->dish_id]) }}--}}">
                                    <i class="fas fa-search-plus" title="View Invoice"></i>
                                </a>
                                <a class="btn btn-outline-primary" href="{{--{{ route('dish_active', ['dish_id'=>$dish->dish_id]) }}--}}">
                                    <i class="fas fa-arrow-circle-down" title="Download Invoice"></i>
                                </a>
                                {{--                            @endif--}}
                                <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{--{{$dish->dish_id}}--}}">
                                    <i class="fas fa-edit" title="Click to Edit"></i>
                                </a>
                                <a class="btn btn-outline-danger mt-1" href="{{--{{ route('delete_dish', ['dish_id'=>$dish->dish_id]) }}--}}">
                                    <i class="fas fa-trash" title="Click to delete"></i>
                                </a>

                            </td>
                        </tr>
                        {{-- =============== --}}

                        {{--                    <div class="modal fade" id="edit{{$dish->dish_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                        {{--                        <div class="modal-dialog" role="document">--}}
                        {{--                            <div class="modal-content">--}}
                        {{--                                <div class="modal-header">--}}
                        {{--                                    <h5 class="modal-title">Update Dish</h5>--}}
                        {{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--                                        <span aria-hidden="true">&times;</span>--}}
                        {{--                                    </button>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="modal-body">--}}
                        {{--                                    <form action="{{ route('update_dish') }}" method="post" enctype="multipart/form-data">--}}
                        {{--                                        @csrf--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Name</label>--}}
                        {{--                                            <input type="text" class="form-control" name="dish_name" value="{{$dish->dish_name}}">--}}
                        {{--                                            <input type="hidden" class="form-control" name="dish_id" value="{{$dish->dish_id}}">--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Previous Category</label>--}}
                        {{--                                            <input type="text" class="form-control" name="dish_name" value="{{$dish->category_name}}">--}}
                        {{--                                            <label>Category</label>--}}
                        {{--                                            <select name="category_id" class="form-control">--}}
                        {{--                                                <option value="">----Select Category----</option>--}}
                        {{--                                                @foreach($categories as $cate)--}}
                        {{--                                                    <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>--}}
                        {{--                                                @endforeach--}}
                        {{--                                            </select>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Details</label>--}}
                        {{--                                            <textarea type="text" name="dish_detail" class="form-control" rows="5">{{ $dish->dish_detail }}</textarea>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label>Previous Image</label>--}}
                        {{--                                            <img src="{{ asset($dish->dish_image) }}" style="height: 150px; width: 150px; border-radius: 50%">--}}
                        {{--                                            <input type="file" name="dish_image" class="form-control" accept="image/*">--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="card">--}}
                        {{--                                            <div class="card-header">Dish Attributes</div>--}}
                        {{--                                            <div class="card-body">--}}
                        {{--                                                <div class="form-group">--}}
                        {{--                                                    <div class="row">--}}

                        {{--                                                        <div class="col-md-6">--}}
                        {{--                                                            <input type="text" class="form-control" name="full_price" value="{{$dish->full_price}}" placeholder="Full Price">--}}
                        {{--                                                        </div>--}}
                        {{--                                                        <div class="col-md-6">--}}
                        {{--                                                            <input type="text" class="form-control" name="half_price" value="{{$dish->half_price}}" placeholder="Half Price">--}}
                        {{--                                                        </div>--}}
                        {{--                                                    </div>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="form-group">--}}
                        {{--                                    <input type="submit" class="form-control" name="btn" class="btn btn-outline-primary btn-block" value="Update">--}}
                        {{--                                </div>--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{-- =============== --}}
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

@endsection
