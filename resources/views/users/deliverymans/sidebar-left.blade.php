<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ url('/')}}">
            <img src="artisan/vendors/images/deskapp-logo.png" alt="" class="dark-logo" />

        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-house"></span
                        ><span class="mtext">Home</span>
                    </a>
                    <ul class="submenu">
                        <li> <a href="{{url('/redirect')}}">Dashboard </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">

                        <span class="micon bi bi-textarea-resize"></span
                        ><span class="mtext">Management</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ url('order_delivery') }}">the Orders </a></li>
                        <li>
                            <a href="{{ url('view_type') }}">Type Management</a>
                        </li>
                    </ul>
                </li>



                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span
                        ><span class="mtext">Products</span>
                    </a>

                    <ul class="submenu">
                        <li><a href="{{ url('view_product') }}">Add Product</a></li>
                        <li><a href="{{ url('show_product') }}">List Products</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('order') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span
                        ><span class="mtext">Order Management</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" href="{{ url('charts') }}" class="dropdown-toggle">
                        <span class="micon bi bi-pie-chart"></span>
                        <span class="mtext">Charts</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ url('charts') }}">Statistics Products</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
