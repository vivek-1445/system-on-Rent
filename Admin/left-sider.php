<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo "Wel-Come"?><br><?php echo $_SESSION['user']['name'];?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin-data.php"><i class="fa fa-circle-o"></i>Admin</a></li>
                    <li><a href="marchant-data.php"><i class="fa fa-circle-o"></i>Marchant</a></li>
                </ul>
            </li>
        </ul>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="active treeview">
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-home"></i>
                    <span>Proparty</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="add-item.php"><i class="fa fa-circle-o"></i>Add Item</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View Item</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>