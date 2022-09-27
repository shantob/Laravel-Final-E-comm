<div class="sidebar bg-dark">
            <div class="scrollbar-inner sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{ asset('assets/admin/img/profile.jpg') }}">
                    </div>
                    <div class="info">
                        <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span class=" text-light">
                                Hizrian
                                <span class="user-level  text-light">Administrator</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                    <a href="#profile">
                                        <span class="link-collapse  text-light">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit">
                                        <span class="link-collapse text-light">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings">
                                        <span class="link-collapse text-light">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav ">
                    <li class="nav-item {{ Route::is('admin.home') ?  'active' : ''}}">
                        <a href="{{ route('admin.home')}}">
                            <i class="la la-dashboard"></i>
                            <p class=" text-warning">Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('admin.productlist') ?  'active' : ''}}">
                        <a href="{{ route('admin.productlist')}}">
                            <i class="la la-table"></i>
                            <p class=" text-warning">All Product</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('admin.category') ?  'active' : ''}}">
                        <a href="{{ route('admin.category')}}">
                            <i class="la la-table"></i>
                            <p class=" text-warning">Category</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('admin.categoryadd') ?  'active' : ''}}">
                        <a href="{{ route('admin.categoryadd')}}">
                            <i class="la la-table"></i>
                            <p class=" text-warning">Category Add</p>
                        </a>
                    </li>
                
                    <li class="nav-item {{ Route::is('admin.productadd') ?  'active' : ''}}">
                        <a href="{{ route('admin.productadd')}}">
                            <i class="la la-table"></i>
                            <p class=" text-warning">Add Product</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('admin.commentlist') ?  'active' : ''}}">
                        <a href="{{route('admin.commentlist')}}">
                            <i class="la la-table"></i>
                            <p class=" text-warning">Comment</p>
                          
                            <span class="badge badge-success">#</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('admin.bloglist') ?  'active' : ''}}">
                        <a href="{{route('admin.bloglist')}}">
                            <i class="la la-table"></i>
                            <p class=" text-warning">Blog List</p>
                            <span class="badge badge-warning"></span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#">
                            <i class="la la-table"></i>
                            <p class=" text-warning">Notification</p>
                            <span class="badge badge-success"></span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('admin.userlist') ?  'active' : ''}}">
                        <a href="{{route('admin.userlist')}}">
                            <i class="la la-table"></i>
                            <p class=" text-warning">User List</p>
                            <span class="badge badge-warning"></span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>