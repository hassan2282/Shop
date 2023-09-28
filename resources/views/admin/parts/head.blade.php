<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="{{route('admin')}}" class="header-logo">
                    <h4 class="logo-title text-uppercase">GLARE</h4>
                </a>
            </div>
            <div class="navbar-breadcrumb">
                <h6 class="ml-2"></h6>
            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">
                        <li class="nav-item nav-icon dropdown caption-content">
                            <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center"
                               id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <img src="{{asset('adm/images/user/1.jpg')}}" class="img-fluid rounded" alt="user">
                                <div class="caption ml-3">
                                    <h6 class="mb-0 line-height">{{auth()->user()->name}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                             fill="currentColor" height="20px" width="20px">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                    </h6>
                                </div>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu mt-2" aria-labelledby="dropdownMenuButton4">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="profile-header">
                                            <div class="cover-container text-center">
                                                <div class="rounded-circle profile-icon bg-primary mx-auto d-block">M
                                                </div>
                                                <div class="profile-detail mt-3">
                                                    <h5><a href="{{route('admin')}}">{{auth()->user()->name}}</a></h5>
                                                    <p>{{auth()->user()->email}}</p>
                                                </div>
                                                <form action="{{route('admin.logout')}}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-block Block level button">LOGOUT</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
