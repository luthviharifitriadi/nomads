@extends('layouts.app')
@section('title')
    Paket Travel
@endsection

@section('content')
    <main>
        <section class="section-popular-content mt-5 mb-4" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">

                    <div class="col-sm-6 col-md-10 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image : url('frontend/images/travel-1.jpg')">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-country">Derata, Bali</div>
                               <div class="travel-button mt-auto">
                            <a href="details.html" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                        </div>
                     
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image : url('frontend/images/travel-2.jpg')">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-country">Bromo, Malang</div>
                               <div class="travel-button mt-auto">
                            <a href="details.html" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                        </div>
                     
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image : url('frontend/images/travel-3.jpg')">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-country">Nusa Peninda</div>
                               <div class="travel-button mt-auto">
                            <a href="details.html" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                        </div>
                     
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image : url('frontend/images/travel-4.jpg')">
                            <div class="travel-country">MIDDLE EAST</div>
                            <div class="travel-country">Dubai</div>
                               <div class="travel-button mt-auto">
                            <a href="details.html" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
            
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image : url('frontend/images/travel-4.jpg')">
                            <div class="travel-country">MIDDLE EAST</div>
                            <div class="travel-country">Dubai</div>
                               <div class="travel-button mt-auto">
                            <a href="details.html" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>

            </div> 
        </section>
    </main>

@endsection
