@extends('layouts.admin')
{{-- section cái này dùng để đổ dữ liệu sang cái @yield('ten ban dat') mà thư
mục bạn đặt --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Edit/Update Category</h1>
        </div>
        <div class="card-body">
          <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input value="{{$category->name}}" type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input value="{{$category->slug}}" type="text" class="form-control" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                   <input value="{{$category->description}}" name="description" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" {{$category->status == "1" ? 'checked' : ''}} name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" {{$category->popular == "1" ? 'checked' : ''}} name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta title</label>
                    <input type="text" value="{{$category->meta_title}}" class="form-control" name="meta_title">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords"  id=""  rows="3" class="form-control">
                        {{$category->meta_keywords}}
                    </textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_descrip"  id=""  rows="3" class="form-control">
                        {{$category->meta_descrip}}
                    </textarea>
                </div>
                @if($category->image)
                  <img src="{{asset('assets/uploads/category/'.$category->image)}}" alt="Category_image">
                @endif
                <div class="col-md-12">
                    <input type="file" value="{{$category->image}}" name="image" class="form-control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
               </div>
          </form>
        </div>
    </div>
@endsection