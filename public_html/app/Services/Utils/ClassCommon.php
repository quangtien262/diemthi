<?php

namespace App\Services\Utils;

class ClassCommon
{

    public function formatText($string, $ext = '')
    {
        // remove all characters that aren"t a-z, 0-9, dash, underscore or space
        $string = strip_tags(str_replace('&nbsp;', ' ', $string));
        $string = str_replace('&quot;', '', $string);

        $string = self::_utf8ToAscii($string);
        $NOT_acceptable_characters_regex = '#[^-a-zA-Z0-9_ /]#';
        $string = preg_replace($NOT_acceptable_characters_regex, '', $string);
        // remove all leading and trailing spaces
        $string = trim($string);
        // change all dashes, underscores and spaces to dashes
        $string = preg_replace('#[-_]+#', '-', $string);
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('#[-]+#', '-', $string);
        return strtolower($string . $ext);
    }

    public static function _utf8ToAscii($str)
    {
        $chars = array(
            'a' => array('ấ', 'ầ', 'ẩ', 'ẫ', 'ậ', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'Ắ', 'Ằ', 'Ẳ', 'Ẵ', 'Ặ', 'á', 'à', 'ả', 'ã', 'ạ', 'â', 'ă', 'Á', 'À', 'Ả', 'Ã', 'Ạ', 'Â', 'Ă'),
            'e' => array('ế', 'ề', 'ể', 'ễ', 'ệ', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ', 'é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'Ê'),
            'i' => array('í', 'ì', 'ỉ', 'ĩ', 'ị', 'Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị'),
            'o' => array('ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'Ố', 'Ồ', 'Ổ', 'Ô', 'Ộ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ', 'ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ơ', 'Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ơ'),
            'u' => array('ứ', 'ừ', 'ử', 'ữ', 'ự', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự', 'ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'Ư'),
            'y' => array('ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ', 'Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ'),
            'd' => array('đ', 'Đ'),
        );
        foreach ($chars as $key => $arr) {
            $str = str_replace($arr, $key, $str);
        }
        return $str;
    }

    public function base64ToImage($base64, $output_file)
    {
        $file = fopen($output_file, "wb");

        $data = explode(',', $base64);

        fwrite($file, base64_decode($data[1]));
        fclose($file);
        
        return true;
    }

    public function htmlFooter()
    {
        $html = '';
        $conditions = ['parent_id' => '0'];
        $categorys = app('EntityCommon')->getRowsByConditions('footer', $conditions);
        foreach ($categorys as $idx => $cate) {
            //sub data
            $subConditions = ['parent_id' => $cate->id];
            $subCate = app('EntityCommon')->getRowsByConditions('footer', $subConditions);
            $countSub = count($subCate);
            $subData = '';
            if ($countSub > 0) {
                foreach ($subCate as $sub) {
                    $subData .= '<dd><a href="'.$sub->link.'" title="'.$sub->name.'">'.$sub->name.'</a></dd>';
                }
            }
            //
            if($idx == 0 || $idx == 3 || $idx ==6 || $idx ==9  || $idx ==12) {
                $html .= '<div class="col-xs-6">';
            }

            $html .= '<div class="col-md-4"><dl><dt>'.$cate->name.'</dt>'.$subData.'</dl></div>';

            if($idx == 2 || $idx == 5  || $idx == 8 || $idx == 11) {
                $html .= '</div>';
            }
        }
        if($idx != 2 || $idx != 5  || $idx != 8 || $idx != 11) {
            $html .= '</div>';
        }
        $html .= '</div>';

        return $html;
    }

    public function getPointFromString($string, $result)
    {
        $point = [
            'toan' =>'Toán:',
            'ngu_van' =>'Ngữ văn:',
            'lich_su' =>'Lịch sử:',
            'dia_ly' =>'Địa lí:',
            'gdcd' =>'GDCD:',
            'khxh' =>'KHXH:',
            'tieng_anh' =>'Tiếng Anh:',
        ];
        foreach($point as $key => $val) {
            
            $pointExplode = explode($val, $string);
            $count = count($pointExplode);
            if(!empty($pointExplode)) {
                $result[$key] = (float) $pointExplode[($count-1)];
            }
        }
        return $result;
    }

}
