@extends('layouts.dashboardnav')

@section('content')
<form  action="{{ route('Categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
   
   
        
        <div class="mb-3 row">
            <label for="example-text-input" class="col-sm-2 col-form-label text-end">Categorie Name</label>
            <div class="col-sm-10">
                <input class="form-control  @error('name') is-invalid @enderror" name="name" type="text" placeholder="Categorie Name" value="{{ old('name') }}" required>
            </div>
        </div>
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        
       
        <div class="mb-3 row">
            <label for="example-text-input" class="col-sm-2 col-form-label text-end">Categories icon</label>
            <div class="col-sm-10">
                <input class="form-control  @error('icon') is-invalid @enderror" name="icon" type="text" placeholder="Categorie icon" value="{{ old('icon') }}" required>
            </div>
        </div>
        @error('icon')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        
        <div class="row">
            <div class="col-sm-12 text-end">
                <button type="submit" class="btn btn-primary px-4">Create Categorie</button>
            </div>
        </div>
</form>


   
   

@endsection