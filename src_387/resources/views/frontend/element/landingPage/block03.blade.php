@php $data = json_decode($landingPage->data, true); @endphp
@foreach($data['name'] as $key => $val)
<section>
    <div class="main-block" style="width:100%; float:left">
      <div class="row">
        <div class="col-md-6">
          <img class="img-rounded" alt="" style="width:100%; float:left"
          src="{{ $data['image'][$key] or '' }}">
        </div>
        <div class="col-md-6">
          <div class="ow-content ow-padding-left-1-col ">
            {{--  <div class="c-logo ow-logo">
              <img class=" lazyloaded" alt="Icon Organized" title="Icon_Organized" 
              src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE27Txn?ver=408e&amp;q=90&amp;h=40&amp;w=100&amp;b=%23FFFFFFFF&amp;aim=true"/>
            </div>  --}}
            <h2 class="c-heading-3 x-weight-semibold ow-heading">
              {{ $data['name'][$key] or '' }}
            </h2>
            <div class="c-paragraph ow-paragraph">
                {{ $data['description'][$key] or '' }}  
            </div>
            <div class="ow-cta-container">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach