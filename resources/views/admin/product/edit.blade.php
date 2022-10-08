@extends('layouts.admin')
{{-- section cái này dùng để đổ dữ liệu sang cái @yield('ten ban dat') mà thư
mục bạn đặt --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Edit Product</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id">
                            <option selected>{{$products->category->name}}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$products->name}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{$products->slug}}">
                     </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Small Description</label>
                        <input name="small_description" class="form-control" value="{{$products->small_description}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <input name="description" class="form-control" value="{{$products->description}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" name="original_price" class="form-control" value="{{$products->original_price}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label>
                        <input type="number" name="selling_price" class="form-control" value="{{$products->selling_price}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" name="tax" class="form-control" value="{{$products->tax}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" name="qty" class="form-control" value="{{$products->qty}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" {{$products->status == "1" ? 'checked' : ''}}>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending" {{$products->trending == "1" ? 'checked' : ''}}>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta title</label>
                        <textarea name="meta_title" id="" rows="3" class="form-control">{{$products->meta_title}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keyword" id="" rows="3" class="form-control">{{$products->meta_keyword}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta description</label>
                        <textarea name="meta_description" id="" rows="3" class="form-control">{{$products->meta_description}}</textarea>
                    </div>
                    @if($products->image)
                        <img src="{{ asset('assets/uploads/products/'.$products->image)}}" alt="">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control" value="{{$products->image}}}>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
