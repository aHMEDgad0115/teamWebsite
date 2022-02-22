@extends('layout.app')

@section('title')
Az_SENCS Speaker

@endsection



@section('hero')
        <!--  hero Section Begin--> 

        <section class="speakers-hero">
            <span>Speakers</span>
        </section>    

        <!--  hero Section end-->
        
        @endsection

        
@section('content')
           
    <!-- Name Ragab Hussien -->

    <!--Start speakers_main -->

    <section>

        <div class="container-fixed">   <!--Start container body-->
            <div class="row">       <!--Start div  bootstrap - row-->
                <div class="speakers_main col-lg-8 col-md-12">
                    <div>
                        <iframe src="https://www.youtube.com/embed/Zo0WdtXNgv0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div>
                        <iframe src="https://www.youtube.com/embed/5sogStCes1c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div>
                        <iframe src="https://www.youtube.com/embed/Zo0WdtXNgv0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div>
                        <iframe width="713" height="401" src="https://www.youtube.com/embed/Zo0WdtXNgv0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div>
                        <iframe src="https://www.youtube.com/embed/Zo0WdtXNgv0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div>
                        <iframe src="https://www.youtube.com/embed/Zo0WdtXNgv0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div>
                        <iframe src="https://www.youtube.com/embed/Zo0WdtXNgv0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div>
                        <iframe src="https://www.youtube.com/embed/Zo0WdtXNgv0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

    <!-- End speakers_main -->

    <!-- Start comment_main -->

                <div class="comment_main col-lg-4">     <!-- Start comment_main -->
                    <form class="sub_comment" action=""> <!--Start form -->
                        
                        <div class="comment">
                            <span>A -HDMI</span>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtRnm3KV36UENBV_9buLSXJ2d2FBjSfGXzmA&usqp=CAU" alt="" srcset="">
                            <input type="text" placeholder="" autofocus="">
                        </div>

                        <div class="comment">
                            <span>A -HDMI</span>
                            <img src="data:image/png;base64,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" alt="" srcset="">
                            <input type="text" placeholder="">
                        </div>

                        <div class="comment comment_text">
                            <span>A -HDMI</span>
                            <img src="data:image/png;base64,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" alt="" srcset="">
                            <input type="text" placeholder="">
                        </div>

                        <textarea name="" id=""></textarea>
                        <input class="buttib_submit" type="submit" value="Submit">
                    </form>     <!--End form -->
                </div>      <!-- Start comment_main -->
            </div>          <!-- End div  bootstrap - row-->
        </div>              <!-- Start container body -->
        
    </section>

    <!-- End speakers_main -->

        @endsection