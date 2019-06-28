


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
             @include('coreui-templates::common.errors')
            {{-- search --}}
                @include('account_charts.search')
            {{-- endsearch --}}

            {{-- easy ui tree --}}
            <div class="row">
                <div class="col-lg-8">
                    <div class="row ">
                        <div class="col-md-8">
                                 <a class=" btn btn-info m-1" href="{!! route('accountCharts.create') !!}"><i class="icofont-plus-circle"></i> สร้างผังบัญชี</a>
                                <a class=" btn btn-warning m-1" href="{!! route('accountCharts.create') !!}"><i class="icofont-ui-edit"></i> แก้ไขผังบัญชี</a>
                                <a class=" btn btn-danger m-1" href="{!! route('accountCharts.create') !!}"><i class="icofont-ui-delete"></i> ลบข้อมูล</a>
                            </div>
                        <div class="col-md-4 text-right">
                            <a class=" btn btn-info " href="#"><i class="icofont-chart-histogram"></i> กรองรายงาน</a>
                            <a class=" btn btn-info  " href="#"> excel</a>
                            
                        </div>
                    </div>

                    @include('account_charts.index_tree')
                    <div class="pull-right mr-3">
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mt-5">
                        <div class="card">
                            <div class="p-3 text-center"><b>ข้อมูลบัญชี</b></div>
                            <div class="card-body">
                                    {!! Form::open(['route' => 'accountCharts.store']) !!}
                                    
                                        @include('account_charts.fields')
                                    {!! Form::close() !!}
                                </form>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
         </div>
    </div>
@endsection

