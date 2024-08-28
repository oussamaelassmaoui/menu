@extends('layouts.dashboardnav')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('products.update', $product->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">products</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-end">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control  @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ old('name', $product->name) }}">
                            </div>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-end">slug</label>
                            <div class="col-sm-10">
                                <input class="form-control  @error('slug') is-invalid @enderror" type="text"
                                    name="slug" value="{{ old('slug', $product->slug) }}">
                            </div>
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-end">photo</label>
                            <div class="col-sm-10">
                                <div class="card-body pt-0">
                                    <div class="d-grid">
                                        <p class="text-muted">Upload your blog image here, Please click "Upload Image"
                                            Button.</p>
                                        <div
                                            class="preview-box d-block justify-content-center rounded  border-dashed border-theme-color overflow-hidden p-3">
                                        </div>
                                        <input type="file" id="input-file" name="photo" accept="image/*" 
                                            onchange={handleChange()} hidden />
                                        <label class="btn-upload btn btn-primary mt-3" for="input-file">Upload Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!--end col-->


                    <div class="col-lg-6">
                        {{-- <div class="mb-3 row">
                        <label for="example-text-input" class="col-sm-2 col-form-label text-end">Price</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="Price" type="text" value="" >
                        </div>
                    </div> --}} 
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label text-end">Categorie</label>
                            <div class="col-sm-10">
                                <select class="form-select @error('Categorie_id') is-invalid @enderror" name="Categorie_id" id="Categorie_id"
                                    aria-label="Default select example">
                                    @foreach ($Categories as $Categorie)
                                        <option value="{{ $Categorie->id }}">{{ $Categorie->name }}</option>
                                    @endforeach
                                </select>
                                @error('Categorie_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label text-end">Price</label>
                            <div class="col-sm-10">
                                <div class="card-body pt-0">
                                    <div class="input-group qty-icons w-50">
                                        <a class="btn btn-primary"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-</a>
                                        <input type="number" class="form-control" min="0" name="Price"
                                            value="{{ old('Price', $product->Price) }}" style="">
                                        <a class="btn btn-primary"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="row">
                        <div class="col-sm-12 text-end">
                            <button type="submit" class="btn btn-primary px-4">Edit product</button>
                        </div>
                    </div>
                </div> <!--end row-->
            </div><!--end card-body-->
        </div>
    </form>
    <br>
    <br>
   
@endsection
