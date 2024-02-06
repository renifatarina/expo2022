@extends('admin.master')

@push('link_summer')
    <!-- Summernote -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@section('title')
    Add Komunitas
@endsection

@section('content')
    @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <form action="/renicantik/list-komunitas" method="POST"  enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"  placeholder="Komunitas name">
            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <textarea name="desc" class="form-control" cols="30" rows="10">{{ old('desc') }}</textarea>
            @error('desc')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="picture">Upload Picture</label><br>
            <input type="file" name="picture" id="picture">
            @error('picture')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="basement">Basement</label>
            <input type="text" class="form-control" name="basement" id="basement" value="{{ old('basement') }}"  placeholder="The number of basement">
            @error('basement')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="loc">Location</label>
            <input type="text" class="form-control" name="loc" id="loc" value="{{ old('loc') }}"  placeholder="Location number">
            @error('loc')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Add Komunitas</button>
        <a href="/renicantik/list-komunitas" class="btn btn-outline-primary">Back</a>
    </form>
@endsection
