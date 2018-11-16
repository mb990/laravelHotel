sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{ route('admin.admin') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>News</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="{{ route ('admin.add-news') }}">Add News</a></li>
        {{-- <li><a href="{{ route ('admin.edit-news') }}">Edit News</a></li>
        <li><a href="{{ route ('admin.delete-news') }}">Delete News</a></li> --}}
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
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Users</span></a></li>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    
   {{--  <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li> --}}
  </ul>
</div>
<!--sidebar-menu