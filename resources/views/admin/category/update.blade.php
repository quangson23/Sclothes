{{-- extends: Chỉ định layout được sử dụng --}}
@extends('layout.admin.master')

{{-- section: định nghĩa nội dung của section --}}



@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Sửa danh mục</h4>
                <div class="card-body">
                    <form action="{{ route('category.update', $categorieS->id) }}" method="POST" enctype="multipart/form-data">
                        {{-- 1 cơ chế bảo mật của laravel --}}
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" name="categories_name"
                                value="{{ $categorieS->categories_name }}" placeholder="Nhập tên sản phẩm">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả:</label>
                            <textarea class="form-control" rows="3" name="categories_description"placeholder="Nhập mô tả sản phẩm">{{ $categorieS->categories_description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Hình ảnh:</label>
                            <input type="file" class="form-control" name="image_path">
                        </div>

                        <div class="mb-3">
                            <label for="categories_status" class="form-label">Trạng thái:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="categories_status" id="gridRadios1"
                                    value="1" {{ (old('categories_status', $categorieS->categories_status) == 1) ? 'checked' : '' }}>
                                <label class="form-check-label text-success" for="gridRadios1">Hiển thị</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="categories_status" id="gridRadios2"
                                    value="0" {{ (old('categories_status', $categorieS->categories_status) == 0) ? 'checked' : '' }}>
                                <label class="form-check-label text-danger" for="gridRadios2">Ẩn</label>
                            </div>
                        </div>






                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Sửa sp</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
