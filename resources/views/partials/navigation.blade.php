<div class="nav-buttons">
    <a href="{{ route('path.show', 'soc') }}" class="nav-btn {{ request()->is('path/soc') || request()->is('/') ? 'active' : '' }}">{{ __('messages.nav_soc') }}</a>
    <a href="{{ route('path.show', 'pen') }}" class="nav-btn {{ request()->is('path/pen') ? 'active' : '' }}">{{ __('messages.nav_pen') }}</a>
    <a href="{{ route('path.show', 'eng') }}" class="nav-btn {{ request()->is('path/eng') ? 'active' : '' }}">{{ __('messages.nav_eng') }}</a>
    <a href="{{ route('path.show', 'mgmt') }}" class="nav-btn {{ request()->is('path/mgmt') ? 'active' : '' }}">{{ __('messages.nav_mgmt') }}</a>
</div>