<!-- HEADER - NAVBAR -->
<div class="navbar-wrapper">
  <div class="container">
    <nav class="navbar navbar-inverse navbar-top">
      <!-- <div class="container"> -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"><!-- Toggle navigation --></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">Facilite Serviços</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right text-center">
            <!-- Authentication Links -->
            @if (Auth::guest())
              <li class="visible-xs">
                <a href="#">
                  <button type="button" class="btn btn-success btn-md">Entrar</button>
                </a>
              </li>
              <li class="visible-sm visible-md visible-lg">
                <a href="#"><b>Entrar<b></a>
              </li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
              </li>
            @endif
            <!-- </li> -->
          </ul>
        </div>
      <!-- </div> -->
    </nav>
  </div>
</div>
<!-- //HEADER - NAVBAR -->