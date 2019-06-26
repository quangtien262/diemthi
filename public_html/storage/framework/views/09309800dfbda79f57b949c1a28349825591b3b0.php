<nav>
    <ul class="visible-xs visible-sm">
        <li><a class="menu-link menu-link-slide" id="sidebar-toggler" href="#"><span><em></em></span></a></li>
    </ul>
    <ul class="hidden-xs">
        <li><a class="menu-link menu-link-slide" id="offcanvas-toggler" href="#"><span><em></em></span></a></li>
    </ul>
    <ul class="pull-right">
        <li><a class="ripple" id="header-search" href="#"><em class="ion-ios-search-strong"></em></a></li>
        <li class="dropdown"><a class="dropdown-toggle has-badge ripple" href="#" data-toggle="dropdown"><em class="ion-person"></em><sup class="badge bg-danger">3</sup></a>
            <ul class="dropdown-menu dropdown-menu-right md-dropdown-menu">
                <li>
                    <a onclick="loadDataPopup('<?php echo e(route('formRow', [35, \Auth::user()->id])); ?>')" data-toggle="modal" data-target=".bs-modal-lg">
                        <em class="ion-gear-b icon-fw"></em>
                        Profile
                    </a>
                </li>
                <li class="divider" role="presentation"></li>
                <li><a href="<?php echo e(route('logout')); ?>"><em class="ion-log-out icon-fw"></em>Logout</a></li>
            </ul>
        </li>
        <li><a class="ripple" id="header-settings" href="#"><em class="ion-gear-b"></em></a></li>
    </ul>
</nav>