@extends('layouts.admin')
{{-- section cái này dùng để đổ dữ liệu sang cái @yield('ten ban dat') mà thư
mục bạn đặt --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Product kakaka</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Selling price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->cate_id }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->description }}
                            </td>
                            <td>
                                <img width="100" height="100" src="{{ asset('assets/uploads/products/' . $item->image) }}"
                                    alt="Image here">
                            </td>
                            <td>
                                <a href="{{ url('edit-product/' . $item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-product/' . $item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
