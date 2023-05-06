<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('admin.dashboard.post') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    List User
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('transaction.index') }}" class="nav-link">
                <i class="nav-icon fas fa-industry"></i>
                <p>
                    Transaction
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('category.crud') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Category
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.product.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Product
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

        </li>

        <li class="nav-item">
            <a href="{{ route('buyer.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Buyer
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

        </li>

        <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Post
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>


        <li class="nav-item">
            <a href="{{ route('admin.productdetail.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Product_Detail
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

        </li>
    </ul>
</nav>
