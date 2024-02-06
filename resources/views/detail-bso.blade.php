@extends('template.master-detail')

@section('custom')
<div class="container">
    <div class="back">
        <a href="/bso" class="d-flex justify-content-start"><i class="fa-solid fa-caret-left fa-3x"></i> <p>Back</p></a>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="image text-center">
                <img src="{{asset('img-upload/'.$bso->picture)}}" alt="" width="">
            </div>
            <div class="row">
                <div class="col-md-7 loc1">
                    <h5 class="text-center">Basement {{$bso->basement}}</h5>
                </div>
                <div class="col-md-4 loc2">
                    <h5 class="text-center">No {{$bso->loc}}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4 class="title">{{$bso->title}}</h4>
            <p class="desc">{{$bso->desc}}</p>
        </div>
    </div>
    
</div>

@endsection
