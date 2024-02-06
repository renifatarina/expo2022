@extends('template.master-bso')

@section('custom')
<div class="container">
    <h4 class="text-center pb-3">BSO</h4>
    <div class="row">
        <div class="col-lg-3 col-sm-6"></div>
        @foreach ($bsos as $key=>$bso)
        <div class="col-lg-2 col-sm-6">
            <a href="#" data-bs-toggle="modal" data-bs-target="#{{'ModalShow'.$key}}">
                <div class="item">
                    <img src="{{asset('img-upload/'.$bso->picture)}}" alt="">
                    <div class="text-center">
                        <h4>{{$bso->title}}</h4>
                    </div>
                </div>
                <div class="modal fade" id="{{'ModalShow'.$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$bso->title}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('img-upload/'.$bso->picture)}}" alt="">
                                <p class="pt-2 text-center">
                                    {{ Str::limit($bso->desc, 250) }}
                                </p>

                            </div>
                            <div class="modal-footer">
                                <a href="/bso/{{$bso->id}}"><button type="button" class="btn btn-primary">See more</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        @endforeach
    </div>
</div>

@endsection
