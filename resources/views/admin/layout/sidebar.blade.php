<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">Menu Navigation</li>
            @if ( Auth::id() === 1 )
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/dashboard') }}"><i class="nav-icon icon-magnet"></i> Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/entries') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.entry.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/roles') }}"><i class="nav-icon icon-flag"></i> Manage Agency</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li> -->
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
            @else
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/mydashboard') }}"><i class="nav-icon icon-magnet"></i>Agency Dashboard</a></li>
            @endif
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
