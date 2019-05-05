<?php
$menuJson = file_get_contents(JSON_MENU_FILE);
$menuArr = json_decode($menuJson, true);
?>
<ul>
    <li>
        <a href="{{ url('admin') }}" class="ripple">
            <span class="nav-icon">
                <img src="" data-svg-replace="{{ url('backend/img/icons/aperture.svg') }}" alt="MenuItem" class="hidden">
            </span>
            <span>Admin home page</span>
        </a>
    </li>
    @foreach($menuArr['Menu'] as $menu)
    <li>
        <a href="{{ !empty($menu['routeName']) ?  url(route($menu['routeName'])):'#' }}{{ !empty($menu['param'])?$menu['param']:'' }}" class="ripple">
            @if(count($menu['subMenu']) >0 )
            <span class="pull-right nav-caret">
                <em class="ion-ios-arrow-right"></em>
            </span>
            @endif
            <span class="pull-right nav-label"></span>
            <span class="nav-icon">
                <img src="" data-svg-replace="{{ url('backend/img/icons/navicon.svg') }}" alt="MenuItem" class="hidden">
            </span>
            <span>{{ $menu['name'] }}</span>
        </a>
        @if(count($menu['subMenu']) >0 )
        <ul class="sidebar-subnav">
            @foreach($menu['subMenu'] as $sub)
            <li>
                <a href="{{ !empty($sub['routeName']) ?  url(route($sub['routeName'])):'#' }}{{ !empty($sub['param'])?$sub['param']:'' }}" 
				   class="ripple">
                    <span class="pull-right nav-label"></span>
                    <span>{{ $sub['name'] }}</span>
                </a>
            </li>
            @endforeach
        </ul>
        @endif
    </li>
    @endforeach
</ul>
