<aside class="sidebar">
   <div class="sidebar__menu-group">
      <ul class="sidebar_nav">
         <li class="menu-title">
            <span>Main menu </span>
         </li>
         <li>
            <a class="{{ Route::is('dashboards.index')  ? 'active' : ''}}"
                     href="{{ route('dashboards.index') }}">
            <span data-feather="home" class="nav-icon"></span>
            <span class="menu-text">Dashboard</span>
            </a>
         </li>
         <li class="has-child {{ request()->is('ministry*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('ministry*') ? 'active' : ''}}">
            <span data-feather="repeat" class="nav-icon"></span>
            <span class="menu-text">Ministry</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('ministry.all')  ? 'active': '' }}"
                     href="{{ route('ministry.all') }}">View All</a>
               </li>
               <li>
                  <a class="{{ Route::is('ministry.addNew')  ? 'active': '' }}"
                     href="{{ route('ministry.addNew') }}">Add New</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('department*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('department*') ? 'active' : ''}}">
            <span data-feather="repeat" class="nav-icon"></span>
            <span class="menu-text">Department</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('department.all')  ? 'active': '' }}"
                     href="{{ route('department.all') }}">View All</a>
               </li>
               <li>
                  <a class="{{ Route::is('department.addNew')  ? 'active': '' }}"
                     href="{{ route('department.addNew') }}">Add New</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('user*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('user*') ? 'active' : ''}}">
            <span data-feather="repeat" class="nav-icon"></span>
            <span class="menu-text">User</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('user.all')  ? 'active': '' }}"
                     href="{{ route('user.all') }}">View All</a>
               </li>
               <li>
                  <a class="{{ Route::is('user.addNew')  ? 'active': '' }}"
                     href="{{ route('user.addNew') }}">Add New</a>
               </li>
            </ul>
         </li>

       
      </ul>
   </div>
</aside>