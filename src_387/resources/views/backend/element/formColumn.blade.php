
    @if($col->type_edit == 'text')
        <div class="col-md-6">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <input name="{{ $col->name or '' }}" value="{{ $data[$col->name] or '' }}" class="form-control" type="text" placeholder=""/>
        </div>
    @elseif($col->type_edit == 'number')
        <div class="col-md-6">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <input name="{{ $col->name or '' }}" value="{{ $data[$col->name] or '' }}" class="form-control" type="number" placeholder=""/>
        </div>
    @elseif($col->type_edit == 'textarea')
        <div class="col-md-8">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <textarea name="{{ $col->name or '' }}" class="form-control">{{ $data[$col->name] or '' }}</textarea>
        </div>
    @elseif($col->type_edit == 'select')
        <div class="col-md-6">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            
            {!! app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id, $data[$col->name], false, $col->conditions ) !!}
           
        </div>
    @elseif($col->type_edit == 'summoner')
        <div class="col-md-8">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <textarea name="{{ $col->name or '' }}" id="ckeditor">{{ $data[$col->name] or '' }}</textarea>
        </div>
    @elseif($col->type_edit == 'selects')
        <div class="col-md-6">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            {!! app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id, $data[$col->name] ? $data[$col->name]:0, true, $col->conditions) !!}
        </div>
    @elseif($col->type_edit == 'select2')
        <span>select2</span>
    @elseif($col->type_edit == 'selects2')
        <span>selects2</span>
    @elseif($col->type_edit == 'ckeditor')
        <span>ckeditor</span>
    @elseif($col->type_edit == 'image_laravel')
        <div class="col-md-8">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a data-input="thumbnail" data-preview="holder1" class="btn btn-primary lfm">
                        <i class="ion-images"></i> Chọn ảnh
                    </a>
                </span>
                <input id="thumbnail" 
                    class="form-control" 
                    type="text" 
                    name="{{ $col->name or '' }}" 
                    value="{{ $data[$col->name] or '' }}" />
            </div>
            @if(!empty($data[$col->name]))
                <img id="holder1" src="{{ $data[$col->name] }}" style="margin-top:15px;max-height:100px;"/>
            @else
                <img id="holder1" style="margin-top:15px;max-height:100px;"/>
            @endif
        </div>
    @elseif($col->type_edit == 'images_laravel')
        <span>image_laravel</span>
    @elseif($col->type_edit == 'image')
        <span>image</span>
    @elseif($col->type_edit == 'images')
        <div class="col-md-8">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <input id="images" multiple="multiple" type="file" class="form-control"/>
        </div>
        <div class="col-md-8">
             @php $images = json_decode($data[$col->name]); @endphp
                
            <div id="result_up_images">
                <br/>
                @if(is_array($images))
                    @foreach($images as $img) 
                        <div class="item-images">
                                <a class="_red delete-img" onclick="deleteImage(this)">Xóa</a>
                                <img src="{{ $img or '' }}"/>
                                <textarea class="_hidden" name="_images[]">{{ $img or '' }}</textarea>
                                <input type="hidden" value="path" name="_images_type[]"/>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    @elseif($col->type_edit == 'video')
        <div class="col-md-8">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a data-input="video" data-preview="holder_video" class="btn btn-primary video">
                        <i class="fa fa-picture-o"></i> Chọn video
                    </a>
                </span>
                <input id="video" 
                    class="form-control" 
                    type="text" 
                    name="{{ $col->name or '' }}" 
                    value="{{ $data[$col->name] or '' }}" />
            </div>
        </div>
    @elseif($col->type_edit == 'pdf')
        <div class="col-md-8">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a data-input="pdf" data-preview="holder_video" class="btn btn-primary pdf">
                        <i class="fa fa-picture-o"></i> Chọn file pdf
                    </a>
                </span>
                <input id="pdf" 
                    class="form-control" 
                    type="text" 
                    name="{{ $col->name or '' }}" 
                    value="{{ $data[$col->name] or '' }}" />
            </div>
        </div>
    @elseif($col->type_edit == 'file')
        <span>file</span>
    @elseif($col->type_edit == 'files')
        <span>files</span>
    @elseif($col->type_edit == 'date')
        <div class="col-md-6">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <input name="{{ $col->name or '' }}" value="{{ $data[$col->name] or '' }}" class="form-control datepicker-1" type="text" placeholder="{{ $data[$col->display_name] or '' }}"/>
        </div>
    @elseif($col->type_edit == 'input')
        <div class="col-md-6">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <select name="{{ $col->name }}" class="form-control">
                @foreach(unserialize(TYPE_EDIT) as $typeValue => $typeName)
                    <option {{ isset($column->type_edit) && $column->type_edit == $typeValue ? 'selected="selected"':'' }}  value="{{$typeValue}}">{{$typeName}}</option>
                @endforeach
            </select>
        </div>
    @elseif($col->type_edit == 'block')
        <div class="col-md-8">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <em> (Vui lòng khởi tạo landingpage trước khi tạo các block con tương ứng) </em>
            @include('backend.element.listBlockLandingPage')
        </div>
    @elseif($col->type_edit == 'encryption')
        <div class="col-md-6">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <input name="{{ $col->name or '' }}" value="" class="form-control" type="password" placeholder="Bỏ trống nếu bạn không muốn thay đổi"/>
        </div>
    @endif
