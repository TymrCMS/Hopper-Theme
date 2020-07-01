
                        @guest
                            <li><a href="{{ route('user.login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        @if(Auth::guard('web')->check())
                                        <a href="{{ route('user.logout') }}">
                                            Logout
                                        </a>
                                        @else
                                            <li><a href="{{ route('user.login') }}">Login as User</a></li>
                                        @endif
                                    </li>
                                    <li>
                                        @if(Auth::guard('admin')->check())
                                        <a href="{{ route('admin.logout') }}">
                                            Logout Admin
                                        </a>
                                        @else
                                            <li><a href="{{ route('admin.login') }}">Login as Admin</a></li>
                                        @endif
                                    </li>
                                </ul>
                            </li>
                        @endguest