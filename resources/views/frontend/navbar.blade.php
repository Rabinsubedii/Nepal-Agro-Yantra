        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                @foreach($setting as $item)
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('uploads/logo/'.$item->logo)}}"
                        class="logo" alt="logo"></a>
                @endforeach
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @foreach($menu as $item)
                        <li class="nav-item active">
                            <a class="nav-link text-dark" href="{{url($item->url)}}">{{$item->name}} </a>
                        </li>
                        @endforeach

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
