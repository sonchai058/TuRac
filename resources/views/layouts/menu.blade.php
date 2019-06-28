<li class="nav-item {{ Request::is('accountCharts*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('accountCharts.index') !!}"><i class="nav-icon icon-cursor"></i><span>ผังบัญชี</span></a>
</li>
<li class="nav-item {{ Request::is('customers*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('customers.index') !!}"><i class="nav-icon icon-cursor"></i><span>ข้อมูลลูกค้า</span></a>
</li>
<li class="nav-item {{ Request::is('researchers*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('researchers.index') !!}"><i class="nav-icon icon-cursor"></i><span>ข้อมูลนักวิจัย</span></a>
</li>
