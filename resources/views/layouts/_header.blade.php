<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">ZHEN-Weibo</a>
        <ul class="navbar-nav justify-content-end">
            @if(Auth::check())
                <li class="nav-item"><a href="#" class="nav-link">用户列表</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" id="nav-dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="nav-dropdown">
                        <li><a href="{{route('users.show',Auth::user())}}" class="dropdown-item" data-toggle="dropitem">个人中心</a></li>
                        <li><a href="#" class="dropdown-item">编辑资料</a></li>
                        <li><hr class="dropdown-divider"/></li>
                        <li><a href="#" class="dropdown-item" id="logout">
                            <form method="POST" action="{{route('logout')}}" class="d-grid">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger btn-block" type="submit" name="button">退出</button>
                            </form>
                        </a></li>
                    </ul>
                </li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{route('help')}}">帮助</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">关于</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">登录</a></li>
            @endif
        </ul>
    </div>
</nav>
