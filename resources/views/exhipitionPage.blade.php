@extends('layout.app')

@section('title')
Az_SENCS Exhipition

@endsection



@section('hero')
        <!--  hero Section Begin--> 

        <section class="speakers-hero">
            <span>Exihipation</span>
        </section>   

        <!--  hero Section end--> 


        @endsection

        
@section('content')
          

    <!-- I am Ahmed Al-Sharqawi responsible for the special 
    part of the main tracks from the beginning here until I mention the end -->

        <!-- start main ==> defining_main -->

        <main class="defining_main">
            <div class="container">
                <div class="row">
                    <div class="sub_defining col-lg-5 wow fadeInLeftBig" data-wow-duration="1.5s">
                        <h3>Nam OF Tracks</h3>
                        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam fugiat quis, explicabo ipsum est dicta fugit sit accusantium rem repudiandae vel qui cum recusandae.</P>
                        <button class="button_fixed"><a href="{{route('speaker')}}">More</a></button>
                    </div>
                    <div class="sub_defining col-lg-5 wow fadeInRightBig" data-wow-duration="1.5s">
                        <h3>Nam OF Tracks</h3>
                        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam fugiat quis, explicabo ipsum est dicta fugit sit accusantium rem repudiandae vel qui cum recusandae.</P>
                        <button class="button_fixed"><a href="{{route('sponsers')}}">More</a></button>
                    </div>
                    <div class="sub_defining col-lg-9 wow bounceInUp" data-wow-duration="1.4s">
                        <h3>Nam OF Tracks</h3>
                        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam fugiat quis, explicabo ipsum est dicta fugit sit accusantium rem repudiandae vel qui cum recusandae.</P>
                        <button class="button_fixed"><a href="{{route('exhipition')}}">More</a></button>
                    </div>
                </div>
            </div>
        </main>

        <!-- End main ==> defining_main -->

    <!-- Start our ==> tracks_main section-->

    <section class="tracks_main">
        <div class="container">
            <h2 class="wow bounce" data-wow-duration="2s">Tra<span>ck</span>s</h2>
            <div class="sub_tracks">
                <div>
                    <h3>Nam OF Tracks</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde praesentium voluptas cupiditate necessitatibus perspiciatis, mollitia aliquid? Quidem nemo distinctio iste fuga temporibus, id voluptatibus repellendus obcaecati, debitis est neque. Ipsum dolore exercitationem laudantium esse aliquid quam omnis neque nesciunt expedita.</p>
                    <button class="button_fixed"><a href="#">More</a></button>
                </div>
                <div>
                    <h3>Nam OF Tracks</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde praesentium voluptas cupiditate necessitatibus perspiciatis, mollitia aliquid? Quidem nemo distinctio iste fuga temporibus, id voluptatibus repellendus obcaecati, debitis est neque. Ipsum dolore exercitationem laudantium esse aliquid quam omnis neque nesciunt expedita.</p>
                    <button class="button_fixed"><a href="#">More</a></button>
                </div>
                <div>
                    <h3>Nam OF Tracks</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde praesentium voluptas cupiditate necessitatibus perspiciatis, mollitia aliquid? Quidem nemo distinctio iste fuga temporibus, id voluptatibus repellendus obcaecati, debitis est neque. Ipsum dolore exercitationem laudantium esse aliquid quam omnis neque nesciunt expedita.</p>
                    <button class="button_fixed"><a href="#">More</a></button>
                </div>
                <div>
                    <h3>Nam OF Tracks</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde praesentium voluptas cupiditate necessitatibus perspiciatis, mollitia aliquid? Quidem nemo distinctio iste fuga temporibus, id voluptatibus repellendus obcaecati, debitis est neque. Ipsum dolore exercitationem laudantium esse aliquid quam omnis neque nesciunt expedita.</p>
                    <button class="button_fixed"><a href="#">More</a></button>
                </div>
                <div>
                    <h3>Nam OF Tracks</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde praesentium voluptas cupiditate necessitatibus perspiciatis, mollitia aliquid? Quidem nemo distinctio iste fuga temporibus, id voluptatibus repellendus obcaecati, debitis est neque. Ipsum dolore exercitationem laudantium esse aliquid quam omnis neque nesciunt expedita.</p>
                    <button class="button_fixed"><a href="#">More</a></button>
                </div>
                <div>
                    <h3>Nam OF Tracks</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde praesentium voluptas cupiditate necessitatibus perspiciatis, mollitia aliquid? Quidem nemo distinctio iste fuga temporibus, id voluptatibus repellendus obcaecati, debitis est neque. Ipsum dolore exercitationem laudantium esse aliquid quam omnis neque nesciunt expedita.</p>
                    <button class="button_fixed"><a href="#">More</a></button>
                </div>
            </div>
        </div>
    </section>


        <!-- end our ==> tracks_main section-->

        <!-- I am Ahmed Al-Sharqawi, and here ends the tribute required of me -->

      @endsection