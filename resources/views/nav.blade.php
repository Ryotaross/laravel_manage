<nav class="navbar navbar-expand navbar-dark blue-gradient">

  <a class="navbar-brand" href="/"><i class="fas fa-tasks mr-1"></i>Lara-manage</a>

  <ul class="navbar-nav ml-auto">

    <li class="nav-item">
      <a class="nav-link" href="{{route('mission.create') }}"><i class="fas fa-pencil-alt mr-1"></i>Create</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('calendar.show') }}"><i class="far fa-calendar-alt mr-1"></i>Calendar</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus mr-1"></i>Register</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <!--<button class="dropdown-item" type="button"
                onclick="location.href=''">
          マイページ
        </button>
        <div class="dropdown-divider"></div>-->
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}"> 
      @csrf 
    </form>
    </form>
    <!-- Dropdown -->

  </ul>

</nav>