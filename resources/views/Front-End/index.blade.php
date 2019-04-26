@extends('Front-End.layouts.app')
@section('content')
    
    <div id="subHeader">

        <div class="text-center text-light vertical">
            <div class="h2">21st Century's Cyber Technology at your Fingertip</div> <br>
            <div class="h6">Simplify your projects and get your Business organized with the 21st Century's Advanced Technology to manage and build your projects.</div>
            <br>
            <hr class="bg-light w-50">
            <button class="btn btn-success mr-4">Developer Dashboard</button><button class="btn btn-primary">Client Section</button>
        </div>
    </div>
    <div class="text-muted text-center align-items-middle" id="small-text">
        <p class="vertical bg-light">Try Cysotech Advance Technology evolving into your projects <a href="login.html">Login</a> or <a href="">create a new one</a></p>
    </div>

    <!--        </header>-->
    <br><br>
    <section>
        <div class="container">
            <!--first row-->
            <div class="row">
                <!--col-1-->
                <div class="col-12 text-center">
                    <h4>Features You Will Love</h4>
                </div>
            </div> <br>
            <!--second row-->
            <div class="row">
                <!--col-1-->
                <div class="col-12 text-center text-muted">
                    <p>
                        Main features which are making Cysotech standing out of the crowd in IT related field are bringing absolutely new development features to the table.
                    </p>
                </div>
            </div>
            <br>
            <!--third row-->
            <div class="row mb-1 mx-auto">
                <!--col-1-->
                <div class="col-xs-12 col-md features mb-4">
                    <h6><i class="fas fa-user-clock"></i>Effective time tracking</h6>
                    <hr class="w-60 bg-muted">
                    <p class="text-muted text-center">
                        Manage and Track all your project with a our advance project management system feature.
                    </p>
                </div>
                <!--col-2-->
                <div class="col-xs-12 col-md features mb-4">
                    <h6><i class="fas fa-tasks"></i>Overall Management</h6>
                    <hr class="w-60 bg-muted">
                    <p class="text-muted text-center">
                        Use powerful and advance project system to take control of your projects, track, development and pay invoice.
                    </p>
                </div>
                <!--col-3-->
                <div class="col-xs-12 col-md features mb-4">
                    <h6><i class="fas fa-exclamation-triangle"></i>Risk Management</h6>
                    <hr class="w-60 bg-muted">
                    <p class="text-muted text-center">
                        Our system uses Advance risk management to minimize any potential problems that may impact a project’s timeline.
                    </p>
                </div>
            </div>
            <!--            <br>-->
            <!--fourth row-->
            <div class="row mx-auto">
                <!--col-1-->
                <div class="col-xs-12 col-md features mb-4">
                    <h6><i class="fas fa-file-invoice-dollar"></i>Easy Invoicing</h6>
                    <hr class="w-60 bg-muted">
                    <p class="text-muted text-center">
                        Easily Getting your Invoice conveniently and making payment at your peace.
                    </p>
                </div>
                <!--col-2-->
                <div class="col-xs-12 col-md features mb-4">
                    <h6><i class="fas fa-search-minus"></i>Minimizing Expenses</h6>
                    <hr class="w-60 bg-muted">
                    <p class="text-muted text-center">
                        Easily log all expense in one place and follow up on how your project is been developed.
                    </p>
                </div>
                <!--col-3-->
                <div class="col-xs-12 col-md features mb-4">
                    <h6><i class="fas fa-calendar-check"></i>Scheduling Deadlines</h6>
                    <hr class="w-60 bg-muted">
                    <p class="text-muted text-center">
                        Add your deadlines and watch how your projects takes shape, task by task.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <br>
    <br>
    <!--horizontal line-->
    <hr class="w-100 bg-muted">
    <br>
    <br>
    <br>

    <section>
        <div class="container">
            <!--row-1-->
            <div class="row text-center">
                <!--col-1-->
                <div class="col-12">
                    <h4>Boost your business and share important contact to your projects.
                    </h4>
                </div>

            </div>
        </div>

        <div class="w-100 text-center text-light" id="contacts">
            <p><b>All project party contacts in one place. Never miss any update or loose project partner's contact.</b>
            </p>
        </div>
        <div class="w-100" id="partners">
            <div class="container text-center">
                <div class="row">
                    <div class="col-xs-12 col-md vertical"><img src="img/pp.png" class="partnerImg" alt="paypal-logo"></div>
                    <div class="col-xs-12 col-md vertical"><img src="img/invision.png" class="partnerImg" alt="invision-logo"></div>
                    <div class="col-xs-12 col-md vertical"><img src="img/sass_logo.png" class="partnerImg" alt="sass-logo"></div>
                    <div class="col-xs-12 col-md vertical"><img src="img/nodejs.png" class="partnerImg" alt="node-logo"></div>
                    <div class="col-xs-12 col-md vertical"><img src="img/npm.png" class="partnerImg" alt="npm-logo"></div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>


    <section>
        <div class="container">
            <div class="text-center">
                <h4>Professional Project Headquarters</h4>
                <p>In Cysotech's platform you can manage all standard company workflows like creating projects contacts, scheduling deadlines, managing tasks and milestones and so on.</p>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container d-none d-md-block" id="feature-circle">
            <div class="row">
                <div class="col text-center">
                    <h5 class="text-light">Projects</h5><small class="text-light">Projects
                        Never miss a deadline</small>
                    <h4 class="animate text-light">&dArr;</h4>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h5 class="text-light">People</h5><small class="text-light">Add project partners</small>
                    <h4 class="animate text-light">&dArr;</h4>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h5 class="text-light">Quote</h5><small class="text-light">Get Quotes for Projects</small>
                    <h4 class="animate text-light">&dArr;</h4>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h5 class="text-light">Tasks</h5><small class="text-light">Manage Assignment of task</small>
                    <h4 class="animate text-light">&dArr;</h4>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h5 class="text-light">Workflow</h5><small class="text-light">Arrange your work</small>
                    <h4 class="animate text-light">&dArr;</h4>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h5 class="text-light">Structure</h5><small class="text-light">manage updates and tasks</small>
                    <h4 class="animate text-light">&dArr;</h4>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h5 class="text-light">Expenses</h5><small class="text-light">Track your expenses</small>
                    <h4 class="animate text-light">&dArr;</h4>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h5 class="text-light">Invoices</h5><small class="text-light">Ease pay</small>
                </div>
            </div>
        </div> <br>
        <hr class="w-100 bg-muted">

    </section><br><br>

    <section>

        <div class="container">
            <!--row-1-->
            <div class="row">
                <div class="col text-center">
                    <h4>Because Code Quality Matters</h4>
                    <p class="text-muted">Everybody knows that design is important but for long term business you need to have reliable, flexible and stable codebase.</p>
                </div>
            </div><br><br>
            <!--row-2-->
            <div class="row mb-2 mx-auto">
                <!--col-1-->
                <div class="col-xs-12 col-md mb-4 greybckground p-sm-2">
                    <img src="img/navigation.png" style="height: 70px; width: 70px;" alt="" class="float-left mr-2 p-2"><span class="text-left">
                        <h6 class="mt-2">Updated Actions &amp; Filters</h6>
                        <p class="text-muted">Building new features upon existing codebase.</p>
                    </span>
                    <!--<span class="labelBubbleLeft float-right text-light text-center h4">01</span>-->

                </div>
                <!--col-2-->
                <div class="col-xs-12 col-md mb-4 p-sm-2 greybckground">
                    <img src="img/navigation.png" style="height: 70px; width: 70px;" alt="" class="float-left mr-2 p-2"><span class="text-left">
                        <h6 class="mt-2">Annotations</h6>
                        <p class="text-muted">New way to mark actions &amp; filter functions</p>
                    </span>
                </div>
            </div>
            <!--row-3-->
            <div class="row mb-2 mx-auto">
                <!--col-1-->
                <div class="col-xs-12 col-md mb-4 p-sm-2 greybckground">
                    <img src="img/navigation.png" style="height: 70px; width: 70px;" alt="" class="float-left mr-2 p-2"><span class="text-left">
                        <h6 class="mt-2">Advanced Documentation</h6>
                        <p class="text-muted">All important projects parts are well documented.</p>
                    </span>

                </div>
                <!--col-2-->
                <div class="col-xs-12 col-md mb-4 p-sm-2 greybckground">
                    <img src="img/navigation.png" style="height: 70px; width: 70px;" alt="" class="float-left mr-2 p-2"><span class="text-left">
                        <h6 class="mt-2">Advance Security</h6>
                        <p class="text-muted">Don't let hacker mess with projects.</p>
                    </span>

                </div>
            </div>
            <!--row-4-->
            <div class="row mb-2 mx-auto">
                <!--col-1-->
                <div class="col-xs-12 col-md mb-4 p-sm-2 greybckground">
                    <img src="img/navigation.png" style="height: 70px; width: 70px;" alt="" class="float-left mr-2 p-2"><span class="text-left">
                        <h6 class="mt-2">Smart Architecture</h6>
                        <p class="text-muted">Smart and well layed Architecture for project development.</p>
                    </span>

                </div>
                <!--col-2-->
                <div class="col-xs-12 col-md mb-4 p-sm-2 greybckground">
                    <img src="img/navigation.png" style="height: 70px; width: 70px;" alt="" class="float-left mr-2 p-2"><span class="text-left">
                        <h6 class="mt-2">Standard Linter</h6>
                        <p class="text-muted">Code passes standard programming development.</p>
                    </span>

                </div>
            </div>
            <!--row-5-->
            <div class="row mb-2 mx-auto">
                <!--col-1-->
                <div class="col-xs-12 col-md mb-4 p-sm-2 greybckground">
                    <img src="img/navigation.png" style="height: 70px; width: 70px;" alt="" class="float-left mr-2 p-2"><span class="text-left">
                        <h6 class="mt-2">Swift Support</h6>
                        <p class="text-muted">Swift Support for changing the functionality per project.</p>
                    </span>

                </div>
                <!--col-2-->
                <div class="col-xs-12 col-md mb-4 p-sm-2 greybckground">
                    <img src="img/navigation.png" style="height: 70px; width: 70px;" alt="" class="float-left mr-2 p-2"><span class="text-left">
                        <h6 class="mt-2">AI Fields</h6>
                        <p class="text-muted">Beautiful library for creating new fields.</p>
                    </span>

                </div>
            </div>
        </div><br>
        <hr class="bg-muted w-100">

        <div class="container">
            <div class="row">
                <div class="col-bg-8">
                    <span class="text-left">
                        <h5>
                            Do you want to know more about our privacy policy?
                        </h5>
                        <p class="text-muted">Check our privacy policy for more information to see how transparent we are with your datas.
                        </p>
                    </span>
                </div>
                <div class="col">
                    <button class="btn btn-primary btn-md float-right">Privacy Policy</button>
                </div>
            </div>
        </div>

    </section> <br>

 @endsection