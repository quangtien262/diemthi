var loading = '<div class="loader-inner ball-pulse"><div></div><div></div><div></div></div>';

function submitForm(classLoading, classForm, classReload) {
  $(classLoading).html(loading);
  $(classForm)
    .ajaxForm({
      target: classLoading,
      delegation: true,
      dataType: 'script',
      success: function(result) {
        var data = $.parseJSON(result);
        if (data[0] === 'success') {
          if (data[1] == 'reload') {
            location.reload();
          } else {
            console.log(data[1]);
            $(classLoading).html(data[1]);
          }
          //$('#myModal').modal('hide');
        } else {
          $(classLoading).html(data[1]);
        }
      },
    })
    .submit();
}

function reload(classLoad, url) {
  $(classLoad).html(loading);
  $.ajax({
    url: url,
    data: {
      reload: 1,
    },
    success: function(data) {
      $(classLoad).html(data);
    },
  });
}

function updateSoftOrder(tname) {
  $('.status-update').html(loading);
  $.ajax({
    type: 'get',
    url: '/admin/update-sort-order',
    data: {
      json: $('#nestable-output').html(),
      tname: tname,
    },
    success: function(data) {
      $('.status-update').html(data);
    },
  });
}

function deleteRow(deleteAPI, urlReload, classReload) {
  swal(
    {
      title: 'Are you sure?',
      text: 'You will not be able to recover this item',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Yes, delete it!',
      closeOnConfirm: false,
    },
    function() {
      $.ajax({
        type: 'get',
        url: deleteAPI,
        success: function(data) {
          if (data === 'success') {
            if (!classReload) {
              classReload = '#nestable';
            }
            swal('Deleted!', 'Your category has been deleted.', 'success');
            reload(classReload, urlReload);
          }
        },
      });
    }
  );
}

function loadPopupLarge(url) {
  $('.popup-content').html(loading);
  $.ajax({
    type: 'get',
    url: url,
    success: function(data) {
      $('.popup-content').html(data);
    },
  });
}

function editCategory() {
  $('.edit-category-result').html(loading);
  $('.category-form')
    .ajaxForm({
      target: '.edit-category-result',
      success: function(data) {
        //            loadContent('#nestable', '/admin/category/content-lst-cate');
        location.reload();
        $('.bs-modal-lg').modal('toggle');
      },
    })
    .submit();
}

function loadContent(classLoad, url) {
  $(classLoad).html(loading);
  $.ajax({
    url: url,
    success: function(data) {
      $(classLoad).html(data);
    },
  });
}

function addHtml(typeElement, classCopy, classPaste) {
  if (typeElement === 'form') {
    $(classPaste).html($(classCopy).html());
  } else {
    $(classPaste).html($(classCopy).html());
  }
}

function addHtml2Editor(classCopy, classEditor) {
  $('.main-editor').html('');
  $('.main-editor').html('<textarea class="summernote" name="footer"> ' + $(classCopy).html() + ' </textarea>');
  $('.summernote').each(function() {
    $(this).summernote({
      height: 380,
    });
  });
  $(classEditor).val('');
}

function deleteRow(deleteAPI, urlReload, classReload) {
  swal(
    {
      title: 'Bạn chắc chắn xóa item này?',
      text: 'Item này sẽ bị xóa hoàn toàn, bạn sẽ không thể backup lại!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Xóa',
      closeOnConfirm: false,
    },
    function() {
      $.ajax({
        type: 'get',
        url: deleteAPI,
        success: function(data) {
          if (data === 'success') {
            swal('Deleted!', 'Xóa data thành công.', 'success');
            location.reload();
          }
        },
      });
    }
  );
}

function YNconfirm(url, msg) {
  if (window.confirm(msg)) {
    redirectUrl(url);
    return true;
  } else {
    return false;
  }
}

function changeStt(_this, id) {
  var classLoad = '#result-' + id;
  $(classLoad).html(loading);
  $.ajax({
    url: '/admin/update-stt',
    data: {
      id: id,
      sortOrder: $(_this).val(),
    },
    success: function(data) {
      $(classLoad).html('<span style="color:#23c85e;font-weight:normal">Success</span>');
      setTimeout(function() {
        $(classLoad).fadeOut('fast');
      }, 3000); // <-- time in milliseconds
    },
  });
}

function deleteImage(_this) {
  $(_this)
    .parent('.item-images')
    .remove();
}

function loadDataPopup(url) {
  url += '?popup=1';
  $('.popup-content').html(loading);
  $.ajax({
    type: 'get',
    url: url,
    success: function(data) {
      $('.popup-content').html(data);
    },
  });
}

function closePopup() {}

function addNewTab() {
  const tabIndex = +$('#tabIndex').val();
  const nextIndex = tabIndex + 1;
  $('#tabIndex').val(nextIndex);
  const content = $('#tab-1').html();
  $('#myTabContent').append(
    '<div class="tab-pane fade" id="tab-' +
      nextIndex +
      '" role="tabpanel" aria-labelledby="profile-tab">' +
      content +
      '</div>'
  );
  $('#tab-' + nextIndex + ' input').val('');
  $('#tab-' + nextIndex + ' textarea').html('');
  $('#tab-' + nextIndex + ' img').attr('src', '');
  $('#tab-' + nextIndex + ' .btn-thumbnail-block').attr('data-input', 'thumbnail-block-' + nextIndex);
  $('#tab-' + nextIndex + ' .btn-thumbnail-block').attr('data-preview', 'holder-block-' + nextIndex);
  $('#tab-' + nextIndex + ' .input-thumbnail-block').attr('id', 'thumbnail-block-' + nextIndex);
  $('#tab-' + nextIndex + ' .holder-block').attr('id', 'holder-block-' + nextIndex);
  $('#myTabs').append(
    '<li role="presentation">' +
      '<a onclick="openTab(this)" id="profile-tab" href="#tab-' +
      nextIndex +
      '" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Tab ' +
      nextIndex +
      '</a>' +
      '</li>'
  );
  let route_prefix = '/laravel-filemanager'; //laravel-filemanager

  (function($) {
    $.fn.filemanager = function(type, options) {
      type = type || 'file';

      this.on('click', function(e) {
        let route_prefix = options && options.prefix ? options.prefix : '/laravel-filemanager';
        localStorage.setItem('target_input', $(this).data('input'));
        localStorage.setItem('target_preview', $(this).data('preview'));
        window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
        window.SetUrl = function(url, file_path) {
          //set the value of the desired input to image url
          let target_input = $('#' + localStorage.getItem('target_input'));
          target_input.val(file_path).trigger('change');

          //set or change the preview image src
          let target_preview = $('#' + localStorage.getItem('target_preview'));
          target_preview.attr('src', url).trigger('change');
        };
        return false;
      });
    };
  })(jQuery);

  $('.lfm').filemanager('image', { prefix: route_prefix });
}

function openTab(e) {
  let href = $(e).attr('href');
  $('.tab-pane').hide();
  $(href).show();
}
