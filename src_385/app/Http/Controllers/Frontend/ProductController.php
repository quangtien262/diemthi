<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Product;

class ProductController extends Controller {

    public function listProduct($name, $id) {
        $listProduct = product::where('category_id', '=', $id)->paginate(30);
        return view('frontend.product.listProduct', [
            'listProduct' => $listProduct,
        ]);
    }
    public function detailProduct($name, $id) {

        $detaiproduct = product::find($id);
        $listProduct = product::where('category_id', '=', $id)->paginate(8);
        return view('frontend.product.detailProduct', [
            'detaiproduct' => $detaiproduct,
            'listProduct' => $listProduct,
        ]);
    }

}
