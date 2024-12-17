<!-- Start Sidebar -->
<aside id="app-menu"
    class="hs-overlay fixed inset-y-0 start-0 z-60 hidden w-sidenav min-w-sidenav bg-primary-blue overflow-y-auto -translate-x-full transform transition-all duration-200 hs-overlay-open:translate-x-0 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden [--body-scroll:true] [--overlay-backdrop:true] lg:[--overlay-backdrop:false]">

    <div class="flex flex-col h-full">
        <!-- Sidenav Logo -->
        <div class="sticky top-0 flex h-topbar items-center justify-between px-6">
            <a href="/">
                <img src="/images/logo.png" alt="logo" class="flex h-8">
            </a>
        </div>

        <div class="p-4 h-[calc(100%-theme('spacing.topbar'))] flex-grow" data-simplebar>
            <!-- Menu -->
            <ul class="admin-menu hs-accordion-group flex w-full flex-col gap-1">
                <li class="px-3 py-2 text-sm font-medium text-default-400">Menu</li>

                <li class="menu-item">
                    <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                        href="/">
                        <i class="i-ph-gauge-duotone text-2xl"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="px-3 py-2 text-sm font-medium text-default-400">Apps</li>

                <li class="menu-item">
                    <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                        href="{{ route('second', ['apps', 'calendar']) }}">
                        <i class="i-ph-calendar-duotone text-2xl"></i>
                        Calendar
                    </a>
                </li>

                <li class="menu-item">
                    <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                        href="{{ route('second', ['apps', 'gallery'])}}">
                        <i class="i-ph-image-duotone text-2xl"></i>
                        Images Gallery
                    </a>
                </li>

                <li class="menu-item">
                    <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                        href="{{ route('second', ['apps', 'plans'])}}">
                        <i class="i-ph-money-wavy-duotone text-2xl"></i>
                        Pricing Plans
                    </a>
                </li>

                <li class="menu-item">
                    <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                        href="{{ route('second', ['apps', 'contacts'])}}">
                        <i class="i-ph-user-circle-duotone text-2xl"></i>
                        Contacts
                    </a>
                </li>

                <li class="px-3 py-2 text-sm font-medium text-default-400">Pages</li>

                <li class="menu-item">
                    <a href="{{ route('any','starter-page')}}"
                        class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                        <i class="i-ph-clipboard-text-duotone text-2xl"></i>
                        <span class="menu-text"> Starter Pages </span>
                    </a>
                </li>

                <li class="px-3 py-2 text-sm font-medium text-default-400">Elements</li>

                <li class="menu-item hs-accordion">
                    <a href="javascript:void(0)"
                        class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                        <i class="i-ph-layout-duotone text-2xl"></i>
                        <span class="menu-text"> Components </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                        <ul class="mt-1 space-y-1">
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'accordion'])}}">
                                    <i class="menu-dot"></i>
                                    Accordion
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'alerts'])}}">
                                    <i class="menu-dot"></i>
                                    Alert
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'avatars'])}}">
                                    <i class="menu-dot"></i>
                                    Avatars
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'buttons'])}}">
                                    <i class="menu-dot"></i>
                                    Buttons
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'badges'])}}">
                                    <i class="menu-dot"></i>
                                    Badges
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'breadcrumbs'])}}">
                                    <i class="menu-dot"></i>
                                    Breadcrumbs
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'cards'])}}">
                                    <i class="menu-dot"></i>
                                    Cards
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'collapse'])}}">
                                    <i class="menu-dot"></i>
                                    Collapse
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'dropdowns'])}}">
                                    <i class="menu-dot"></i>
                                    Dropdowns
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'progress'])}}">
                                    <i class="menu-dot"></i>
                                    Progress
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'spinners'])}}">
                                    <i class="menu-dot"></i>
                                    Spinners
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'skeleton'])}}">
                                    <i class="menu-dot"></i>
                                    Skeleton
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'ratio'])}}">
                                    <i class="menu-dot"></i>
                                    Ratio
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'modals'])}}">
                                    <i class="menu-dot"></i>
                                    Modals
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'offcanvas'])}}">
                                    <i class="menu-dot"></i>
                                    Offcanvas
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'popovers'])}}">
                                    <i class="menu-dot"></i>
                                    Popovers
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'tooltips'])}}">
                                    <i class="menu-dot"></i>
                                    Tooltips
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                    href="{{ route('second', ['ui', 'typography'])}}">
                                    <i class="menu-dot"></i>
                                    Typography
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item hs-accordion">
                    <a href="javascript:void(0)"
                        class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                        <i class="i-ph-check-square-duotone text-2xl"></i>
                        <span class="menu-text"> Forms </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                        <ul class="mt-1 space-y-1">
                            <li class="menu-item">
                                <a href="{{ route('second', ['forms', 'inputs'])}}"
                                    class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                    <i class="menu-dot"></i>
                                    <span class="menu-text">Inputs</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('second', ['forms', 'check-radio'])}}"
                                    class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                    <i class="menu-dot"></i>
                                    <span class="menu-text">Checkbox & Radio</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('second', ['forms', 'masks'])}}"
                                    class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                    <i class="menu-dot"></i>
                                    <span class="menu-text">Input Masks</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('second', ['forms', 'file-upload'])}}"
                                    class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                    <i class="menu-dot"></i>
                                    <span class="menu-text">File Upload</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('second', ['forms', 'editor'])}}"
                                    class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                    <i class="menu-dot"></i>
                                    <span class="menu-text">Editor</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('second', ['forms', 'validation'])}}"
                                    class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                    <i class="menu-dot"></i>
                                    <span class="menu-text">Validation</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('second', ['forms', 'layout'])}}"
                                    class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                    <i class="menu-dot"></i>
                                    <span class="menu-text">Form Layout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item">
                    <a href="{{ route('any', 'maps-vector')}}"
                        class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                        <i class="i-ph-map-pin-duotone text-2xl"></i>
                        <span class="menu-text"> Maps </span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('any', 'tables-basic')}}"
                        class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                        <i class="i-ph-chart-donut-duotone text-2xl"></i>
                        <span class="menu-text"> Tables </span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('any','charts-apex')}}"
                        class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                        <i class="i-tabler-chart-donut-2 text-2xl"></i>
                        <span class="menu-text"> Chart </span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('any', 'icons')}}"
                        class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                        <i class="i-ph-dribbble-logo-duotone text-2xl"></i>
                        <span class="menu-text"> Icons </span>
                    </a>
                </li>

                <li class="menu-item hs-accordion">
                    <a href="javascript:void(0)"
                        class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                        <span class="i-ph-list-duotone text-2xl"></span>
                        <span class="menu-text"> Level </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <div id="sidenavLevel"
                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                        <ul class="mt-1 space-y-1">
                            <li class="menu-item">
                                <a href="javascript: void(0)"
                                    class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                    <i class="menu-dot"></i>
                                    <span class="menu-text">Item 1</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript: void(0)"
                                    class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                    <i class="menu-dot"></i>
                                    <span class="menu-text">Item 2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0)"
                        class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                        <span class="i-ph-star-duotone text-2xl"></span>
                        <span class="menu-text"> Badge Items </span>
                        <span
                            class="ms-auto inline-flex items-center gap-x-1.5 py-0.5 px-2 rounded-md font-semibold text-xs bg-default-800 text-white">Hot</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</aside>
<!-- End Sidebar -->