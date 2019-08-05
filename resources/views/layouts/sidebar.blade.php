<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ url('admin') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                    <i class="fa fa-home"></i> Home
                </a>
            </li>
        </ul>
    </nav>
</div>
