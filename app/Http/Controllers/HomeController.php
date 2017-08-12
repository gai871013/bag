<?php

namespace App\Http\Controllers;

use App\Models\Bags;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Bags::orderBy('id','desc')->paginate(env('PAGE_SIZE'));
        return view('home',compact('lists'));
    }

    public function detail(Request $request)
    {
        $id = (int)$request->input('id');
        $bag = Bags::find($id);
        if(empty($bag)){
            return redirect()->back();
        }
        $type = ['钱包','手提包','单肩包','双肩包','公文包','晚宴包','托特包','小皮件','其他'];
        $cortex = ['羊皮','小羊皮','牛皮','小牛皮','鳄鱼皮','鸵鸟皮','蛇皮','蜥蜴皮','其他'];
        $style = ['男','女','中性'];
        $design = ['大','中','小'];
        $parts = ['包装盒','防尘口袋','卡书','发票'];
        $line = ['是','否'];
        $is_check_parts = ['是','否'];
        $girdle =['是','否'];
        $metals = ['是','否'];
        $logo = ['是','否'];
        $lining = ['是','否'];
        $smell = ['是','否'];
        $level_usage = ['全新未使用','九五新','九成新','八五新'];
        $edge_wear = ['边角无磨损','轻微磨损','中度磨损','严重磨损'];
        $metals_wear = ['五金件无磨损','轻微磨损','中度磨损','严重磨损'];
        $blot = ['有','无'];
        $colour_fading = ['有','无'];
        $off_line = ['有','无'];
        $chip = ['有','无'];
        $level_new_old = ['N','S','A','B'];

        return view('detail', compact(
            'bag',
            'type',
            'cortex',
            'style',
            'design',
            'parts',
            'line',
            'is_check_parts',
            'girdle',
            'metals',
            'logo',
            'lining',
            'smell',
            'level_usage',
            'edge_wear',
            'metals_wear',
            'blot',
            'colour_fading',
            'off_line',
            'chip',
            'level_new_old'
        ));
    }
}
