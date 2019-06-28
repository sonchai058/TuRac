@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('accountCharts.index') !!}">ผังบัญชี</a>
        </li>
        <li class="breadcrumb-item active">ผู้ว่าจ้าง</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            {{-- search --}}
                @include('customers.search')
            {{-- endsearch --}}
             <div class="row">
                 <div class="col-lg-12">
                        @include('customers.table')
                        <div class="pull-right mr-3">
                               
                        </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

