@extends('layouts.user')                    

@section('content')
 <div class="container">
                    <div class="row justify-content-end fullscreen align-items-center">
                        <div class="col-lg-6 col-md-12 banner-left">
                                <h1 class="text-white">
                                    Hai Masyarakat Suo-Suo, <br>
                                    konsultasikan penyakit anda segera...                       
                                </h1>
                                <p class="mx-auto text-white  mt-20 mb-40">
                                   Selalu patuhi protokol kesehatan dan tetaplah waspada, karna covid-19 bisa menyerang siapa saja.
                                </p>
                              
                        </div>
                        <div class="col-lg-6 col-md-12 no-padding banner-right">
                            <img style="height: 570px; width: 700px; margin-bottom: 30px;" src="{{asset('/assets/templateuser/img/covid.png')}}" alt="">
                        </div>
                    </div>
                </div>
@stop