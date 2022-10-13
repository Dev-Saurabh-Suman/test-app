  <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{url('assets/images/faces/face8.jpg')}}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{auth()->user()->name}}</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/employee/index')}}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Employees</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/index')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Admins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/project/index')}}">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Projects</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/logout')}}">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Logout</span>
              </a>
            </li>
            
          </ul>
        </nav>