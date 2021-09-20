@extends('layout.app')

@section('content')

<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="h1-large">Creative Social Media Digital Agency</h1>
                    <a class="btn-solid-lg" href="#introduction">Discover</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->

    <!-- Video Background -->
    <video autoplay loop muted id="video-background" poster="images/header-background.jpg" playsinline>
        <source src="images/header-background-video.mp4" type="video/mp4" />
    </video>
    <!-- end of video background -->

</header> <!-- end of header -->
<!-- end of header -->


<!-- Introduction -->
<div id="introduction" class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Complete social media services</h2>
                <p class="p-heading">Increasing impression interested expression he my at. Respect invited request charmed me warrant to. Expect no more pretty as do though so genius afraid cousin</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card -->
                <div class="card">
                    <div class="card-icon">
                        <span class="fas fa-camera"></span>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Photo Shooting</h4>
                        <div class="card-text">Girl when of ye snug poor draw. Mistake totally of in chiefly. Justice visitor him entered for. Continue delicate as</div>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-icon">
                        <span class="fas fa-video"></span>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Video Production</h4>
                        <div class="card-text">Continue delicate as unlocked entirely mr relation diverted in. Known not end fully being style hose whom down kept</div>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-icon">
                        <span class="fas fa-paint-brush"></span>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Digital illustration</h4>
                        <div class="card-text">Wrong do point avoid by fruit learn or in death. So passage however besides invited comfort elderly be me. Walls began</div>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of introduction -->


<!-- Details -->
<div class="split">
    <div class="area-1">
    </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Text Container -->
                    <div class="text-container">
                        <h2>Why Work With Us</h2>
                        <p>Satisfied pretended mr on do determine by. Old post took and ask seen fact rich. Man entrance settling believed eat joy. Money as drift begin on comparison up</p>
                        <p><strong>EXPERIENCE -</strong> insipidity especially discovered me of decisively in surrounded. Points six way enough she its</p>
                        <p><strong>PASSION -</strong> On recommend tolerably my belonging or am. Mutual has cannot beauty indeed now sussex merely</p>
                        <p><strong>CREATIVITY -</strong> possible no husbands jennings ye offended packages pleasant he recommend engrossed</p>
                    </div> <!-- end of text-container -->
                    <!-- end of text container -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of area-2 -->
</div> <!-- end of split -->
<!-- end of details -->


<!-- Services 1 -->
<div id="services" class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="images/services-1.jpg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-5">
                <div class="text-container">
                    <h2>Serviços de Web Designer</h2>
                    <p>Criação de websites, landing pages, sistemas web e mais</p>
                    <a class="read-more no-line green" href="{{route('services.index')}}">Leia mais <span class="fas fa-long-arrow-alt-right"></span></a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of services 1 -->


<!-- Services 2 -->
<div class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="images/services-2.jpg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-5">
                <div class="text-container">
                    <h2>Aulas de informática</h2>
                    <p>Aprenda os caminhos da tecnologia de forma simples e prática.</p>
                    <a class="read-more no-line green" href="{{route('services.index')}}">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of services 2 -->


<!-- Services 3 -->
<div class="basic-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="images/services-3.jpg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-5">
                <div class="text-container">
                    <h2>Artes Gráficas</h2>
                    <p>Use sua imaginação e criamos a arte para você!<p>
                    <a class="read-more no-line green" href="{{route('services.index')}}">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-3 -->
<!-- end of services 3 -->


