@extends('Front-End.layouts.app')
@section('content')
     <!--section displaying featured image for contacts page-->
    <section class="blog-featured w-100">
        <div class="container text-center text-light">
            <h4>Blog</h4>
            <small class="bg-dark"><b>Home / Blog</b></small>
            <hr>
        </div>

    </section>

    <!--        </header>-->
    <br><br>
    <section class="blog-section text-light">
        <div class="container">
            <h3 class="text-left">News Section</h3><hr class="bg-light">
            <div class="row">
                <div class="col-xs-12 col-lg-9 text-light">
                    <p>No results found</p>
                </div>
                <div class="col-xs-12 col-lg-3">
                     
                    <a href="#" class="btn btn-block btn-dark">
                        <!--j tag carries font awesome to avoid the styling-->
                        <j class="fab fa-adobe"></j> Download Product
                    </a>
                    <div class="container bg-dark text-light text-center mt-3">
                        <h6>Are you interested?</h6>
                        <hr class="bg-light">
                        <small class="">Request a qoute for app development, and get a huge discount.</small>
                        <a href="#" class="btn btn-sm btn-success text-light m-2 animate">REQUEST A QUOTE</a>
                    </div>

                    <div class="container text-light mt-3 lightgrey sitesearch">
                        <h6>
                            <j class="fas fa-search m-2"></j>Search Site
                        </h6>
                        <hr class="bg-light">
                        <input type="text" placeholder="Enter search query" class="m-3 text-center">
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
    
@endsection