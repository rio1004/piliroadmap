<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

    <div id="logo" class="pull-left">
        <div class="row">
          <div class="logo"></div>
        </div>
    </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">


          <li class="menu-active"><a href="{{route('homePage')}}">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="{{route('main.archive')}}">Archives</a></li>
          <li><a href="{{route('main.stores')}}">stores</a></li>
            <li class="menu-has-children"><a href="#">Gallery</a>
                <ul>
                    <li><a href="{{ route('main.gallery') }}">Images</a></li>
                    <li><a href="{{ route('main.galleryVideo') }}">Video</a></li>
                </ul>
            </li>
          <li class="menu-has-children"><a href="#">Articles</a>
            <ul>
              @foreach ($viewcategories as $category)
                <li><a href="{{ route('main.articles', $category->id) }}">{{$category->category_name}}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="{{route('main.roadmap')}}">Roadmap</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
