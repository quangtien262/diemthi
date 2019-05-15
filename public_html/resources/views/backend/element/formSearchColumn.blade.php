
    @if($col->type_edit == 'text')
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <input name="{{ $col->name or '' }}" value="{{ $_GET[$col->name] or '' }}" class="form-control" type="text" placeholder=""/>
        </div>
    @elseif($col->type_edit == 'textarea')
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <textarea name="{{ $col->name or '' }}" class="form-control">{{ $_GET[$col->name] or '' }}</textarea>
        </div>
    @elseif($col->type_edit == 'select')
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            @if(isset($_GET[$col->name]))
              {!! app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id, $_GET[$col->name]) !!}
            @else
              {!! app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id, 0) !!}
            @endif
        </div>
    @elseif($col->type_edit == 'summoner')
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <textarea name="{{ $col->name or '' }}" class="summernote">{{ $_GET[$col->name] or '' }}</textarea>
        </div>
    @elseif($col->type_edit == 'selects')
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            {!! app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id, $_GET[$col->name] ? $_GET[$col->name]:0, true) !!}
        </div>
    @elseif($col->type_edit == 'select2')
        <span>select2</span>
    @elseif($col->type_edit == 'selects2')
        <span>selects2</span>
    @elseif($col->type_edit == 'ckeditor')
        <span>ckeditor</span>
    @elseif($col->type_edit == 'image_laravel')
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Chọn file
                    </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="{{ $col->name or '' }}" value="{{ $_GET[$col->name] or '' }}"/>
            </div>
            <img id="holder" style="margin-top:15px;max-height:100px;" src="{{ $_GET[$col->name] or '' }}">
        </div>
    @elseif($col->type_edit == 'images_laravel')
        <span>image_laravel</span>
    @elseif($col->type_edit == 'image')
        <span>image</span>
    @elseif($col->type_edit == 'images')
        <span>images</span>
    @elseif($col->type_edit == 'file')
        <span>file</span>
    @elseif($col->type_edit == 'files')
        <span>files</span>
    @elseif($col->type_edit == 'date')
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label>{{ $col->display_name or $col->name }}</label>
            <input name="{{ $col->name or '' }}" value="{{ $_GET[$col->name] or '' }}" class="form-control datepicker-1" type="text" placeholder="{{ $data[$col->display_name] or '' }}"/>
        </div>
    @endif
