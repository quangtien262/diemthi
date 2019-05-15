<h4 style="padding-left:10%">
    {{ $blocks->name or '' }}
    <a onclick="addNewTab()" style=" float:right; padding-right:5%">Thêm block</a>
</h4>
<hr/>
<section>
    <form method="POST" action="{{ route('adminEditBlock', [$landingPageId, $blockId, $landingPageItemId]) }}">
    {{ csrf_field()}}
    <input type="hidden" name="tabIndex" id="tabIndex" value="{{ $countTab }}">
    <div class="row" style="padding-left:5%; padding-right:5%">
    <input type="text" name="title" value="{{ $landingPageItemsData['title'] or '' }}" placeholder="Nhập tiêu đề cho block" class="form-control" />
    </div>
    <ul class="nav nav-tabs nav-justified" id="myTabs" role="tablist">
        @if(!empty($landingPageItemsData))
            @foreach($landingPageItemsData['name'] as $tabIdx => $tab)
                @php $countTab++; @endphp
                <li class="{{ $countTab == 1 ? 'active':''}}" role="presentation">
                    <a onclick="openTab(this)"
                    href="#tab-{{ $countTab }}" 
                    role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Tab {{ $countTab }}</a>
                </li>
            @endforeach
        @else
            @php $countTab++; @endphp
            <li class="active" role="presentation">
                <a onclick="openTab(this)"
                href="#tab-{{ $countTab }}" 
                role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Tab {{ $countTab }}</a>
            </li>
        @endif
    </ul>
    
        <div class="tab-content" id="myTabContent">
            
            @for($i=0; $i<$countTab; $i++)
                <div class="tab-pane fade in active" id="tab-{{ ($i+1) }}" role="tabpanel" aria-labelledby="home-tab">
                @include('backend.element.block.blockForm')
                </div>
            @endfor
        </div>
        <div class="row" style="padding-left:5%">
            <div class="col-xs-6 col-sm-3">
                <button class="btn btn-primary" type="submit">Cập nhật </button>
                <br/>
                <br/>
            </div>
        </div>
    </form>
</section>



<script>
    $('#land-id').val($('#landingpage-id').val());
    
</script>
    @include('backend.element.laravelFileManagerScript')

<script>
    //upload multiple images
    var fileNames = [];
    function readFile() {
        
        if (this.files) {
            let length = this.files.length;
            for(i = 0; i < length; i++) {
                this.files[i];
                if(fileNames.indexOf(this.files[i].name) >= 0) {
                    continue;
                }
                fileNames.push(this.files[i].name);
                var FR= new FileReader();
                FR.addEventListener("load", function(e) {
                    let htmlImage = '<div class="item-images">' +
                            '<img src="' + e.target.result + '"/>' +
                            '<textarea class="_hidden" name="_images[]">'+e.target.result+'</textarea>' +
                            '<input type="hidden" value="base64" name="_images_type[]"/>' +
                        '</div>';
                    document.getElementById("result_up_images").innerHTML += htmlImage;
                }); 
                FR.readAsDataURL( this.files[i] );
            }
        }
    }

    document.getElementById("images").addEventListener("change", readFile);
    //End upload multiple images

</script>