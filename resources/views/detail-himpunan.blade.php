@extends('template.master-detail')

@section('custom')
<div class="container">
    <div class="back">
        <a href="/himpunan" class="d-flex justify-content-start"><i class="fa-solid fa-caret-left fa-3x"></i> <p>Back</p></a>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="image text-center">
                <img src="{{asset('img-upload/'.$himpunan->picture)}}" alt="" width="">
            </div>
            <div class="row">
                <div class="col-md-7 loc1">
                    <h5 class="text-center">Basement {{$himpunan->basement}}</h5>
                </div>
                <div class="col-md-4 loc2">
                    <h5 class="text-center">No {{$himpunan->loc}}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4 class="title">{{$himpunan->title}}</h4>
            <p class="desc">{{$himpunan->desc}}</p>
        </div>
    </div>
    
</div>

@endsection
