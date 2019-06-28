@section('css')
<link rel="stylesheet" href="{{ url('vendor/easyui/themes/material-teal/easyui.css') }}" />
<link rel="stylesheet" href="{{ url('vendor/easyui/themes/icon.css') }}" />
<!-- toastr notifications -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

@endsection



<div class="col-md-12">
    <table id="tg" class="easyui-treegrid" title="&emsp;แผนผังบัญชี" style="width:100%;"></table>

    <div id="mm" class="easyui-menu" >
        <div onclick="append()" data-options="iconCls:'icon-add'">เพิ่ม</div>
        <div onclick="editIt()" data-options="iconCls:'icon-edit'">แก้ไข</div>
        <div onclick="removeIt()" data-options="iconCls:'icon-remove'">ลบ</div>
        {{-- <div class="menu-sep"></div>
        <div onclick="collapse()">Collapse</div>
        <div onclick="expand()">Expand</div> --}}
    </div>
</div>


@section('scripts')
<script src="{{ url('vendor/easyui/jquery.easyui.min.js') }}"></script>
<script src="{{ url('js/datagrid-filter.js') }}"></script>
<script src="{{ url('js/treegrid-dnd.js') }}"></script>
<script src="{{ url('js/modules/account_charts/index.js') }}"></script>
  <!-- toastr notifications -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@endsection
