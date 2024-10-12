<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('admin.dashboard') }}">
            <span class="align-middle">Contruction Tshirt Kit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Page Management
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-home"></i><span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.categories.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.categories.index') }}">
                    <i class="fas fa-pager"></i> <span
                        class="align-middle">Category</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.sub-categories.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.sub-categories.index') }}">
                    <i class="fas fa-pager"></i> <span
                        class="align-middle">Sub Category</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.attributes.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.attributes.index') }}">
                    <i class="fas fa-pager"></i> <span
                        class="align-middle">Attribute</span>
                </a>
            </li>
            
            <li class="sidebar-item {{ request()->routeIs('admin.products.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.products.index') }}">
                    <i class="fas fa-pager"></i> <span
                        class="align-middle">Products</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.banners.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.banners.index') }}">
                    <i class="fas fa-pager"></i> <span
                        class="align-middle">Banner</span>
                </a>
            </li>
        </ul>
    </div>
</nav>