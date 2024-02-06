@extends('admin.master')

@push('link_summer')
    <!-- Summernote -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@section('title')
    Edit UKM
@endsection

@section('content')

    <form action="/renicantik/ukm/{{$ukm->id}}" method="POST"  enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="UKM name" value="{{$ukm->title}}">
            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <textarea name="desc" id="summernote" class="form-control" cols="30" rows="10">{{$ukm->desc}}</textarea>
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
            <textarea name="basement" class="form-control" cols="30" rows="10">{{$ukm->basement}}</textarea>
            @error('basement')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="loc">Location</label>
            <textarea name="loc" id="summernote" class="form-control" cols="30" rows="10">{{$ukm->loc}}</textarea>
            @error('loc')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>
        <button type="submit" class="btn btn-primary">Edit UKM</button>
        <a href="/renicantik/list-ukm" class="btn btn-outline-primary">Back</a>
    </form>
@endsection

@push('summernote')
    <!-- Summernote -->
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  
@endpush