<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('users_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.abilities.index") }}" class="nav-link {{ request()->is('admin/abilities') || request()->is('admin/abilities/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt nav-icon">

                                </i>
                                {{ trans('cruds.ability.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    </ul>
                </li>
                  <li class="nav-item">
                      <a href="{{ route('auth.change_password') }}" class="nav-link {{ request()->is('change_password') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-fw fa-key">

                          </i>
                          {{ trans('global.change_password') }}
                      </a>
                  </li>
                 <li class="nav-item">
                     <a href="{{ route('auth.change_password') }}" class="nav-link {{ request()->is('change_password') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-fw fa-key">

                         </i>
                         {{ trans('global.change_password') }}
                     </a>
                 </li>
            @endcan
            @can('onomasticas_show')
                <li class="nav-item">
                    <a href="{{ route('estructura.index') }}" class="nav-link {{ request()->is('estructura') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-fw fa-key">

                        </i>
                        Estructura
                    </a>
                </li>
                 <li class="nav-item">
                     <a href="{{ route('listadored.index') }}" class="nav-link {{ request()->is('listadored') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-fw fa-key">

                         </i>
                         Listado Telefonos Red
                     </a>
                 </li>

            @endcan

            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
