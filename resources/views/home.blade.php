@extends('layout')

@section('homeslider')
    <section id="home-slider">
        <div class="overlay"></div>
        <div id="owl-main" class="owl-carousel">
            <div class="item"><img src="images/slider/slikhuset_slik.jpg" alt="Slide 1"/></div>
            <div class="item"><img src="images/slider/slikhuset_softice.jpg" alt="Slide 2"></div>
        </div>
        <div class="slide-content">
            <div class="voffset100"></div>

            <span class="logointro"></span>

            <div id="owl-main-text" class="owl-carousel">
                <div class="item">
                    <h2>Halløj</h2>
                </div>
                <div class="item">
                    <h2>Slikhuset Kolding</h2>
                </div>
            </div>
            <p>Velkommen til Slikhuset! </p>

        </div>
        <a href="#about" class="page-scroll menu-item"><div class="mouse"><span></span></div></a>
    </section>
@endsection

@section('content')
<section id="about" class="section about">
    <div class="container">
        <div class="jt_row jt_row-fluid row">
            <div class="col-md-12 jt_col column_container">
                <h2 class="section-title">Nyheder</h2>
            </div>
            <div class="col-md-6 col-md-offset-3 jt_col column_container">
                <div class="red section-subtitle">
                    Vi elsker slik!
                </div>
            </div>
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <h3>{{ $post->title }} Æ</h3>
                    <p>{{ $post->content }}</p>
                    <img class="img-responsive" src="/images/post/{{ $post->imageUrl }}" alt=""/>
                </div>
            @endforeach


        </div>
    </div>
</section>
@endsection

@section('parallex')

<section class="section timetable parallax">
    <div class="container">
        <div class="jt_row jt_row-fluid row">
            <div class="col-md-12 jt_col column_container">
                <h2 class="section-title"></span><span class="opening-hours">Åbningstider</span></h2>
            </div>

            <div class="col-md-3 jt_col column_container">
                <div class="section-subtitle days">
                    {{ trans('text.montowed') }}
                </div>
                <div class="section-subtitle hours">
                    11:00<br>20:00
                </div>
            </div>

            <div class="col-md-3 jt_col column_container">
                <div class="section-subtitle days">
                    Torsdag
                </div>
                <div class="section-subtitle hours">
                    11:00<br>21:00
                </div>
            </div>


            <div class="col-md-3 jt_col column_container">
                <div class="section-subtitle days">
                    Fredag til Lørdag
                </div>
                <div class="section-subtitle hours">
                    11:00<br>22:00
                </div>
            </div>

            <div class="col-md-3 jt_col column_container">
                <div class="section-subtitle days">
                    Søndag
                </div>
                <div class="section-subtitle hours">
                    11:00<br>21:00
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
