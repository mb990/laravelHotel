<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{ route('admin.admin') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>News</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="{{ route ('admin.news') }}">All News</a></li>
        <li><a href="{{ route ('admin.add-news') }}">Add News</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Rooms</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="error403.html">Nesto 403</a></li>
        <li><a href="error404.html">Nesto 404</a></li>
        <li><a href="error405.html">Nesto 405</a></li>
        <li><a href="error500.html">Nesto 500</a></li>
      </ul>
    </li>
    <li class="submenu"><a href="#"><i class="icon icon-fullscreen"></i> <span>Users</span></a>
    <ul>
        <li><a href="{{ route('users') }}">All Users</a></li>
        <li><a href="error404.html">Nesto 404</a></li>
        <li><a href="error405.html">Nesto 405</a></li>
        <li><a href="error500.html">Nesto 500</a></li>
      </li>
</div>