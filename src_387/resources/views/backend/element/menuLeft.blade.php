<aside class="sidebar-container">
    <div class="sidebar-header">
        <div class="pull-right pt-lg text-muted hidden">
            <em class="ion-close-round"></em>
        </div>
        <a class="sidebar-header-logo" href="#">
            {{--  <img src="/img/logo.png" data-svg-replace="/img/logo.svg">  --}}
            <svg xmlns="http://www.w3.org/2000/svg" 
                xmlns:xlink="http://www.w3.org/1999/xlink" 
                version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" 
                enable-background="new 0 0 512 512" xml:space="preserve">
                <g>
                    <path d="M256,32C132.288,32,32,132.288,32,256s100.288,224,224,224s224-100.288,224-224S379.712,32,256,32z M391.765,391.765         C355.5,428.028,307.285,448,256,448s-99.5-19.972-135.765-56.235C83.972,355.5,64,307.285,64,256s19.972-99.5,56.235-135.765         C156.5,83.972,204.715,64,256,64s99.5,19.972,135.765,56.235C428.028,156.5,448,204.715,448,256S428.028,355.5,391.765,391.765z" fill="currentColor"></path>
                    <g>
                        <path d="M200.043,106.067c-40.631,15.171-73.434,46.382-90.717,85.933H256L200.043,106.067z" fill="currentColor"></path>
                        <path d="M359.973,134.395C332.007,110.461,295.694,96,256,96c-7.966,0-15.794,0.591-23.448,1.715L310.852,224L359.973,134.395z"></path>
                        <path d="M412.797,288c2.099-10.34,3.203-21.041,3.203-32c0-36.624-12.314-70.367-33.016-97.334L311,288H412.797z" fill="currentColor"></path>
                        <path d="M311.959,405.932c40.631-15.171,73.433-46.382,90.715-85.932H256L311.959,405.932z"></path>
                        <path d="M152.046,377.621C180.009,401.545,216.314,416,256,416c7.969,0,15.799-0.592,23.456-1.716L201.164,288L152.046,377.621z" fill="currentColor"></path>
                        <path d="M99.204,224C97.104,234.34,96,245.041,96,256c0,36.639,12.324,70.394,33.041,97.366L201,224H99.204z"></path>
                    </g>
                </g>
                </svg>
            <span class="sidebar-header-logo-text">Admin</span>
        </a>
    </div>
    <div class="sidebar-content">
        <nav class="sidebar-nav">



            {!! app('ClassTables')->getHtmlMenuAdmin(0) !!}

            <li><a class="ripple" href="{{ route('configTbl') }}"><span class="nav-icon"><em class="ion-gear-b"></em></span><span>Config Table</span></a></li>

            <!--            <li>
                                <a class="ripple" href="#"><span class="pull-right nav-caret"><em class="ion-ios-arrow-right"></em></span><span class="pull-right nav-label"></span><span class="nav-icon"><img class="hidden" src="" data-svg-replace="img/icons/navicon.svg" alt="MenuItem"></span><span>Tables</span></a>
                                <ul class="sidebar-subnav" id="tables">
                                    <li><a class="ripple" href="tables.classic.html"><span class="pull-right nav-label"></span><span>Classic</span></a></li>
                                    <li><a class="ripple" href="datatable.html"><span class="pull-right nav-label"></span><span>Datatable</span></a></li>
                                    <li><a class="ripple" href="bootgrid.html"><span class="pull-right nav-label"></span><span>Bootgrid</span></a></li>
                                </ul>
                            </li>-->

        </nav>
    </div>
</aside>