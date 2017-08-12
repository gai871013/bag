@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">详情</div>

                    <div class="panel-body">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th colspan="10"><h1 style="text-align: center;">包包检验单</h1></th>
                            </tr>
                            <tr>
                                <td rowspan="4"></td>
                                <td>客户姓名</td>
                                <td colspan="2">{{ $bag->name }}</td>
                                <td>鉴定人</td>
                                <td colspan="2">{{ $bag->auth_name }}</td>
                                <td>日期</td>
                                <td colspan="2">{{ $bag->date }}</td>
                            </tr>
                            <tr>
                                <td>品牌</td>
                                <td colspan="2">{{ $bag->brand or '' }}</td>
                                <td>系列</td>
                                <td colspan="2">{{ $bag->series }}</td>
                                <td>公价</td>
                                <td colspan="2">{{ $bag->price }}</td>
                            </tr>
                            <tr>
                                <td>款型</td>
                                <td colspan="3">
                                    @foreach($style as $k => $v)
                                        @if($bag->style == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                                <td rowspan="2">配件</td>
                                <td colspan="4" rowspan="2">
                                    @foreach($parts as $k => $v)
                                        @if($bag->parts == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>款式</td>
                                <td colspan="3">
                                    @foreach($design as $k => $v)
                                        @if($bag->design == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">类型</td>
                                <td colspan="8">
                                    @foreach($type as $k => $v)
                                        @if($bag->type == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">皮质</td>
                                <td colspan="8">
                                    @foreach($cortex as $k => $v)
                                        @if($bag->cortex == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="14">检测流程</td>
                                <td rowspan="7">外观检查</td>
                                <td colspan="7">
                                    <b>走线:</b>
                                    @foreach($line as $k => $v)
                                        @if($bag->line == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>配件:</b>
                                    @foreach($is_check_parts as $k => $v)
                                        @if($bag->is_check_parts == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>肩带:</b>
                                    @foreach($girdle as $k => $v)
                                        @if($bag->girdle == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>五金件:</b>
                                    @foreach($metals as $k => $v)
                                        @if($bag->metals == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>logo:</b>
                                    @foreach($logo as $k => $v)
                                        @if($bag->logo == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>内衬:</b>
                                    @foreach($lining as $k => $v)
                                        @if($bag->lining == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>气味:</b>
                                    @foreach($smell as $k => $v)
                                        @if($bag->smell == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="7">磨碎程度</td>
                                <td colspan="7">
                                    <b>使用程度:</b>
                                    @foreach($level_usage as $k => $v)
                                        @if($bag->level_usage == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>边角无磨损:</b>
                                    @foreach($edge_wear as $k => $v)
                                        @if($bag->edge_wear == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>五金件无磨损:</b>
                                    @foreach($metals_wear as $k => $v)
                                        @if($bag->metals_wear == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>污渍:</b>
                                    @foreach($blot as $k => $v)
                                        @if($bag->blot == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>褪色:</b>
                                    @foreach($colour_fading as $k => $v)
                                        @if($bag->colour_fading == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>脱线:</b>
                                    @foreach($off_line as $k => $v)
                                        @if($bag->off_line == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <b>开胶:</b>
                                    @foreach($chip as $k => $v)
                                        @if($bag->chip == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">细节图</td>
                                <td colspan="8">
                                    @foreach(json_decode($bag->details) as $v)
                                        <a href="{{ Illuminate\Support\Facades\Storage::url($v) }}" target="_blank">
                                            <img src="{{ Illuminate\Support\Facades\Storage::url($v) }}" style="height:200px;">
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">鉴定图</td>
                                <td colspan="8">
                                    @foreach(json_decode($bag->auth_details) as $v)
                                        <a href="{{ Illuminate\Support\Facades\Storage::url($v) }}" target="_blank">
                                            <img src="{{ Illuminate\Support\Facades\Storage::url($v) }}" style="height:200px;">
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">综合新旧级别</td>
                                <td colspan="8">
                                    @foreach($level_new_old as $k => $v)
                                        @if($bag->level_new_old == $k)
                                            ☑ {{ $v }} &nbsp;
                                        @else
                                            ☐ {{ $v }} &nbsp;
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    购买时间：{{ $bag->buy_time }}
                                </td>
                                <td colspan="5">
                                    评估价格：{{ $bag->evaluated_price }}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="10">
                                    <pre>
                                        注释：
                                        1、如多件物品，每件使用一份检验单。
                                        2、“□”打钩选择，“      ”填写数字或文字描述
                                        3、检验单填写完毕后需上传照片至附加。
                                        4、CRM中配件及外观描述中如果可以写清，则不必填写检验单
                                    </pre>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
