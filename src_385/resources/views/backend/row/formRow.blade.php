
@extends('layouts.'.$layout)

@section('script')

    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
            };
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


        CKEDITOR.replace('ckeditor', options);
    </script>
@endsection

@section('content')

<section>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <!-- START row-->
                <div class="row">
                    <div class="col-md-12">
                           
                        <form class="form-validate form-horizontal" id="form-tables" method="post" action="{{ \Request::url() }}" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <fieldset class="b0">
                                <legend>
                                    {{ $table->display_name }}
                                    <a class="btn btn-default" style="float: right" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="ion-arrow-left-a"></i>
                                        Back
                                    </a>
                                    @if(!empty($tableId))
                                    <button class="btn btn-primary" style="float: right" type="submit" name="add_table">
                                        <i class="ion-chevron-down"></i>
                                        Cập nhật
                                    </button>
                                    @else
                                    <button class="btn btn-primary" style="float: right" type="submit" name="edit_table">
                                        <i class="ion-plus-circled"></i>
                                        Thêm mới
                                    </button>
                                    @endif
                                </legend>
                            </fieldset>
                            <fieldset class="b0">
                                <div class="row">
                                    @foreach($columns as $col)
                                        @if($col->edit == 1)
                                            @include('backend.element.formColumn')
                                        @endif
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3 center-block">
                                        <br/>
                                        @if(empty($dataId))
                                            <button class="btn btn-primary" type="submit" name="add_field">Thêm mới</button>
                                        @else
                                            <button class="btn btn-primary" type="submit" name="edit_field">Cập nhật</button>
                                        @endif
                                    </div>
                                </div>
                            </fieldset>
                        </form> 
                        <hr>
                        <!-- END panel-->
                    </div>
                </div>
                <!-- END row-->
            </div>
        </div>
    </div>
        
<form class="form-nestable" method="POST" action="{{ route('sortOrderRows', [LANDING_PAGE_ITEM_ID]) }}">
        {{ csrf_field()}}
        <textarea style="display: none" name="ids" class="well" id="nestable-output"></textarea>
    </form>
</section>

@endsection
