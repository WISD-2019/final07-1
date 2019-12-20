@extends('admin.layouts.master')

@section('title', '主控台')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            主控台 <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> 主控台
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<table>
    <tr>
        <td width="200" align="center" valign="center">
            <div class="product-left">
                <h5>訂單編號</h5>
            </div>
        </td>
        <td width="200" align="center" valign="center">
            <div class="product-left">
                <h5>姓名</h5>
            </div>
        </td>
        <td width="200" align="center" valign="center">
            <div class="product-left">
                <h5>下單日期</h5>
            </div>
        </td>
        <td width="200" align="center" valign="center">
            <div class="product-left">
                <h5>總金額</h5>
            </div>
        </td>
    </tr>



@foreach($data as $show)
        <tr >
            <td width="200" align="center" valign="center">
                <div class="product-left">
                    <h5>{{$show->order_id}}</h5>

                </div>
            </td>
            <td width="200" align="center" valign="center">
                <div class="product-left">
                    <h5>{{$show->name}}</h5>
                </div>
            </td>
            <td width="200" align="center" valign="center">
                <div class="product-left">
                    <h5>{{$show->created_at}}</h5>
                </div>
            </td>
            <td width="200" align="center" valign="center">
                <div class="product-left">
                    <h5>{{$show->total}}</h5>
                </div>
            </td>
        </tr>
    @endforeach

</table>
<!-- /.row -->

@endsection
