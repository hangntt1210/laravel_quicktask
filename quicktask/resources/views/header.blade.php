<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('trang-chu') }} ">{{ __('News') }} </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="{{ route('create') }} ">{{ __('Create news') }} </a></li>
                <li><a href="">{{ __('Language') }} </a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('change-language', ['en']) }} ">{{ __('English') }} </a>
                        </li>
                        <li>
                            <a href="{{ route('change-language', ['vi']) }} ">{{ __('Vietnamese') }} </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</nav> 
<div class="nav-item">
    <div class="container">
        <div class="nav-depart">
            <div class="depart-btn">
                <i class="ti-menu"></i>
                <span>{{ __('All category') }} </span>
                <ul class="depart-hover">
                    @foreach($cate as $ca)
                    <li><a href="{{ route('theloai', $ca->id) }} ">{{ $ca->name }} </a></li>
                    
                    @endforeach    
                </ul>
            </div>
        </div>
    </div>
</div>
