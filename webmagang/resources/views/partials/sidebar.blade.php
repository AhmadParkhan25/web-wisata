<div class="sidebar">
    <!-- Sidebar user (optional) -->
    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
        </div>
    </div> --}}

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <ul class="nav">
                <li class="nav-item">
                    <a href="{{ route('admin.wisata.index') }}" class="nav-link">
                        <i class="bi bi-suitcase-fill mr-2"></i>
                        <p>Wisata</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.recomendation.index') }}" class="nav-link">
                        <i class="bi bi-bookmark-star-fill mr-2"></i>
                        <p>Rekomendasi</p>
                    </a>
                </li>

            </ul>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
