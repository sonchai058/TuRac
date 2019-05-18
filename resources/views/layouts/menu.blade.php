<li class="nav-item {{ Request::is('dogs*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('dogs.index') !!}"><i class="nav-icon icon-cursor"></i><span>Dogs</span></a>
</li>
