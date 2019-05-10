<?php

namespace App\Services\Entity;

use App\Model\Category;

class ClassCategory
{
    public function getCategoryByConditions($conditions)
    {
        $categorys = Category::select([
        'category.id as cateId',
        'category.name as cateName',
        'category.link',
        'route.route_name as routeName',
        'route.id as routeId',
        ])
        ->leftJoin('route', 'route.id', 'category.route_id')
        ->orderBy('category.sort_order', 'asc');
        foreach ($conditions as $key => $val) {
            $categorys = $categorys->where($key, $val);
        }
        $categorys = $categorys->get();

        return $categorys;
    }

    public function htmlCategory()
    {
        $html = '<ul class="nav navbar-nav"> ';
        $conditions = ['category.parent_id' => '0'];
        $categorys = self::getCategoryByConditions($conditions);
        foreach ($categorys as $cate) {
            $subConditions = ['category.parent_id' => $cate->cateId];
            $subCate = self::getCategoryByConditions($subConditions);
            $countSub = count($subCate);
            $subData = '';
            $liClass = '';
            $aAttr = '';
            $iconDown = '';
            if ($countSub > 0) {
                $iconDown = '<span class="caret"></span>';
                $liClass = 'dropdown';
                $aAttr = 'class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"';
                $subData .= '<ul class="dropdown-menu">';
                foreach ($subCate as $sub) {
                    $subLink = $sub->link;
                    if(!empty($sub->routeName)) {
                        $subLink = self::getLinkCategory($sub);
                    }
                    $subData .= '<li><a href="'.$subLink.'" title="'.$sub->cateName.'">'.$sub->cateName.'</a></li>';
                }
                $subData .= '</ul>';
            }
            $link = $cate->link;
            if(!empty($cate->routeName)) {
                $link = self::getLinkCategory($cate);
            }
            $html .= '<li class="'.$liClass.'"><a '.$aAttr.' href="'.$link.'" title="'.$cate->cateName.'">'.$cate->cateName.$iconDown.'</a>'.$subData.'</li>';
        }
        $html .= '</ul>';

        return $html;
    }

    public function htmlCategoryFooter()
    {
        $html = '<ul>';
        $html .= '<li><a href="/" title="Trang chủ">Trang chủ</a></li>';
        $conditions = ['category.parent_id' => '0'];
        $categorys = self::getCategoryByConditions($conditions);
        foreach ($categorys as $cate) {
            $link = route($cate->routeName, [app('ClassCommon')->formatText($cate->cateName), $cate->cateId]);
            $html .= '<li><a href="'.$link.'" title="'.$cate->cateName.'">'.$cate->cateName.'</a></li>';
        }
        $html .= '</ul>';

        return $html;
    }

    public function getLinkCategory($category)
    {
        $link = '';
        switch ($category->routeName) {
            case 'home':
                $link = route('home');
                break;

            case 'contact':
                $link = route('contact');
                break;
            default:
                $link = route($category->routeName, [app('ClassCommon')->formatText($category->cateName), $category->cateId]);
                break;
        }

        return $link;
    }
}
