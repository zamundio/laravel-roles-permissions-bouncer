@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<div class="col-md-12">
    <div class="row ">
        <div class="col-xl-2 col-lg-2">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Total Red</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-4">
                            <h2 class="d-flex align-items-center mb-0">
                                {{ $estructura }}
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-pills"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Linea Metabolica</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{ $uc }}
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-2">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-heart"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Linea Cardio </h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{ $um }}
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-thermometer"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Linea Resp-Dolor </h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{ $urd }}
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2">
            <div class="card l-bg-teal-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-hospital"></i>"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Linea KAM </h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{ $kam }}
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
         <div class="col-xl-2 col-lg-2">
             <div class="card l-bg-yellow-dark">
                 <div class="card-statistic-3 p-4">
                     <div class="card-icon card-icon-large"><i class="fas fa-band-aid"></i>"></as></div>
                     <div class="mb-4">
                         <h5 class="card-title mb-0">Linea MCH</h5>
                     </div>
                     <div class="row align-items-center mb-2 d-flex">
                         <div class="col-8">
                             <h2 class="d-flex align-items-center mb-0">
                                 {{ $mch }}
                             </h2>
                         </div>

                     </div>

                 </div>
             </div>
         </div>
    </div>
</div>

@endsection
@section('carrousel')
<section id="gallery" class="wow flipInX">


    @foreach($galleries as $gallery)
        <div class="owl-carousel gallery-carousel">
            @foreach($gallery->photos as $photo)
                <a href="" class="venobox" data-gall="gallery-carousel"><img src="{{ $photo->getUrl() }}" alt="{{ $gallery->name }}" title="{{ $gallery->name }}"></a>
            @endforeach
        </div>
    @endforeach
</section>

@endsection


@section('scripts')
@parent

@endsection
