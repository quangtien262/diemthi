<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;

class BlockController extends BackendController
{
    public function index($landingPageId)
    {
        $blocks = app('EntityCommon')->getRowsByConditions('block', [], 30);

        return view('backend.block.index', compact('blocks', 'landingPageId'));
    }

    public function formBlock(Request $request, $landingPageId, $blockId, $landingPageItemId = 0)
    {
        $blocks = app('EntityCommon')->getDataById('block', $blockId);
        $blockItems = app('EntityCommon')->getRowsByConditions('block_item', ['block_type_id' => $blockId], 30);
        $landingPageItems = app('EntityCommon')->getDataById('landing_page_item', $landingPageItemId);
        $landingPageItemsData = [];
        if(!empty($landingPageItems)) {
            $landingPageItemsData = json_decode($landingPageItems->data, true);
            // dd($landingPageItemsData);
        }
        $countTab = 0;
        return view('backend.block.formBlock', compact('countTab','blocks', 'blockItems', 'blockId', 'landingPageId', 'landingPageItems', 'landingPageItemsData', 'landingPageItemId'));
    }

    public function submitFormBlock(Request $request, $landingPageId, $blockId, $landingPageItemId = 0)
    {
        if (!empty(count($_POST))) {
            $data = [
                'data' => json_encode($_POST),
                'landing_page_id' => $landingPageId,
                'block_id' => $blockId,
                'name' => $request->name[0],
            ];
            
            if ($landingPageItemId > 0) {
                $data = app('EntityCommon')->updateData('landing_page_item', $landingPageItemId, $data);
            } else {
                $data = app('EntityCommon')->insertData('landing_page_item', $data);
            }
        }
        return back()->withInput();
    }
}
