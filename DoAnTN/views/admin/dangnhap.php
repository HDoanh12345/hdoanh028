<?php
// session_start();
include('includes/header.php');
?>




<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-6 col-lg-6 col-md-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Đăng nhập Admin</h1>

                </div>

                <form action="index.php?action=dangnhapad" method="POST">

                  <div class="form-group">
                    <input type="text" name="tennd" class="form-control form-control-user" placeholder="Nhập tên tài khoản">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control form-control-user" placeholder="Nhập mật khẩu">
                  </div>

                  <button type="submit" name="dangnhapad" value="Dang nhap" class="btn btn-primary btn-user btn-block"> Đăng nhập </button>
               
                  <div class="form-group">
                  <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>      </div>

                    <hr>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>


<?php
include('includes/scripts.php');
?>