@extends('layout')

@section('page_specific_style')
    <style>
        section.menu {
            background: none;
        }

        #header {
            position: fixed;
            top:0px;
            left: 0px;
            z-index:1001;
            width: 100%;
            height: 90px;
            background-color: #fff!important;
            box-shadow: 0 1px 3px rgba(0,0,0,0.11);
            padding-top: 20px;
        }

        #header .menu-item a {
            color: #818181;
        }

        #header.overflow {
            top:-100px;
            left: 0px;
            background-color: #fff!important;
            box-shadow: 0 1px 3px rgba(0,0,0,0.11);
            -webkit-transition: all 0.3s ease-in;
            -o-transition: all 0.3s ease-in;
            transition: all 0.3s ease-in;
            -webkit-font-smoothing: antialiased;
        }
    </style>
@endsection

@section('content')
<section id="about" class="section about">
    <div class="container">
        <div class="jt_row jt_row-fluid row">
            <div class="col-md-12 jt_col column_container">
                <div class="voffset100"></div>
                <h2 class="section-title">Slikhuset Kolding</h2>
            </div>
            <div class="col-md-6 col-md-offset-3 jt_col column_container">
                <div class="section-subtitle">
                   Find vores store udvalg i Kolding midtby.
                </div>
            </div>


            <div class="col-md-6 jt_col column_container">
                <p class="text">
                    Velkommen til Slikhuset, <strong>Kolding</strong>' st&oslash;rste bland-selv slikbutik, beliggende centralt.
                    Her i Slikhuset har vi 400 forskellige slags bland-selv slik fra bl.a. Haribo, Toms og Malaco, samt forskellige slik-og bolcheposer, chokoladebarer og slikkepinde.
                    Derudover har vi ogs&aring; en masse forskellige drikkevarer i form af sodavande, heriblandt Cherry Coke, Vanilla Coke og Dr. Pepper, samt energidrikke, vitamindrikke og kildevand.
                    I sommerperioden tilbyder vi ogs&aring; slush-ice, forskellige slags is, soft ice, samt gammeldags isvafler.
                </p>
                <div class="ornament"></div>
            </div>

            <div class="col-md-6 jt_col column_container">
                <div id="owl-about" class="owl-carousel">
                    <div class="item">
                        <img src="/images/slider/slikhuset_inde.jpg" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection