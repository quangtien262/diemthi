<section>
    <div class="container-fluid">
        <div class="card" style="padding:10px">
            <div class="row">
                @foreach($blockItems as $block) 
                @if($block->input_type == 'text')
                <div class="col-md-6">
                    <br/>
                    <label>{{ $block->name or '' }}</label>
                    
                    <input name="{{ $block->input_name }}[]" value="{{ !empty($landingPageItemsData) ? $landingPageItemsData[$block->input_name][$i]:'' }}"
                        class="form-control" type="text" placeholder="" />
                </div>
                @elseif($block->input_type == 'number')
                <div class="col-md-6">
                    <br/>
                    <label>{{ $block->name or '' }}</label>
                    
                    <input name="{{ $block->input_name }}[]" value="{{ !empty($landingPageItemsData) ? $landingPageItemsData[$block->input_name][$i]:'' }}"
                        class="form-control" type="number" placeholder="" />
                </div>
                @elseif($block->input_type == 'textarea')
                <div class="col-md-8">
                    <br/>
                    <label>{{ $block->name or '' }}</label>
                    
                    <textarea name="{{ $block->input_name }}[]" class="form-control">{{ !empty($landingPageItemsData) ? $landingPageItemsData[$block->input_name][$i]:'' }}</textarea>
                </div>
                @elseif($block->input_type == 'select')
                <div class="col-md-6">
                    <br/>
                    <label>{{ $block->name or '' }}</label> {!! app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id,
                    $data[$col->name]) !!}

                </div>
                @elseif($block->input_type == 'summoner')
                <div class="col-md-8">
                    <br/>
                    <label>{{ $block->name or '' }}</label>
                    
                    <textarea name="{{ $block->input_name }}[]" id="ckeditor" class="summernote">{{ !empty($landingPageItemsData) ? $landingPageItemsData[$block->input_name][$i]:'' }}</textarea>
                </div>
                @elseif($block->input_type == 'selects')
                <div class="col-md-6">
                    <br/>
                    
                    <label>{{ $block->name or '' }}</label> {!! app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id,
                    $data[$col->name] ? $data[$col->name]:0, true) !!}
                </div>
                @elseif($block->input_type == 'select2')
                <span>select2</span> 
                @elseif($block->input_type == 'selects2')
                <span>selects2</span> 
                @elseif($block->input_type == 'ckeditor')
                <span>ckeditor</span> 
                @elseif($block->input_type == 'image_laravel')
                <div class="col-md-8">
                    <br/>
                    <label>{{ $block->name or '' }}</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            
                            <a data-input="thumbnail-block-{{ ($i+1) }}" data-preview="holder-block-{{ ($i+1) }}" class="btn btn-primary lfm btn-thumbnail-block">
                                <i class="ion-images"></i> Chọn ảnh
                            </a>
                        </span>
                        <input class="input-thumbnail-block" 
                          id="thumbnail-block-{{ ($i+1) }}" 
                          class="form-control" type="text" 
                          value="{{ !empty($landingPageItemsData) ? $landingPageItemsData[$block->input_name][$i]:'' }}"
                          name="{{ $block->input_name }}[]" value="{{ !empty($landingPageItemsData) ? $landingPageItemsData[$block->input_name][$i]:'' }}"
                        />
                    </div>
                @if(!empty($landingPageItemsData))
                    <img class="holder-block" id="holder-block-{{ ($i+1) }}" src="{{ !empty($landingPageItemsData) ? $landingPageItemsData[$block->input_name][$i]:'' }}"
                        style="margin-top:15px;max-height:100px;" /> 
                @else
                    <img class="holder-block" id="holder-block-1" style="margin-top:15px;max-height:100px;" /> 
                @endif
                </div>
                @elseif($block->input_type == 'images_laravel')
                <span>image_laravel</span> 
                @elseif($block->input_type == 'image')
                <span>image</span> 
                @elseif($block->input_type == 'images')
                <div class="col-md-8">
                    <br/>
                    <label>{{ $block->name or '' }}</label>
                    <input id="images" multiple="multiple" type="file" class="form-control" />
                </div>
                <div class="col-md-8">
                    <div id="result_up_images">
                        <br/> 
                        @if(isset($images) && is_array($images))
                        @foreach($images as $img)
                        <div class="item-images">
                            <a class="_red delete-img" onclick="deleteImage(this)">Xóa</a>
                            <img src="{{ $img or '' }}" />
                            <textarea class="_hidden" name="_images[]">{{ $img or '' }}</textarea>
                            <input type="hidden" value="path" name="_images_type[]" />
                        </div>
                        @endforeach 
                        @endif
                    </div>
                </div>
                @elseif($block->input_type == 'video')
                <div class="col-md-8">
                    <br/>
                    <label>{{ $block->name or '' }}</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                        <a data-input="video" data-preview="holder_video" class="btn btn-primary video">
                            <i class="fa fa-picture-o"></i> Chọn video
                        </a>
                    </span>
                        <input id="video" class="form-control" type="text" name="{{ $block->input_name }}[]" value="{{ !empty($landingPageItemsData) ? $landingPageItemsData[$block->input_name][$i]:'' }}"
                        />
                    </div>
                </div>
                @elseif($block->input_type == 'pdf')
                <div class="col-md-8">
                    <br/>
                    <label>{{ $block->name or '' }}</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                        <a data-input="pdf" data-preview="holder_video" class="btn btn-primary pdf">
                            <i class="fa fa-picture-o"></i> Chọn file pdf
                        </a>
                    </span>
                        <input id="pdf" class="form-control" type="text" name="{{ $block->input_name }}[]" value="{{ !empty($landingPageItemsData) ? $landingPageItemsData[$block->input_name][$i]:'' }}"
                        />
                    </div>
                </div>
                @elseif($block->input_type == 'file')
                <span>file</span> @elseif($block->input_type == 'files')
                <span>files</span> @elseif($block->input_type == 'date')
                <div class="col-md-6">
                    <br/>
                    <label>{{ $block->name or '' }}</label>
                    <input name="{{ $block->input_name }}[]" value="{{ !empty($landingPageItemsData) ? $landingPageItemsData[$block->input_name][$i]:'' }}"
                        class="form-control datepicker-1" type="text" placeholder="{{ $data[$col->display_name] or '' }}" />
                </div>
                @elseif($block->input_type == 'input')
                <div class="col-md-6">
                    <br/>
                    <label>{{ $block->name or '' }}</label>
                    <select name="{{ $col->name }}" class="form-control">
                    @foreach(unserialize(TYPE_EDIT) as $typeValue => $typeName)
                        <option {{ isset($column->type_edit) && $column->type_edit == $typeValue ? 'selected="selected"':'' }}  value="{{$typeValue}}">{{$typeName}}</option>
                    @endforeach
                </select>
                </div>
                @elseif($block->input_type == 'block')
                <div class="col-md-8">
                    <br/>
                    <label>{{ $block->name or '' }}</label>
                </div>
                @endif @endforeach
            </div>
        </div>
    </div>
</section>