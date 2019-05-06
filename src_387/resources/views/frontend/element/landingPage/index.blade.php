@foreach($landingPageItem as $landingPage) @if($landingPage->block_id == 1)
  @include('frontend.element.landingPage.slide')
@elseif($landingPage->block_id == 2)
  @include('frontend.element.landingPage.block02') 
  @elseif($landingPage->block_id == 3)
  <div class="clean01" style="width:100%;float:left; height:40px"></div>
  @include('frontend.element.landingPage.block03') 
  @elseif($landingPage->block_id == 4)
  <div class="clean01" style="width:100%;float:left; height:40px"></div>
  @include('frontend.element.landingPage.block04')
@endif @endforeach