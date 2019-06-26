function openTab(type) {
    switch (type) {
        case 'thpt':
            $('.diem-tot-nghiep').show();
            $('.tuyen-sinh-lop10').hide();
            break;
        case '10':
            $('.diem-tot-nghiep').hide();
            $('.tuyen-sinh-lop10').show()
            break;
        case 'news':
            window.location.href = "https://www.baogiaothong.vn/giao-duc";
            break;

        default:
            break;
    }
}

function search(_this) {
    let formId = $(_this).attr('formId');
    let form = $(formId);
    let result;
    if (formId === '#tuyen-sinh-lop10') {
        result = $('.content-search-ts10');
    } else {
        result = $('.content-search-thpt');
    }
    result.html('<img style="width:200px" src="/imgs/loading.gif"/><em class="loadding"> Đang tải dữ liệu....</em>')
    $.ajax({
        url: form.attr('action'),
        data: form.serialize(),
        type: 'get',
        success: function(response) {
            result.html(response);
        },
        error: function(response) {
            result.html('errr');
        },
    });

}

function phodiem(id) {
    const result = $('#content-phodiem');
    $('.cate-phodiem').removeClass('active');
    $('#cate-phodiem' + id).addClass('active');
    result.html('<img style="width:200px" src="/imgs/loading.gif"/><em class="loadding"> Đang tải dữ liệu....</em>')
    $.ajax({
        url: '/pho-diem/' + id,
        type: 'get',
        success: function(response) {
            result.html(response);
        },
        error: function(response) {
            result.html('errr');
        },
    });
}

function paginate(elementLoad) {
    let link = '';
    $('ul.pagination li a').each(function(index, value) {
        link = $(this).attr('href');
        if (link) {
            $(this).attr('onclick', "loadUrl('" + elementLoad + "', '" + link + "')");
            $(this).removeAttr('href');
        }
    });
}

function loadUrl(e, url) {
    const result = $(e);
    result.html('<img style="width:200px" src="/imgs/loading.gif"/><em class="loadding"> Đang tải dữ liệu....</em>');
    window.location.href = "#main-tab";
    $.ajax({
        url: url,
        type: 'get',
        success: function(response) {
            result.html(response);
        },
        error: function(response) {
            result.html('errr');
        },
    });
}

$(document).ready(function() {
    phodiem(phodiemId);
});