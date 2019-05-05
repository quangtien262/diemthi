//(function () {
//    $('.fontawesome-icon-list a').click(function () {
//        alert($(this).text());
//    });
//})();


(function () {
    $('.main_icon{{ $i }} a').click(function () {
        alert($('fa-' + $('this').text()));
            console.log($('fa-' + $('this').text()));
            $('.icon_{{$i}}').val($('fa-' + $('this').text()));
            displayElement('', '.main_icon{{ $i }}');
    });
});