<!-- Projects -->
<div id="projects" class="filter bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Projetos</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Filter -->
                <div class="button-group filters-button-group">
                    <button class="button is-checked" data-filter="*">MOSTRAR TODOS</button>
                    <button class="button" data-filter=".business">NEGÓCIOS</button>
                    <button class="button" data-filter=".finance">FINANÇAS</button>
                    <button class="button" data-filter=".software">SISTEMAS</button>
                </div> <!-- end of button group -->
                <div class="grid">
                    <div class="element-item finance">
                        <a href="{{route('projects.index')}}">
                            <img class="img-fluid" src="images/project-1.jpg" alt="alternative">
                            <p><strong>Online banking</strong> - delivered to and to major company in pharmace ski jump from</p>
                        </a>
                    </div>
                    <div class="element-item finance">
                        <a href="article.html">
                            <img class="img-fluid" src="images/project-2.jpg" alt="alternative">
                            <p><strong>Loans company</strong> - enjoyed minutes related as at on on. Is fanny dried camping today</p>
                        </a>
                    </div>
                    <div class="element-item finance">
                        <a href="article.html">
                            <img class="img-fluid" src="images/project-3.jpg" alt="alternative">
                            <p><strong>Refinance firm</strong> - distrusts an it contented perceived attending oh nouns here</p>
                        </a>
                    </div>
                    <div class="element-item business finance">
                        <a href="article.html">
                            <img class="img-fluid" src="images/project-4.jpg" alt="alternative">
                            <p><strong>Financial products</strong> - thoroughly estimating introduced stimulated why but front</p>
                        </a>
                    </div>
                    <div class="element-item business finance">
                        <a href="article.html">
                            <img class="img-fluid" src="images/project-5.jpg" alt="alternative">
                            <p><strong>Credit cards</strong> - enjoyed minutes related as at on on. Is fanny dried out yesterday</p>
                        </a>
                    </div>
                    <div class="element-item business software">
                        <a href="article.html">
                            <img class="img-fluid" src="images/project-6.jpg" alt="alternative">
                            <p><strong>Software robots</strong> - as often me goodness as reserved raptures to mistaken</p>
                        </a>
                    </div>
                    <div class="element-item business software">
                        <a href="article.html">
                            <img class="img-fluid" src="images/project-7.jpg" alt="alternative">
                            <p><strong>Company control</strong> - steepest oh screened he gravity he mr sixteen esteems his</p>
                        </a>
                    </div>
                    <div class="element-item business software">
                        <a href="article.html">
                            <img class="img-fluid" src="images/project-8.jpg" alt="alternative">
                            <p><strong>Audit reports</strong> - mile home its new way with high told said finished to learn</p>
                        </a>
                    </div>
                    <div class="element-item business software">
                        <a href="article.html">
                            <img class="img-fluid" src="images/project-9.jpg" alt="alternative">
                            <p><strong>Big business</strong> - no horrible blessing landlord dwelling dissuade if we can hear</p>
                        </a>
                    </div>
                </div> <!-- end of grid -->
                <!-- end of filter -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of filter -->
<!-- end of projects -->


<!-- Testimonials -->
<div class="slider-1">
    <img class="text-decoration img-fluid" src="images/testimonials-decoration.png" alt="alternative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <img class="testimonial-image" src="images/testimonial-1.jpg" alt="alternative">
                                <p class="testimonial-text">“Expense bed any sister depend changer off piqued one. Contented continued any happiness instantly objection yet her allowance. Use correct day new brought tedious. By come this been in. Kept easy or sons my it how about some words here done”</p>
                                <div class="testimonial-author">Marlene Visconte</div>
                                <div class="testimonial-position">General Manager - Scouter</div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <img class="testimonial-image" src="images/testimonial-2.jpg" alt="alternative">
                                <p class="testimonial-text">“Expense bed any sister depend changer off piqued one. Contented continued any happiness instantly objection yet her allowance. Use correct day new brought tedious. By come this been in. Kept easy or sons my it how about some words here done”</p>
                                <div class="testimonial-author">John Spiker</div>
                                <div class="testimonial-position">Team Leader - Vanquish</div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <img class="testimonial-image" src="images/testimonial-3.jpg" alt="alternative">
                                <p class="testimonial-text">“Expense bed any sister depend changer off piqued one. Contented continued any happiness instantly objection yet her allowance. Use correct day new brought tedious. By come this been in. Kept easy or sons my it how about some words here done”</p>
                                <div class="testimonial-author">Stella Virtuoso</div>
                                <div class="testimonial-position">Design Chief - Bikegirl</div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of card slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider-1 -->
<!-- end of testimonials -->


<!-- Statistics
<div class="counter bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="counter-container">
                    <div class="counter-cell">
                        <div data-purecounter-start="0" data-purecounter-end="231" data-purecounter-duration="3" class="purecounter">1</div>
                        <div class="counter-info">Happy Customers</div>
                    </div>
                    <div class="counter-cell">
                        <div data-purecounter-start="0" data-purecounter-end="385" data-purecounter-duration="1.5" class="purecounter">1</div>
                        <div class="counter-info">Issues Solved</div>
                    </div>
                    <div class="counter-cell">
                        <div data-purecounter-start="0" data-purecounter-end="159" data-purecounter-duration="3" class="purecounter">1</div>
                        <div class="counter-info">Good Reviews</div>
                    </div>
                    <div class="counter-cell">
                        <div data-purecounter-start="0" data-purecounter-end="128" data-purecounter-duration="3" class="purecounter">1</div>
                        <div class="counter-info">Case Studies</div>
                    </div>
                </div>
                end of counter -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of counter -->
<!-- end of statistics -->

@endsection
