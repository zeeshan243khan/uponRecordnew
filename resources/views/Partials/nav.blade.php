<nav class="sidebar dark_sidebar">
    <div class="logo d-flex justify-content-between">
      <div class="d-flex justify-content-center align-items-center">
        <a class="large_logo" href="index.html">
          <img src="{{asset('img/apon_logo.png')}}" class="w-75 px-2" alt="Main Logo" />
        </a>
      </div>
      <a class="small_logo" href="/home"><img src="{{asset('img/mini_logo.png')}}" alt /></a>
      <div class="sidebar_close_icon d-lg-none">
        <i class="ti-close"></i>
      </div>
    </div>
    @if(Auth::user()->type =='admin')
    
    <ul id="sidebar_menu">
    <li class>
        <a class="has-arrow" href="#" aria-expanded="false">
          <div class="nav_icon_small">
            <!-- <img src="img/menu-icon/6.svg" alt /> -->
            <i class="fa-solid fa-music"></i>
          </div>
          <div class="nav_title">
            <span>User Manger</span>
          </div>
        </a>
        <ul>
          <li><a href="{{route('users.index')}}">user list</a></li>
          <li><a href="{{route('users.create')}}">Add </a></li>
          
        </ul>
      </li>

    
      <li class>
        <a class="has-arrow" href="#" aria-expanded="false">
          <div class="nav_icon_small">
            <!-- <img src="img/menu-icon/6.svg" alt /> -->
            <i class="fa-solid fa-music"></i>
          </div>
          <div class="nav_title">
            <span>Catalog</span>
          </div>
        </a>
        <ul>
          <li><a href="{{route('release.index')}}">All Release</a></li>
          <!-- <li><a href="">Drafts</a></li> -->
          
        </ul>
      </li>

   
      <li class>
        <a class="has-arrow" href="#" aria-expanded="false">
          <div class="nav_icon_small">
            <i class="fa-solid fa-file-invoice-dollar"></i>
          </div>
          <div class="nav_title">
            <span>Financial</span>
          </div>
        </a>
        <ul>
          <li><a href="{{route('reports')}}">Financial Report</a></li>
        </ul>
      </li>
     
     
    </ul>
    @endif
    @if(Auth::user()->type =='user')
    
    <ul id="sidebar_menu">
      <li class>
        <a class="has-arrow" href="#" aria-expanded="false">
          <div class="nav_icon_small">
            <!-- <img src="img/menu-icon/1.svg" alt /> -->
            <i class="fa-solid fa-plus"></i>
          </div>
          <div class="nav_title" id="btn">
            <!-- <span>One Release</span> -->
            <button class="btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">One
              Release</button>
          </div>
        </a>
      </li>
     

      <li class>
        <a class="has-arrow" href="#" aria-expanded="false">
          <div class="nav_icon_small">
            <!-- <img src="img/menu-icon/6.svg" alt /> -->
            <i class="fa-solid fa-music"></i>
          </div>
          <div class="nav_title">
            <span>Catalog</span>
          </div>
        </a>
        <ul>
        <li><a href="{{route('release.index')}}">All Release</a></li>
         <!--  <li><a href="">Drafts</a></li>
          <li>
            <a href="correction-requested.html">Correction Requested</a>
          </li> -->
        </ul>
      </li>

   
      <li class>
        <a class="has-arrow" href="#" aria-expanded="false">
          <div class="nav_icon_small">
            <i class="fa-solid fa-file-invoice-dollar"></i>
          </div>
          <div class="nav_title">
            <span>Financial</span>
          </div>
        </a>
        <ul>
          <li><a href="">Financial Report</a></li>
        </ul>
      </li>
     
     
    </ul>
    @endif
  </nav>

  
