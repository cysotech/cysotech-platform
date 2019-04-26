@extends('Front-End.layouts.app')
@section('content')
    
    <!--section displaying featured image for services page-->
    <section class="services-featured w-100">
        <div class="container text-center text-light">
            <h4>Services</h4>
            <small>Home / Services</small>
        </div>

    </section>

    <section class="" id="services">
        <div class="container">
            <!--row-1-->
            <div class="row services-row text-center">
                <!--col-1-->
                <div class="col-xs-12 col-md services-col">
                    <a href="#" class="text-center">
                        <div class="social-media mx-auto">

                        </div>
                    </a>
                    <h5>Social Networks</h5>
                    <p class="text-muted">Social networking is the use of internet-based social media programs to make connections with friends, family, classmates, customers and clients….</p>
                    <div>
                        <small><a href="#"> Read More > </a></small>
                    </div>
                </div>
                <!--col-2-->
                <div class="col-xs-12 col-md services-col">
                    <a href="#">
                        <div class="marketing mx-auto">

                        </div>
                    </a>
                    <h5>Inbound Marketing</h5>
                    <p class="text-muted">What Is Inbound Marketing? Inbound marketing is a marketing methodology that is designed to draw visitors and potential customers in…</p>
                    <div>
                        <small><a href="#"> Read More > </a></small>
                    </div>
                </div>
                <!--col-3-->
                <div class="col-xs-12 col-md">
                    <a href="#">
                        <div class="API mx-auto">

                        </div>
                    </a>
                    <h5>AI in API Development</h5>
                    <p class="text-muted">When thinking about smart apps or artificial intelligence (AI) today, Siri, Cortana, or Assistant probably come to mind. Hundreds of…</p>
                    <div>
                        <small><a href="#"> Read More > </a></small>
                    </div>
                </div>
                <!--col-4-->
                <div class="col-xs-12 col-md d-none d-xl-block" id="animate">
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
            <!--row-2-->
            <div class="row services-row text-center">
                <!--col-1-->
                <div class="col-xs-12 col-md services-col">
                    <a href="#">
                        <div class="app mx-auto">

                        </div>
                    </a>
                    <h5>App Development</h5>
                    <p class="text-muted">What is App Development? App Development refers to the creation of computer applications for use on mobile devices such as…</p>
                    <div>
                        <small><a href="#"> Read More > </a></small>
                    </div>
                </div>
                <!--col-2-->
                <div class="col-xs-12 col-md services-col">
                    <a href="#">
                        <div class="wireframing mx-auto">

                        </div>
                    </a>
                    <h5>UI/UX Wireframing</h5>
                    <p class="text-muted">Wireframes may be utilized by different disciplines. Developers use wireframes to get a more tangible grasp of the site’s functionality…</p>
                    <div>
                        <small><a href="#"> Read More > </a></small>
                    </div>
                </div>
                <!--col-3-->
                <div class="col-xs-12 col-md">
                    <a href="#">
                        <div class="maintenance mx-auto">

                        </div>
                    </a>
                    <h5>Website Maintenance</h5>
                    <p class="text-muted">Owning a website or blog has it’s responsibilities. You can’t just upload it and forget it. Regular website maintenance is…</p>
                    <div>
                        <small><a href="#"> Read More > </a></small>
                    </div>
                </div>
                <!--col-4-->
                <div class="col-xs-12 col-md d-none d-xl-block"></div>
            </div>

            <!--row-3-->
            <div class="row services-row text-center">
                <!--col-1-->
                <div class="col-xs-12 col-md services-col">
                    <a href="#">
                        <div class="SEO mx-auto">

                        </div>
                    </a>
                    <h5>SEO</h5>
                    <p class="text-muted">Search engine optimization (SEO) is the process of affecting the online visibility of a website or a web page in…</p>
                    <div>
                        <small><a href="#"> Read More > </a></small>
                    </div>
                </div>
                <!--col-2-->
                <div class="col-xs-12 col-md services-col">
                    <a href="#">
                        <div class="data mx-auto">

                        </div>
                    </a>
                    <h5>Data Mining</h5>
                    <p class="text-muted">The process of digging through data to discover hidden connections and predict future trends has a long history. Sometimes referred…</p>
                    <div>
                        <small><a href="#"> Read More > </a></small>
                    </div>
                </div>
                <!--col-3-->
                <div class="col-xs-12 col-md">
                    <a href="#">
                        <div class="web-dev mx-auto">

                        </div>
                    </a>
                    <h5>Website Development</h5>
                    <p class="text-muted">Web programming, also known as web development, is the creation of dynamic web applications. Examples of web applications are social…</p>
                    <div>
                        <small><a href="#"> Read More > </a></small>
                    </div>
                </div>
                <!--col-4-->
                <div class="col-xs-12 col-md d-none d-xl-block">

                </div>
            </div>

            <!--last row invisible in xl screens-->
            <div class="row d-xl-none mb-5">
                <div class="col">

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

                    <div class="p-2 text-light text-center mt-3 lightgrey sitesearch">
                        <h6>
                            <j class="fas fa-search m-2"></j>Search Site
                        </h6>
                        <hr class="bg-light">
                        <input type="text" placeholder="Enter search query" class="text-center w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection