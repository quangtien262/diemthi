@extends('layouts.frontend')

@section('content')


<!-- offcanvas start -->

<div style="padding-top: 30px;" id="spaces-main" class="pt-perspective ">
    <section class="page-section home-page" id="page-content">

        <main class="row l-main">
            <div class="container">
             
              
              
              
              <div class="vc_row wpb_row vc_row-fluid" 
                   style="margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Open Sans&quot;, sans-serif;">
                  <div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch="" style="margin: 0px; padding: 0px; width: 1200px; position: relative; min-height: 1px; float: left;">
                      <div class="wpb_wrapper" style="margin: 0px; padding: 0px;"><h3 class="vc_custom_heading vc_custom_1513238605222" style="margin-right: 0px; margin-bottom: 0.5rem; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;; font-weight: 700; line-height: 1.4; text-rendering: optimizelegibility; font-size: 27px; margin-top: 20px !important;">
                              Dedication to Quality Control
                          </h3>
                      </div></div></div>
               @foreach($certi as $certication)
              <div class="vc_row wpb_row vc_row-fluid" style="margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Open Sans&quot;, sans-serif;"><div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch="" style="margin: 0px; padding: 0px; width: 1200px; position: relative; min-height: 1px; float: left;"><div class="wpb_wrapper" style="margin: 0px; padding: 0px;"><div class="vc_row wpb_row vc_inner vc_row-fluid main-certificate-wrap vc_custom_1512647954714 vc_row-has-fill" style="margin: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-bottom: 1px solid rgb(245, 240, 240); padding-top: 30px !important; border-radius: 1px !important;">
                              <div class="wpb_column vc_column_container vc_col-sm-8" data-equalizer-watch=""
                                   style="margin: 0px; padding: 0px; width: 800px; position: relative; min-height: 1px; float: left;"><div class="wpb_wrapper" style="margin: 0px; padding: 0px;"><h2 class="vc_custom_heading Certificate-title vc_custom_1512646916999" style="margin: 0.2rem 0px 0.5rem; padding-right: 0px; padding-left: 0px; color: rgb(31, 91, 164); font-family: &quot;Open Sans&quot;; font-weight: 700; line-height: 1.4; text-rendering: optimizelegibility; font-size: 25px; position: relative; padding-top: 0px !important; padding-bottom: 20px !important;">
                                          {{$certication->name}}
                                      </h2>
                                      <div class="wpb_text_column wpb_content_element " style="margin: 0px 0px 35px; padding: 0px;">
                                          <div class="wpb_wrapper" style="margin: 0px; padding: 0px;">
                                              {!!$certication->summary!!}
                                  </div></div></div>
                                              
                              </div>
                                      <div class="wpb_column vc_column_container vc_col-sm-4 vc_custom_1512654205236" data-equalizer-watch="" style="margin: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; width: 400px; position: relative; min-height: 1px; float: left; padding-top: 10px !important;">
                                          <div class="wpb_wrapper" style="margin: 0px; padding: 0px;">
                                              <div class="wpb_single_image wpb_content_element vc_align_center   image-container" style="margin: 0px 0px 35px; padding: 0px; text-align: center;">
                                                  <figure class="wpb_wrapper vc_figure" style="display: inline-block; vertical-align: top; max-width: 100%;">
                                                      <a href="{{$certication->pdf}}"
                                                         target="_blank" class="vc_single_image-wrapper vc_box_outline  vc_box_border_blue" 
                                                         style="color: rgb(16, 110, 170); line-height: inherit; border: 1px solid rgb(84, 114, 210); outline-style: initial; outline-width: 0px; position: relative; display: inline-block; vertical-align: top; max-width: 100%; border-radius: 0px; box-shadow: none; padding: 6px;">
                                                          <img class="vc_single_image-img " src="{{$certication->image}}" width="228" height="313" alt="ninshou1" title="ninshou1" style="max-width: 100%; height: auto; display: inline-block; vertical-align: top; border-width: 1px; border-style: solid; border-color: rgb(235, 235, 235); border-radius: 0px; box-shadow: none;"></a></figure></div></div></div></div></div></div></div>
              @endforeach
               
            </div>

        </main>

    </section>
</div>

@endsection

