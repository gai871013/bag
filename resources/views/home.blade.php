@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>ID</th>
                            <th>鉴定人姓名</th>
                            <th>鉴定时间</th>
                            <th>品牌</th>
                            <th>系列</th>
                            <th>公价</th>
                            <th>评估价格</th>
                            <th>操作</th>
                        </tr>
                        @foreach($lists as $v)
                            <tr>
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->auth_name }}</td>
                                <td>{{ $v->created_at }}</td>
                                <td>{{ $v->brand }}</td>
                                <td>{{ $v->series }}</td>
                                <td>{{ $v->price }}</td>
                                <td>{{ $v->evaluated_price }}</td>
                                <td>
                                    <a href="{{ route('detail', ['id' => $v->id]) }}" class="btn btn-xs btn-success"><i class="fa fa-view"></i>查看详情</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $lists->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
