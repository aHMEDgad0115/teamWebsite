@extends('layout.app')

@section('title')
Az_SENCS Home

@endsection



@section('hero')
        <!--  hero Section Begin--> 

        <section >
            <div class="hero">  
            <img class="rightSide ani-hero" src="image/Rightpart.png" >
            <img class="leftSide ani-hero" src="image/leftpart.png" >
            <img class="mid-hero" src="image/logo.png">
        </div>
       </section>

       @endsection

       
@section('content')
        
        <!--  hero Section end--> 


        <!--  text Section start--> 

        
        <div class="parent">
            
            <p>What is Az_SENCS</p> 

            
            
            <div class="container-home"><h2>AZSENCS-AL Azhar university</h2><br>
                AZSENCS-Al Azhar university We are from of the student activity committee at Al-Azhar
                university and we are responsible for orgnizing an exhibtion about computer system 
                engineering innovations at the faculty of engineering. Exhibtion activities provide 
                support services for students inside and outside the university through different 
                engineering fields. The faculty of engineering exhibits specializations in different
                fields regarding computing and telecommunications, electricity and power mechanics and computer.
                </div>
        
        </div>

        
        <!--  text Section end--> 


        <!--  our actitvites Section start--> 


        <h2 class="text">Our Ac<span>tivit</span>es</h2>

        <section class="our-activites row">
        <div  class="home-workshop-event col-lg-5 col-md-5 col-sm-10" >
                <div class="background "></div>
                <div class="transbox d-flex flex-column">
                <p>Our Workshops</p>
            
                <P class="home-workshop-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam fugiat quis, explicabo ipsum est dicta fugit sit accusantium rem repudiandae vel qui cum recusandae.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam fugiat quis, explicabo ipsum est dicta fugit sit accusantium rem repudiandae vel qui cum recusandae.
                </P>

                <a href="{{route('Workshops')}}" class="a-button d-flex justify-content-around"><button class="button"><span>more</span> </button></a>
                </div>
            

        </div>
       
        <div  class="home-workshop-event col-lg-5 col-md-5 col-sm-10" >
        <div class="background2 " ></div>
            <div class="transbox d-flex flex-column">
            <p>our Events</p>
            <P class="home-event-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam fugiat quis, explicabo ipsum est dicta fugit sit accusantium rem repudiandae vel qui cum recusandae.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam fugiat quis, explicabo ipsum est dicta fugit sit accusantium rem repudiandae vel qui cum recusandae.
            </P>

            <a href="{{route('events')}}" class="event a-button d-flex justify-content-around"><button class="button"><span>more</span> </button></a>
            </div>
        </div>

        </section>

        <!--  our actitvites Section start--> 

        <!--  our exhipition Section start--> 


    <!--AZ-SENCE EXHEPITION--> <!--MADE BY ENG/ EMAN WARDNI ELSHAMY-->

        <section class="exhep">
        <div class="ex_container row">
            <h2 class="col-12">AZ-SE<span>NCS Exh</span>epition</h2>

            <div class="margin-button col-lg-3 col-md-3 col-sm-10">
            <img class="right-photo" src="image/exhipitionimage.jpg" alt="AZ-SENCE Exhepition photo"/>
            </div>

            <div class="margin-button text_about_exhep  col-lg-5 col-md-5 col-sm-10">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eius asperiores voluptates? Aspernatur qui sit tenetur est perferendis! Quidem alias ipsa molestiae quae corporis ducimus voluptates dolorem ipsam quia modi?</p>
                <button class="button ">
                    <a class="go_to_exhep" href="{{route('exhipitionPage')}}"><span> GO To Exhipition</span></a>
                </button>
            </div>

            <div class="margin-button col-lg-3 col-md-3 col-sm-10">
            <img class="left-photo " src="image/exhipitionimage.jpg" alt="AZ-SENCE Exhepition photo"/>
            </div>
            </div>

        </section>



        <!--  our exhipition Section end--> 
@endsection