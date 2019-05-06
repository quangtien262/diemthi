@php $data = json_decode($landingPage->data, true); @endphp
<div class='content_news'>
     <h2>{{ $data['title'] or '' }}</h2>
     @if(is_array($data) && !empty($data['name'])) 
     @php $countData = count($data['name']); @endphp
     @for($i=0; $i<$countData; $i++)
          <div style=" padding-left:0px!important;margin-right:0px!important; padding-top: 25px;" 
               class="col-xs-6 col-sm-3 content_sp">
               <img style='width:270px;height:161px;' src='{{ $data['image'][$i] }}'>
               <div style="margin-top: 40px" class="ct">
                    <b> <a style="text-transform: uppercase" 
                         href="{{ $data['path'][$i] }}">{{ $data['name'][$i] }}</a></b>
                    <p>{!! $data['description'][$i] !!}</p>
               </div>
          </div>
     @endfor
     @endif
</div>