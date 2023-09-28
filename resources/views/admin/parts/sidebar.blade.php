<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="{{route('admin')}}" class="header-logo">
            <img src="{{asset('/adm/images/logo.png')}}" alt="logo">
            <h2 class=" light-logo">TRAZOO</h2>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
            <h6 class="sidebar-text text-uppercase ">main</h6>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">


                <li class="active">
                    <a href="{{route('admin')}}" class="svg-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                             width="20" height="20">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        <span class="ml-3">داشبرد</span>
                    </a>
                </li>

                <li class="">
                    <a href="/" class="svg-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                            <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm9 4a1 1 0 10-2 0v6a1 1 0 102 0V7zm-3 2a1 1 0 10-2 0v4a1 1 0 102 0V9zm-3 3a1 1 0 10-2 0v1a1 1 0 102 0v-1z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">وبسایت</span>
                    </a>
                </li>

                <li class="">
                    <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">کاربران</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li>
                            <a href="{{route('user.index')}}">
                                <i class="las la-minus"></i><span>همه کاربران</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('user.create')}}">
                                <i class="las la-minus"></i><span>افزودن کاربر جدید</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                            <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">دسترسی ها</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="auth" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{route('permission.index')}}">
                                <i class="las la-minus"></i><span>همه دسترسی ها</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('permission.create')}}">
                                <i class="las la-minus"></i><span>افزودن دسترسی جدید</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#auth2" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                            <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">مقام ها</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="auth2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{route('role.index')}}">
                                <i class="las la-minus"></i><span>همه مقام ها</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('role.create')}}">
                                <i class="las la-minus"></i><span>افزودن مقام جدید</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="">
                            <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-3">محصولات</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="pricing" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                    <a href="{{route('product.index')}}">
                                        <i class="las la-minus"></i><span>همه محصولات</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{route('product.create')}}">
                                        <i class="las la-minus"></i><span>افزودن محصول جدید</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                <li class="">
                    <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                            <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">دسته بندی ها</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="ui" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{route('category.create')}}">
                                <i class="las la-minus"></i><span>افزودن دسته بندی جدید</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('category.index')}}">
                                <i class="las la-minus"></i><span>مدیریت دسته بندی ها</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#form" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                            <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
                            <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path>
                        </svg>
                        <span class="ml-3">پیام ها</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="form" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{route('contactUs.index')}}">
                                <i class="las la-minus"></i><span class="">مشاهده پیام های کاربران</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="pt-5 pb-2"></div>
    </div>
</div>
