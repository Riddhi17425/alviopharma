<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-4 me-0">
    <div class="d-flex flex-column h-100">
        <a href="{!! route('home') !!}" class="mb-0 brand-icon">
            <span class="logo-icon">
                <i class="bi bi-bag-check-fill fs-4"></i>
            </span>
            <span class="logo-text">{{ Auth::user()->name }}</span>
        </a>

        <ul class="menu-list flex-grow-1 mt-3">
            <li>
                <a class="m-link" href="{!! route('admin/dashboard') !!}">
                    <i class="icofont-dashboard-web fs-5"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a class="m-link{{ Request::routeIs('menubanner.index') ? ' active' : '' }}"
                    href="{{ route('menubanner.index') }}">
                    <i class="icofont-image fs-5"></i>
                    <span>Menu Banner Details</span>
                </a>
            </li>
            <li>
                <a class="m-link{{ Request::routeIs('homemap.index') ? ' active' : '' }}"
                    href="{{ route('homemap.index') }}">
                    <i class="icofont-google-map fs-5"></i>
                    <span>Home Map</span>
                </a>
            </li>
            <li>
                <a class="m-link{{ Request::routeIs('ourteam.index') ? ' active' : '' }}"
                    href="{{ route('ourteam.index') }}">
                    <i class="icofont-users-social fs-5"></i>
                    <span>Our Team</span>
                </a>
            </li>

            <li>
                <a class="m-link{{ Request::routeIs('brand.index') ? ' active' : '' }}"
                    href="{{ route('brand.index') }}">
                    <i class="icofont-users-social fs-5"></i>
                    <span>Brand</span>
                </a>
            </li>
            
            <li>
                <a class="m-link{{ Request::routeIs('clientel.index') ? ' active' : '' }}"
                    href="{{ route('clientel.index') }}">
                    <i class="icofont-users-social fs-5"></i>
                    <span>Clientel</span>
                </a>
            </li>

            <li>
                <a class="m-link{{ Request::routeIs('keyingredient.*') ? ' active' : '' }}"
                    href="{{ route('keyingredient.index') }}">
                    <i class="icofont-ui-flask fs-5"></i>
                    <span>Key Ingredients</span>
                </a>
            </li>


            <li>
                <a class="m-link{{ Request::routeIs('blog.index') ? ' active' : '' }}"
                    href="{{ route('blog.index') }}">
                    <i class="icofont-blogger fs-5"></i>
                    <span>Blog</span>
                </a>
            </li>
            <li>
                <a class="m-link d-flex align-items-start {{ Request::routeIs('ourproduction.index') ? ' active' : '' }}"
                    href="{{ route('ourproduction.index') }}">
                    <i class="icofont-gear fs-5 me-2 mt-1"></i>
                    <span>Our Production & Our Responsibility</span>
                </a>
            </li>
            <li>
                <a class="m-link{{ Request::routeIs('milestone.index') ? ' active' : '' }}"
                    href="{{ route('milestone.index') }}">
                    <i class="icofont-flag-alt-2 fs-5"></i>
                    <span>Milestone</span>
                </a>
            </li>

            <li>
                <a class="m-link{{ Request::routeIs('product.index') ? ' active' : '' }}"
                    href="{{ route('product.index') }}">
                    <i class="icofont-blogger fs-5"></i>
                    <span>Product</span>
                </a>
            </li>

        </ul>

        <!-- Menu: menu collapse btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>