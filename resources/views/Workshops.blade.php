@extends('layout.app')

@section('title')
  Az_SENSC Workshops
@endsection



@section('hero')

        <!--  workshop information Hero Section Begin --> <!-- Moamen Gamal-->

        <section>
            <div style="height: 600px;">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/UrYO3jXDTes" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>               
            </div>
        </section>        
            <!-- workshop information-hero end --> <!-- Moamen Gamal -->

@endsection



@section('content')

    <!-- start information section -->


    <!-- start workshops nav --><!-- sara tarek -->
    <section class="workshops_main row">
        <aside class="workshops-nav-aside col-lg-3 col-md-4 col-sm-10">
            
            <ul class="workshops-nav-ul ">
                <li class="workshops-nav-li "> <a href="workshop.html" class=""> Web  </a> </li>
            </ul>

        </aside>

        <!-- end workshops nav --> <!-- sara tarek -->

    <!-- start workshop-information --> <!-- eman elomda -->

        <section class="information-parent col-lg-7 col-md-6 col-sm-10">
            
            <div class="menu-toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            
            <div class="information-content">
                <h2 class="iformation-h2">About workshop</h2>
                <p class="iformation-p">lorem lpsum is simply dummy text of the printing and </p>
                <p class="iformation-p">typesetting industry.</p>
                <p class="iformation-p">lorem lpsum has been the industry’s standard dummy </p>
                <p class="iformation-p">texet ever since the 1500s,</p>
                <p class="iformation-p">when an unknown printer took a galley of typ </p>
            </div>

            <div class="information-content">
                <h2 class="workshops-h2">Why You Join Us ? </h2>
                <p class="workshops-p">lorem lpsum is simply dummy text of the printing and </p>
                <p class="workshops-p">typesetting industry.</p>
                <p class="workshops-p">lorem lpsum has been the industry’s standard dummy </p>
                <p class="workshops-p">texet ever since the 1500s,</p>
                <p class="workshops-p">when an unknown printer took a galley of typ </p>
            </div>

            <div class="information-content">
                <h2 class="workshops-h2">Why You Join Us ? </h2>
                <p class="workshops-p">lorem lpsum is simply dummy text of the printing and </p>
                <p class="workshops-p">typesetting industry.</p>
                <p class="workshops-p">lorem lpsum has been the industry’s standard dummy </p>
                <p class="workshops-p">texet ever since the 1500s,</p>
                <p class="workshops-p">when an unknown printer took a galley of typ </p>
            </div>
        <!-- start workshop-information --> <!-- eman elomda -->

        </section>

    </section>

@endsection