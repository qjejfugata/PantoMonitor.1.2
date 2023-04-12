<nav class="main-header navbar navbar-expand navbar-white navbar-light elevation-1">
    <!-- Left navbar links -->
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
      <h4 class="float-right" >Welcome Back, {{$userName}}</h4>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
    <div class="user-panel mt-1 pb-1 mb-1 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">



          <a href="home/profile" class="d-block">{{$userName}}</a>
        </div>
      </div>

      <li class="nav-item">
        <a class="nav-link" href="{{route('power-on') }}" method ="post" role="button">
        <i class=" fas fa-sharp fa-lightbulb "></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('predict-on') }}" method ="post" role="button">
        <i class="fa fa-regular fa-infinity"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('record-on') }}" method ="post" role="button">
        <i class="fa  fa-solid fa-play"></i>
        </a>
      </li>

    <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
      <li class="nav-item" role="button">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-solid fa-power-off"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                              </li>
                            </div>
                          </li>




      <!--
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
        -->

      


      

    </ul>
  </nav>    