<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><i><b>Musafir</b></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{route('aboutus')}}">About</a>
      </li>
      @if (Auth::check())
      @if (Auth::user()->role === 'admin')
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="{{route('admin.hotels')}}">Hotels</a>
          <a class="dropdown-item" href="{{route('admin.bookings')}}">Bookings</a>
        </div>
      </li>
      @endif
      @endif
      @if (Auth::check() === false)
      <li class="nav-item">
        <a class="nav-link btn btn-success btn-sm" href="{{route('login')}}">Login</a>
      </li>
      @endif
      <li class="nav-item">
      <a class="nav-link" href="{{route('tips')}}">Tips</a>
      </li>
    </ul>
  </div>
</nav>