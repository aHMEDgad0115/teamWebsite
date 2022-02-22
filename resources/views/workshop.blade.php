@extends('layout.app')

@section('title')
Az_SENCS Workshop

@endsection



@section('hero')

            <!--  workshop information Hero Section Begin --> <!-- Moamen Gamal-->

            <section class="information-hero">
                    <div class="information-words">
                        <h2 class="information-word">android Workshop</h2>
                    </div>
            </section>        
                <!-- workshop information-hero end --> <!-- Moamen Gamal -->

                @endsection

                
@section('content')
         
        <!-- start information section -->

    <section class="workshops_main row">

        <!-- start workshops nav --><!-- sara tarek -->

            <aside class="workshops-nav-aside col-lg-3 col-md-4 col-sm-10">
                <ul class="workshops-nav-ul ">
                    <li class="workshops-nav-li "> <a href="web.html" class="active"> Web  </a> </li>
                    <li class="workshops-nav-li "> <a href="java.html" class=""> Java  </a></li>
                    <li class="workshops-nav-li "><a href="android.html" class=""> Android </a></li>
                    <li class="workshops-nav-li " ><a href="control.html" class=""> Control </a></li>
                    <li class="workshops-nav-li "> <a href="network.html" class=""> Network</a></li>
                    <li class="workshops-nav-li "> <a href="machine_learning.html" class=""> Machine Learning  </a></li>
                    <li class="workshops-nav-li "><a href="photoshop.html" class=""> Photoshop </a> </li>
                    <li class="workshops-nav-li "> <a href="python.html" class=""> Python </a></li>
                    <li class="workshops-nav-li "> <a href="security.html" class=""> Security </a></li>
                    <li class="workshops-nav-li "> <a href="video_editting.html" class=""> Video Editting </a></li>
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
            <h2 class="iformation-h2">Content And Time </h2>
            <p class="iformation-p">lorem lpsum is simply dummy text of the printing and</p>
            <p class="iformation-p">typesetting industry.</p>
            <p class="information-date">9-5-20214:28/</p>
            </div>

            <div class="information-content">
            <h2 class="iformation-h2">How To Join ?</h2>
                <!-- <input type="button" name="J" value="Join"> -->
                <div  class="row">
                    <div class="col-3"></div>
                    <button type="button" class="col-6 join-button">
                        Join
                    </button>
                    <div class="col-3"></div>
                    </div>
                </div>
        <!-- start workshop-information --> <!-- eman elomda -->

        </section>
    </section>

@endsection