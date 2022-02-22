@extends('layout.app')

@section('title')
  Az_SENCS Contact
@endsection



@section('hero')
            <!--  contact-us-hero Section Begin --> <!-- Moamen Gamal-->

            <section class="contact-us-hero">
                    <div class="contact-us-words">
                        <h2 class="contact-word">Contact Us</h2>
                    </div>
             
            </section>        
                <!-- contact-us-hero end -->
@endsection


@section('content')
        
                <div class="contact-img">
            
                       <form action="" class="contact-us " >

                            <div class="d-elex flex-column content">
                                <input class="main1" type="text" name="company name" placeholder="Company Name">
                                <input class="main1" type="text" name="phone" placeholder="Phone" minlength="11">
                                <input class="main1" type="email" placeholder="Email" name="mail">
                            </div>

                            <div class="d-elex flex-column  mess">
                            <textarea class="main2" name="message" placeholder="Your Message"></textarea>
                            <input class="main3" type="submit" value="Send">
                            </div>
                         </form>            
            
            
                </div>
               
            
        
@endsection