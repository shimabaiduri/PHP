   <!-- Main Sidebar Container -->
   <aside class="main-sidebar  elevation-4" style="background-color: rgb(54, 25, 5);">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
       <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
       <span class="brand-text font-weight-light" style="color:moccasin">Perpusku</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
       <!-- Sidebar user panel (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
           <img src="template/FOTO.webp" class="rounded-circle" alt="User Image" style="width:40px; height:40px">
         </div>
         <div class="info">
           <a href="#" class="d-block" style="color:moccasin;">
            <?php
              echo @$_SESSION['username'];
            ?>
           </a>
         </div>
       </div>

       <!-- SidebarSearch Form -->
       <div class="form-inline">
         <div class="input-group" data-widget="sidebar-search">
           <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" >
           <div class="input-group-append" style="color: moccasin;">
             <button class="btn btn-sidebar" style="color: moccasin;">
               <i class="fas fa-search fa-fw"></i>
             </button>
           </div>
         </div>
       </div>

       <!-- Sidebar Menu -->
       <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

           <li class="nav-item">
             <a href="index.php" class="nav-link" style="color: moccasin;">
               <i class="nav-icon fas fa-th"></i>
               <p>
                 Dashboard
               </p>
             </a>
           </li>

           <li class="nav-item ">
             <a href="#" class="nav-link " style="color: moccasin;">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                 Buku
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="tambah_buku.php" class="nav-link" style="color: moccasin;">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Tambah</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="lihat.php" class="nav-link" style="color: moccasin;">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Lihat</p>
                 </a>
               </li>
             </ul>
           </li>


           <li class="nav-item ">
             <a href="#" class="nav-link " style="color: moccasin;">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                 Peminjaman
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="input_peminjaman.php" class="nav-link" style="color: moccasin;">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Pinjam Buku </p>
                 </a>
               </li>
               <!-- <li class="nav-item">
                 <a href="input_kembali.php" class="nav-link " style="color: moccasin;">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Buku Kembali</p>
                 </a>
               </li> -->
                   <li class="nav-item" >
                 <a href="data_pinjam.php" class="nav-link " style="color: moccasin;">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Lihat</p>
                 </a>
               </li>
             </ul>
             
           <li class="nav-item">
            <a href="#" class="nav-link" style="color: moccasin;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./input_customer.php" class="nav-link" style="color: moccasin;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./data_customer.php" class="nav-link " style="color: moccasin;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>

            <li class="nav-item">
            <a href="#" class="nav-link" style="color: moccasin;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./input_admin.php" class="nav-link" style="color: moccasin;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./data_admin.php" class="nav-link " style="color: moccasin;">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>

        </ul>
      </nav>
           
          
          
       <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
   </aside>