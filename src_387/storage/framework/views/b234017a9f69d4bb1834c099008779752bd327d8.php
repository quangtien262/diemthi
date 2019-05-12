<script>
    let route_prefix = "<?php echo e(url(config('lfm.url_prefix'))); ?>"; //laravel-filemanager

        (function( $ ){

            $.fn.filemanager = function(type, options) {
              type = type || 'file';
          
              this.on('click', function(e) {
                let route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                localStorage.setItem('target_input', $(this).data('input'));
                localStorage.setItem('target_preview', $(this).data('preview'));
                window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    //set the value of the desired input to image url
                    let target_input = $('#' + localStorage.getItem('target_input'));
                    target_input.val(file_path).trigger('change');
          
                    //set or change the preview image src
                    let target_preview = $('#' + localStorage.getItem('target_preview'));
                    target_preview.attr('src', url).trigger('change');
                };
                return false;
              });
            }
          
        })(jQuery);
        
        $('.lfm').filemanager('image', {prefix: route_prefix});
        $('.video').filemanager('mp4', {prefix: route_prefix});
        $('.pdf').filemanager('pdf', {prefix: route_prefix});
</script>