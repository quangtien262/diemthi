<?php

namespace App\Services\Utils;

class FrontendUtils
{
    public function getPercentPoint($monthi = 'toan', $point = 0)
    {
        $conditions = [$monthi => $point];
        $count = app('EntityCommon')->getCountByConditions('diem_thi_thpt', $conditions);
        $bot = ($count * 100)/500;
        $width = [
            'top' => (500 - $bot),
            'bot' => $bot
        ];
        $html = '<div class="col-phodiem01" style="height:'.$width['top'].'px"></div>
                <div class="col-phodiem02" style="height:'.$width['top'].'px"></div>';
    }

}
