@extends('layouts.default')
@section('title', 'Original sheet music from me to you')
@section('content')

    <div class="jumbotron jumbotron-fluid jumbotron-header m-b-0">
        <div class="container">
            <div class="centered">
                <h1 class="display-2 text-center">Fluid jumbotron</h1>
                <p class="lead text-center">This is a modified jumbotron that occupies the entire horizontal space of it's parent.</p>
            </div>
        </div>
    </div>

    <section id="featured" class="bg-white p-y-lg">
        <h1 class="text-center m-b-lg">Featured Sheets</h1>
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
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

                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
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

                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
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

                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
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

    <div class="separator bg-info text-center p-y-lg">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Newsletter</h1>
                <p class="lead">Subscribe to be notified when we release new sheets!</p>

                <form action="/newsletter/subscribe">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
                            <div class="row">
                                <div class="col-xs-12 col-md-8">
                                    <label class="sr-only" for="newsletter-email">Email address</label>
                                    <input type="text" class="form-control" placeholder="Email address" name="email">
                                </div>
                                <button type="submit" class="btn btn-primary col-xs-12 col-md-4">Sign up!</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section id="reviews" class="bg-white p-y-lg">
        <div class="container">
            <h1 class="section-title text-center m-b-lg">What people are saying</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="http://placehold.it/150x150" alt="Profile pic" class="img-circle image-responsive">
                        </div>
                        <div class="col-md-8">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam assumenda
                                cumque earum est, exercitationem, facilis minima molestiae nam, placeat ratione suscipit ullam. Iusto, veritatis!
                                <footer><cite>Jane Doe</cite></footer>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="http://placehold.it/150x150" alt="Profile pic" class="img-circle image-responsive">
                        </div>
                        <div class="col-md-8">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam assumenda
                                cumque earum est, exercitationem, facilis minima molestiae nam, placeat ratione suscipit ullam. Iusto, veritatis!
                                <footer><cite>Jane Doe</cite></footer>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection