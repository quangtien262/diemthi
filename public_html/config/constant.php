<?php

//return code
define('RETURN_SUCCESS', 'success');
define('RETURN_ERROR', 'error');
define('PERMISSION_OF_ADMIN', 'edit articles');

define('MSG_UPDATE_SORT_ORDER_SUCCESS', 'Sắp sếp lại thứ tự thành công');
define('MSG_UPDATE_COLUMN_DATA_SUCCESS', 'Cập nhật dữ liệu thành công');

define('LANDING_PAGE_ITEM_ID', 33);

define('COLUMN_TYPE', serialize(['INT', 'VARCHAR', 'TEXT', 'LONGTEXT', 'DATE', 'DATETIME']));
define('IS_REQUIRE', serialize([
    0 => 'NOT REQUIRE',
    1 => 'REQUIRE',
]));
define('IS_EDIT', serialize([
    1 => 'EDIT',
    0 => 'NOT EDIT',
]));
define('ADD2SEARCH', serialize([
    1 => 'Hiển thị trong form search',
    0 => 'Không hiển thị trong form search',
]));
define('SHOW_IN_LIST', serialize([
    1 => 'Hiển thị ở trang danh sách',
    0 => 'Không hiển thị ở trang danh sách',
    ]));
define('TYPE_EDIT', serialize([
    'text' => 'Text',
    'number' => 'Number',
    'textarea' => 'Textarea',
    'select' => 'Select',
    'selects' => 'Multiple select',
    'select2' => 'Select <Library select2>',
    'selects2' => 'Multiple select <Library select2>',
    'summoner' => 'Summoner',
    'ckeditor' => 'Ckeditor',
    'image_laravel' => 'Image <Laravel file manager>',
    'images_laravel' => 'Images <Laravel file manager>',
    'image' => 'Image',
    'images' => 'Images',
    'video' => 'File Video <laravel file manager>',
    'pdf' => 'File pdf <laravel file manager>',
    'files' => 'Multiple file',
    'password' => 'Password',
    'encryption' => 'Password <Encryption>',
    'date' => 'Date',
    'input' => 'Select Input',
    'block' => 'Block (Cần tạo sẵn 2 bảng:block_type & block_item)',
]));

define('TABLE_TYPE_SHOW', serialize([
    0 => 'Table basic',
    1 => 'Kiểu kéo thả ',
    3 => 'Landingpage',
    4 => 'Block for Landingpage',
    5 => 'Chỉ có 1 data master',
]));

define('SEARCH_TYPE', serialize([
    1 => 'Like',
    2 => 'equal',
    3 => 'different',
    4 => '% Like',
    5 => 'Like %',
    6 => 'between dates',
]));

define('FORM_DATA_TYPE', serialize([
    1 => 'Mở sang 1 cửa sổ mới',
    2 => 'Mở dưới dang popup',
]));

define('FAST_EDIT', serialize([
    1 => 'Cho phép sửa nhanh ở trang list',
    0 => 'Mở dưới dang popup',
]));
