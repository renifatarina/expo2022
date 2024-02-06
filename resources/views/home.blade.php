@extends('template.base')

@section('content')
<div class="home">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 button">
                <div class="row text-center">
                    <div class="col-md-3 pb-3"><a class="btn btn-primary" href="/ukm" role="button">UKM</a></div>
                    <div class="col-md-3 pb-3"><a class="btn btn-primary" href="/bso" role="button">BSO</a></div>
                    <div class="col-md-3 pb-3"><a class="btn btn-primary" href="/himpunan" role="button">Himpunan</a></div>
                    <div class="col-md-3 pb-3"><a class="btn btn-primary" href="/komunitas" role="button">Komunitas</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
