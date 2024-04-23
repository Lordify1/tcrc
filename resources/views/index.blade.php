
@extends('layouts.user')

@section('title')
    ThroneAvenue - TCRC
@endsection

@section('content')

    {{-- location start  --}}

    <div class="row t5vh d-flex align-items-center justify-content-center text-center text-white tbgpurple">
        Location and things
    </div>

    {{-- location end --}}

    {{-- the hero section start  --}}

    <section class="row d-flex align-items-center justify-content-center text-center t70vh p-0">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/img3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        
            <!-- Left and right controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>        
    </section>

    {{-- the hero section end  --}}

    
    {{-- welcome message from rev start  --}}

    <article class="row t60vh tbgpurple text-white">
        <section class="col-lg-7 tcflexrow t60vh">
            <div class="col">
                <h1>FROM REV. Dr. Dayo Akinboyewa </h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet vero nesciunt quas, cumque nobis cupiditate molestias nostrum officiis, explicabo quasi praesentium sit fugiat iure aperiam, in tempora? Animi, tempore nihil magnam autem suscipit ut assumenda eum fugiat odit incidunt architecto quis perspiciatis iusto magni maiores voluptate harum et? Perspiciatis quidem cupiditate repudiandae amet nam nemo officia iure laborum facere nostrum, dolor vel quibusdam? Officiis magni excepturi consectetur fugiat id doloremque? Id maxime cupiditate, eum magnam suscipit labore officiis porro ut corrupti earum laudantium assumenda blanditiis.</p>
            </div>
        </section>
        <section class="col-lg-5">
            <img src="/images/sermonimg.png" class="tcimgfit img-fluid" alt="">
        </section>
    </article>

    {{-- welcome message from rev end  --}}


    {{-- our service time start  --}}

    <section class="row text-white services tcflexrow tbggold t60vh">
        <article class="col-lg-3 tcflexcol framebg t50vh">
            <h1>WEDNESDAYS</h1>
            <p>WORD TABLET</p>
            <p><i class="fa fa-clock"></i> 5:00pm - 7:00pm <i class="fa fa-clock"></i></p>
        </article>
        <article class="col-lg-3 tcflexcol framebg t50vh">
            <h1>FRIDAYS</h1>
            <p>5:00pm - 7:00pm</p>
        </article>
        <article class="col-lg-3 tcflexcol framebg t50vh">
            <h1>SUNDAYS</h1>
            <p>9:00am - 11:00am</p>
        </article>
    </section>

    {{-- our service time end  --}}


    {{-- donation secton start --}}

    <section class="row tcflexrow t60vh tbgpurple">
        <article class="col-lg-3 tcflexcol framebg t50vh">
            <h1>OFFERING</h1>
            <p>WORD TABLET</p>
        </article>
        <article class="col-lg-3 tcflexcol framebg t50vh">
            <h1>TITHE</h1>
        </article>
        <article class="col-lg-3 tcflexcol framebg t50vh">
            <h1>DONATION</h1>
        </article>
    </section>

    {{-- donation secton end --}}



    {{-- sermon section start --}}

    <article class="row tcflexrow t60vh">
        <section class="col-lg-8">
            <keypoints class="row-lg-7">

            </keypoints>
            <keypoints class="row-lg-7">

            </keypoints>
            <keypoints class="row-lg-7">

            </keypoints>
        </section>
        <section class="col-lg-4">
            <img src="" alt="">
        </section>
    </article>

    {{-- sermon section end --}}


    {{-- testimonies section start  --}}

    <section class="row tcflexrow t60vh">
        <article class="col-lg-3">

        </article>
        <article class="col-lg-3">

        </article>
        <article class="col-lg-3">

        </article>
    </section>

    {{-- testimonies section end  --}}


    {{-- calendar section start  --}}

    <section class="row tcflexrow t60vh">
        <calendar class="col-lg-5"></calendar>
            <calendarhold class="t60vh border border-danger border-2"></calendarhold>
        <calendar class="col-lg-5"></calendar>
    </section>

    {{-- calendar section start  --}}



    {{-- the authorities section start --}}

    <section class="row tcflexrow t60vh">
        <article class="col-lg-3">

        </article>
        <article class="col-lg-3">

        </article>
        <article class="col-lg-3">

        </article>
    </section>

    {{-- the authorities section end --}}


    {{-- upcoming events and calendar things start  --}}

    {{-- <section>
        <div class="row">
            <h1>UPCOMING EVENT</h1>
        </div>
        
    </section> --}}

    {{-- upcoming events and calendar things end  --}}


@endsection