<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ url('/dashboard/admin/post') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

        <li class="nav-item">
            <a href="{{ route('post.data') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Post Data
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

        <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Category
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

        <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Product
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

        </li>
    </ul>
</nav>
