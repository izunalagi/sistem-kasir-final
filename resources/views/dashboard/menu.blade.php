<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('admin.dashboard.post') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

        <li class="nav-item">
            <a href="{{ route('transaction.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Transaction
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

        <li class="nav-item">
            <a href="{{ route('category.crud') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Category
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

        <li class="nav-item">
            <a href="{{ route('admin.product.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Product
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

        </li>
    </ul>
</nav>
