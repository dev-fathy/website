




<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Hello {{ auth()->user()->name }}
    <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Admin Panel</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Profile</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Log Out</a></li>
    </ul>
  </div>

        