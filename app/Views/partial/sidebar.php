<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <!--<div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="#" alt="User Image">
    <div>
      <p class="app-sidebar__user-name">John Doe</p>
    </div>
  </div>-->
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="<?php echo site_url('Dashboard'); ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>


    <!-- <li>
      <a class="app-menu__item" href="<?php echo site_url('product'); ?>">
        <i class="app-menu__icon fa fa-user"></i>
        <span class="app-menu__label">Product Section</span>
      </a>
    </li>-->

    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop">
        </i><span class="app-menu__label">Product Section</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?php echo site_url('Product'); ?>"><i class="icon fa fa-circle-o"></i>New Product</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('Category'); ?>"><i class="icon fa fa-circle-o"></i> Product Category</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('Brand'); ?>"><i class="icon fa fa-circle-o"></i> Product Brand</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('Group'); ?>"><i class="icon fa fa-circle-o"></i> Product Group</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('Unit'); ?>"><i class="icon fa fa-circle-o"></i> Product Unit</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop">
        </i><span class="app-menu__label">Customer Section</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?php echo site_url('customer'); ?>"><i class="icon fa fa-circle-o"></i> Customer Add</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('customergroup'); ?>"><i class="icon fa fa-circle-o"></i> Customer Group Add</a></li>
      </ul>
    </li>


    <li>
      <a class="app-menu__item" href="<?php echo site_url('supplier'); ?>">
        <i class="app-menu__icon fa fa-user-plus"></i>
        <span class="app-menu__label">Suppliers Section</span>
      </a>
    </li>
    <li>
      <a class="app-menu__item" href="<?php echo site_url('pos'); ?>">
        <i class="app-menu__icon fa fa-user"></i>
        <span class="app-menu__label">Sales Section</span>
      </a>
    </li>

    <li>
      <a class="app-menu__item" href="<?php echo site_url('Purchase'); ?>">
        <i class="app-menu__icon fa fa-user-plus"></i>
        <span class="app-menu__label">Purchase Section</span>
      </a>
    </li>

    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop">
        </i><span class="app-menu__label">Expenses Section</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?php echo site_url('Expense'); ?>"><i class="icon fa fa-circle-o"></i> Expense Add</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('Expensecategory'); ?>"><i class="icon fa fa-circle-o"></i> Expense Category Add</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('Expensesubcategory'); ?>"><i class="icon fa fa-circle-o"></i> Expense Sub-Category Add</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop">
        </i><span class="app-menu__label">Settings Section</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?php echo site_url('#'); ?>"><i class="icon fa fa-circle-o"></i> Company Settings</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('Tax'); ?>"><i class="icon fa fa-circle-o"></i> % Tax Setup</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('#'); ?>"><i class="icon fa fa-circle-o"></i> Currency Setup</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('#'); ?>"><i class="icon fa fa-circle-o"></i> Change Password</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('#'); ?>"><i class="icon fa fa-circle-o"></i> Database Backup</a></li>
      </ul>
    </li>


    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop">
        </i><span class="app-menu__label">Report Section</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?php echo site_url('Stockreport'); ?>"><i class="icon fa fa-circle-o"></i> Stock Report</a></li>
        <li><a class="treeview-item" href="#" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Menu 2</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Menu 3</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Menu 4</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop">
        </i><span class="app-menu__label">User Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?php echo site_url('User'); ?>"><i class="icon fa fa-circle-o"></i>User Making</a></li>
        <li><a class="treeview-item" href="<?php echo site_url('Role'); ?>" rel="noopener"><i class="icon fa fa-circle-o"></i> User Role Set</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Menu 3</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Menu 4</a></li>
      </ul>
    </li>






    <!-- <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop">
        </i><span class="app-menu__label">Settings Section</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href=" <?php echo site_url('supplier'); ?>"><i class="app-menu__icon fa fa-user-plus"></i>Company Creation</a></li>
        <li><a class="treeview-item" href="#" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i>Category Creation</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Sub-Category Creation</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> VAT Creation</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Backup Creation</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop">
        </i><span class="app-menu__label">User Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href=" <?php echo site_url('supplier'); ?>"><i class="app-menu__icon fa fa-user-plus"></i>Company Creation</a></li>
        <li><a class="treeview-item" href="#" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i>Category Creation</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Sub-Category Creation</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> VAT Creation</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Backup Creation</a></li>
      </ul>
    </li>-->

    <!--<li>
      <a class="app-menu__item" href="<?php echo site_url('Expenses'); ?>">
        <i class="app-menu__icon fa fa-user-plus"></i>
        <span class="app-menu__label">Backup Software</span>
      </a>
    </li>
	<li>
      <a class="app-menu__item" href="<?php echo site_url('Expenses'); ?>">
        <i class="app-menu__icon fa fa-user-plus"></i>
        <span class="app-menu__label">Off-line Version</span>
      </a>
    </li>
	
	<li>
      <a class="app-menu__item" href="<?php echo site_url('Expenses'); ?>">
        <i class="app-menu__icon fa fa-user-plus"></i>
        <span class="app-menu__label">LogOut Section</span>
      </a>
    </li>-->


    <!-- <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Docs</span></a></li> -->
  </ul>
</aside>