@extends('layouts.default')
@section('title', 'Original sheet music from me to you')
@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="centered">
                <h1 class="display-2 text-center">Fluid jumbotron</h1>
                <p class="lead text-center">This is a modified jumbotron that occupies the entire horizontal space of it's parent.</p>
            </div>
        </div>
    </div>

    <section id="featured" class="p-y-md">
        <h1 class="text-center m-b-md">Featured Sheets</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title text-center">Moonlight Sonata</h4>
                        </div>
                        <img src="http://placehold.it/400x200" alt="Card image">
                        <div class="card-block clearfix">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="card-link h3 text-danger"><i class="fa fa-heart-o"></i></a>
                                <a href="#" class="card-link h3 text-success"><i class="fa fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title text-center">Cannon in D</h4>
                        </div>
                        <img src="http://placehold.it/400x200" alt="Card image">
                        <div class="card-block clearfix">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="card-link h3 text-danger"><i class="fa fa-heart-o"></i></a>
                                <a href="#" class="card-link h3 text-success"><i class="fa fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title text-center">Fur Elis</h4>
                        </div>
                        <img src="http://placehold.it/400x200" alt="Card image">
                        <div class="card-block clearfix">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="card-link h3 text-danger"><i class="fa fa-heart-o"></i></a>
                                <a href="#" class="card-link h3 text-success"><i class="fa fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center m-t-md">
            <a href="#" class="btn btn-lg btn-primary-outline">Shop Now</a>
        </div>
    </section>

    <section id="reviews">
        <div class="col-sm-12 col-md-4">
            <div class="review">
                <div class="meta">
                    <div class="image-block">

                    </div>
                    <div class="info-block">

                    </div>
                </div>
                <div class="content">

                </div>
            </div>
        </div>
    </section>

@endsection