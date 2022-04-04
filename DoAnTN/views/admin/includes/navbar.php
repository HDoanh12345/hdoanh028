   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
       <div class="sidebar-brand-icon rotate-n-15">
         <!-- <i class="fas fa-laugh-wink"></i> -->
         <img src="../../img/LOGO.png" alt="" width="40px" height="40px" style="border-radius: 5px;">
       </div>
       <div class="sidebar-brand-text mx-3">Wind <sup>SAPA</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Trang chu -->
     <li class="nav-item active">
       <a class="nav-link" href="index.php?action=trangchu">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Trang chủ</span></a>
     </li>

     <!-- lsp -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-align-left"></i>
         <span>Quản lý danh mục</span>
       </a>
       <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
           <a class="collapse-item" href="index.php?action=dsdm">Danh sách loại món ăn</a>
           <a class="collapse-item" href="index.php?action=themdm">Thêm loại món ăn</a>
         </div>
       </div>
     </li>
     <!-- món ăn -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-hamburger"></i>
         <span>Quản lý món ăn</span>
       </a>
       <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
           <a class="collapse-item" href="index.php?action=dssp">Danh sách món ăn</a>
           <a class="collapse-item" href="index.php?action=themsp">Thêm món ăn</a>
         </div>
       </div>
     </li>
     <!-- khách hàng -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="true" aria-controls="collapseTwo">
         <!-- <i class="fas fa-fw fa-cog"></i> -->
         <i class="fas fa-users"></i>
         <span>Quản lý khách hàng</span>
       </a>
       <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
           <a class="collapse-item" href="index.php?action=dskh">Danh sách khách hàng</a>
           <a class="collapse-item" href="index.php?action=themkh">Thêm khách hàng</a>
         </div>
       </div>
     </li>
     <!-- bình luận -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-comments"></i>
         <span>Quản lý bình luận</span>
       </a>
       <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
           <a class="collapse-item" href="index.php?action=dsbl">Danh sách bình luận</a>
         </div>
       </div>
     </li>
     <!-- đơn hàng -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo5" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-file-invoice"></i>
         <span>Quản lý đơn hàng</span>
       </a>
       <div id="collapseTwo5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
           <a class="collapse-item" href="index.php?action=dsdh">Danh sách đơn hàng</a>

         </div>
       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo6" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-users-cog"></i>
         <span>Thông tin người quản trị</span>
       </a>
       <div id="collapseTwo6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
           <a class="collapse-item" href="index.php?action=ttadmin">Danh sách người quản trị</a>
           <a class="collapse-item" href="index.php?action=themadmin">Thêm người quản trị</a>
         </div>
       </div>
     </li>




     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="index.php?action=web" >
         <i class="fas fa-fw fa-wrench"></i>
         <span>Quản lý website</span>
       </a>
       <!-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
          
           <a class="collapse-item" href="index.php?action=web">Hình bannner</a>
           <a class="collapse-item" href="utilities-border.html">Thông tin giới thiệu</a>
           <a class="collapse-item" href="utilities-animation.html">Hình ảnh giới thiệu</a>
           <a class="collapse-item" href="utilities-other.html">Hình ảnh</a>
         </div>
       </div> -->
     </li>


     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
       <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

   </ul>
   <!-- End of Sidebar -->

   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

       <!-- Topbar -->
       <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

         <!-- Sidebar Toggle (Topbar) -->
         <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
           <i class="fa fa-bars"></i>
         </button>


         <!-- Topbar Navbar -->
         <ul class="navbar-nav ml-auto">

           <div class="topbar-divider d-none d-sm-block"></div>

           <!-- Nav Item - User Information -->
           <li class="nav-item dropdown no-arrow">
             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                 <?php

                  if (isset($_SESSION['Ten_AD'])) {
                    extract($_SESSION['Ten_AD']);

                  ?>
                   <?php
                    echo "Xin chào" ?> <?= $Ten_ND ?>
                 <?php
                  }
                  ?>
               </span>
               <i class="fas fa-user"></i>

             </a>
             <!-- Dropdown - User Information -->
             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               <a class="dropdown-item" href="index.php?action=capnhatad">
                 <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                 Thông tin tài khoản
               </a>

               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="index.php?action=dangxuatad">
                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                 Đăng xuất
                
               </a>
             </div>
           </li>

         </ul>

       </nav>