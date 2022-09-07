    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            @foreach($setting as $item)
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('uploads/logo/'.$item->logo)}}" class="logo"
                    alt="logo"></a>
            @endforeach
            <img data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation" src="icon/controls.png"
                class="img-fluid toggle-image navbar-toggler" alt="toggle button">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @foreach($menu as $item)
                    <li class="nav-item">
                        <a class="nav-link " href="{{url($item->url)}}">{{$item->name}} </a>
                    </li>


                    @endforeach
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($product as $item)
                            <a class="dropdown-item" href="{{url('product/'.$item->slug)}}">{{$item->title}}</a>
                            @endforeach
                        </div>
                    </li> -->

                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control search-input mr-sm-2" type="search" placeholder="Search"
                        aria-label="Search">
                    <!-- <img src="icon/search_FILL0_wght400_GRAD0_opsz48.svg" class="search-icon" alt="search-icon"> -->
                </form>
            </div>
        </div>
    </nav>
