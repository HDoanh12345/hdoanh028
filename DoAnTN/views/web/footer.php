<section class="footer" style="float:inline-end"> <h1 id="lh"></h1>
	<div class="row justify-content">
	<div class="trai" style="margin: 20xp;">
		<b>Liên hệ với chúng tôi</b>
		<p>Nhà hàng Wind</p>
		<?php
                foreach ($allw as $hinh) {
                    extract($hinh);
                   
                    echo ' <p>Địa chỉ: '.$DC_nh.' <br /></p>
					<a href="abc"><img src="../../img/call.png" alt="" width="50px" height="50px">'.$SDT_nh.'</a><br>
					<a href="email"><img src="../../img/gmail.png" alt="" width="50px" height="50px">'.$email_nh.'</a>';
                }
                ?>
		<!-- <p>Địa chỉ: Số 011 Thạch Sơn, Sapa – Lào Cai <br /></p>
		<a href="abc"><img src="img/call.png" alt="" width="50px" height="50px">012345677</a><br>
		<a href="email"><img src="img/gmail.png" alt="" width="50px" height="50px"> SapaHome@gmail.com</a> -->
		<!-- / class fLeft -->
	</div>
	<div class="phai" style="margin: 10xp;">
		<img src="../../img/LOGO.png" alt=""  width="70px" height="70px" style="margin: 10px"><br>
		<b style="margin-bottom: 20px;">Tham gia cùng chúng tôi</b><br>
		<a href="adsa"><img src="../../img/fb.png" alt="" width="50px" height="50px"></a>
		<a href="adsa"><img src="../../img/mess.png" alt="" width="50px" height="50px"></a>
		<a href="adsa"><img src="../../img/twi.png" alt="" width="50px" height="50px"></a>
		<a href="adsa"><img src="../../img/youtobe.png" alt="" width="50px" height="50px"></a><br>
		<p>Hoàng Đức Doanh_CNTTK16E</p>
		<!-- / class fRight -->
	</div>
</div>
</section>
<script src="js/main.js"></script>
</body>

</html>
<?php
 ob_end_flush();
 ?>