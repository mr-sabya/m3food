<ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
    <!-- Dashboard -->
    <li class="menu-item">
        <a href="{{ route('admin.dashboard')}}" class="{{ Route::is('admin.dashboard') ? 'active' : '' }}" wire:navigate> <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
    </li>
    <!-- /Dashboard -->

    <li class="menu-item">
        <a href="{{ route('admin.banner.index')}}" class="{{ Route::is('admin.banner.index') ? 'active' : '' }}" wire:navigate> <span><i class="fas fa-clipboard-list fs-16"></i>Banners</span>
        </a>
    </li>

    <!-- tags -->
    <li class="menu-item">
        <a href="{{ route('admin.tag.index')}}" class="{{ Route::is('admin.tag.index') ? 'active' : '' }}" wire:navigate> <span><i class="fas fa-clipboard-list fs-16"></i>Tags</span>
        </a>
    </li>
    <!-- product -->
    <li class="menu-item">
        <a href="#" class="has-chevron {{ Route::is('admin.category.*') || Route::is('admin.product.*') ? 'active' : '' }}" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product"> <span><i class="fa fa-archive fs-16"></i>Products </span>
        </a>
        <ul id="product" class="collapse {{ Route::is('admin.category.*') || Route::is('admin.product.*') ? 'show' : '' }}" aria-labelledby="product" data-parent="#side-nav-accordion">
            <li>
                <a href="{{ route('admin.category.index')}}" class="{{ Route::is('admin.category.*') ? 'active' : '' }}" wire:navigate>Category</a>
            </li>
            <li> <a href="{{ route('admin.product.index')}}" class="{{ Route::is('admin.product.*') ? 'active' : '' }}" wire:navigate>Products</a>
            </li>
            <li> <a href="pages/product/productgrid.html">Menu Grid</a>
            </li>
            <li> <a href="pages/product/addproduct.html">Add Product</a>
            </li>
            <li> <a href="pages/product/productdetail.html">Product Detail</a>
            </li>
        </ul>
    </li>
    <!-- product end -->
    <!-- orders -->
    <li class="menu-item">
        <a href="pages/orders.html"> <span><i class="fas fa-clipboard-list fs-16"></i>Orders</span>
        </a>
    </li>
    <!-- orders end -->



    <!-- customers-->
    <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#customer" aria-expanded="false" aria-controls="customer"> <span><i class="fas fa-user-friends fs-16"></i>Customers </span>
        </a>
        <ul id="customer" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
            <li> <a href="pages/customer/customersreview.html">Customers Review</a>
            </li>
            <li> <a href="pages/customer/customersreview.html">Customers List</a>
            </li>
            <li> <a href="pages/customer/social.html">Social Activity</a>
            </li>
        </ul>
    </li>
    <!-- Customers  end -->
    <!-- sales -->
    <li class="menu-item">
        <a href="pages/sales.html"> <span><i class="fa fa-briefcase fs-16"></i>Sales</span>
        </a>
    </li>

</ul>