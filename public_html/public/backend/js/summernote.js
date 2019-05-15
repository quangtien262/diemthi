(function () {
    'use strict';

    $(formEditor);

    function formEditor() {

        var lfm = function (options, cb) {
            var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
            window.SetUrl = cb;
        };

        // Define LFM summernote button
        var LFMButton = function (context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="note-icon-picture"></i> ',
                tooltip: 'Hình ảnh',
                click: function () {

                    lfm({type: 'image', prefix: '/laravel-filemanager'}, function (url, path) {
                        context.invoke('insertImage', url);
                    });

                }
            });
            return button.render();
        };

        // Summernote HTML editor
        $('.summernote').each(function () {
            $(this).summernote({
                height: 380,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'unlink', 'hr']],
                    ['popovers',
                        ['lfm'],
                    ],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ],
                buttons: {
                    lfm: LFMButton
                },
                popover: {
                    image: [
                        ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                        ['float', ['floatLeft', 'floatRight', 'floatNone']],
                        ['remove', ['removeMedia']]
                    ],
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ],
                    air: [
                        ['color', ['color']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture']]
                    ]
                }
            });
        });

        $('.summernote-air').each(function () {
            $(this).summernote({
                airMode: true,
                toolbar: [
                    ['popovers',
                        ['lfm'],
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                    ],
                ],
                buttons: {
                    lfm: LFMButton
                }
            });
        });


    }

})();