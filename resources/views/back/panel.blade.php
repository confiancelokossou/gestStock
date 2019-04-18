<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{ route('fournisseur') }}"><i class="fa fa-link"></i> <span>Fournisseur</span></a></li>
      <li><a href="{{ route('client') }}"><i class="fa fa-link"></i> <span>Client</span></a></li>
      <li><a href="{{ route('produit') }}"><i class="fa fa-link"></i> <span>produit</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Mes opérations</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('entree') }}">Commande</a></li>
          <li><a href="#">Vente</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
