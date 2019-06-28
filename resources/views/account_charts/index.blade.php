@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('accountCharts.index') !!}">ผังบัญชี</a>
        </li>
        <li class="breadcrumb-item active">ข้อมูลบัญชี</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')

             <span class="pull-left">
                <a href="{!! route('accountCharts.index') !!}" class=" btn btn-info btn-lg active btn-header">ผังบัญชี Tu-Acc</a>
                <a  href="{!! route('accountChartsTu.index') !!}" class=" btn btn-info btn-lg  btn-header">ผังบัญชี มธ</a>
            </span>
                
            <span class="pull-right">
                <strong style="float:right">ปีงบประมาณ: 2562</strong> 
            </span>
            <hr>
       
         
            <div class="row">
                <div class="col-md-12" id="main-index">
                 
                    {{-- easy ui tree --}}
                    <div class="row ">
                        <div class="col-md-7 col-sm-6">
                                {{-- search --}}
                                @include('account_charts.search')
                                {{-- endsearch --}}
                              
                                {{-- <a id="acc_edit" class=" btn btn-warning m-1" href="#"><i class="icofont-ui-edit"></i> แก้ไขผังบัญชี</a>
                                <a id="acc_delete" class=" btn btn-danger m-1" href="#"><i class="icofont-ui-delete"></i> ลบข้อมูล</a> --}}
                            
                            </div>
                        <div class="col-md-5 text-right col-sm-6">
                            <a id="acc_create" class=" btn  btn-create" href="#"><span> <img src="{{ url('/img/icon/plus.png') }}" alt=""></span> เพิ่มข้อมูล</a>
                            <a class=" btn  btn-filter " data-toggle="modal" data-target="#ModalReport" ><span> <img src="{{ url('/img/icon/rising.png') }}" alt=""></span> กรองรายงาน</a>
                            <a class="" href="{{ url('accTuAcc/export') }}"><span> <img src="{{ url('/img/icon/excel.png') }}" alt=""></span></a>
                            
                        </div>
                    </div>

                    @include('account_charts.index_tree')
                    <br/>
                    <div class="pull-right mr-3">
                        
                    </div>
                 
                 
                </div>
              
                <div class="col-md-4" id="main-info">
                    <div class="collapse" id="acc_data">
                        <div class="mt-5">
                            <div class="card">
                                <div class="p-3 text-center"><b>ข้อมูลบัญชี</b></div>
                                <div class="card-body">
                                    <form id="acc_form">
                                        @include('account_charts.fields')
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>

         
         </div>
    </div>
@endsection

{{-- @push('scripts')
@endpush --}}