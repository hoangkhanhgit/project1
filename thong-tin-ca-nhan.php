<?php 
   require_once __DIR__. "/autoload/autoload.php";  
   $nguoidung = $db -> fetchID("nguoidung",intval($_SESSION['name_id']));
?>
<?php 
   require_once __DIR__. "/layouts/header.php";  
?>

 	<div class="col-md-8">
                        
                        <section class="box-main1">
                            <h3 class="title-main "> Thông tin cá nhân</h3>
                            <form action="" method="POST" class="form" role="form" style="text-align: center; margin-top: 20px;">
                            	<legend></legend>
                            
                            	<div class="form-group clearfix">
                            		<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Tên thành viên:</label>
                            		<div class="col-md-8">
                            			<input type="text" readonly="" class="form-control"  id="" placeholder="Nguyễn Văn A" name="name" value="<?php echo $nguoidung['name'] ?>">                            		
                            		</div>	
                            	</div>

                            	<div class="form-group clearfix">
                            		<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Email:</label>
                            		<div class="col-md-8">
                            			<input type="email" readonly="" class="form-control"  id="" placeholder="abc@gmail.com" name="email" value="<?php echo $nguoidung['email'] ?>">
                              		</div>
                            	</div>
                            
                            	<div class="form-group clearfix">
                            		<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Địa chỉ:</label>
                            		<div class="col-md-8">
                            			<input type="text" readonly="" class="form-control"  id="" placeholder="a b c" name="address" value="<?php echo $nguoidung['address'] ?>">
                            		</div>
                            	</div>

                            	<div class="form-group clearfix">
                            		<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Điện thoại:</label>
                            		<div class="col-md-8">
                            			<input type="number" readonly="" class="form-control" id="" placeholder="09........" name="phone" value="<?php echo $nguoidung['phone'] ?>">
                            		</div>
                            	</div>
                        </section>
 	</div>
<?php 
   require_once __DIR__. "/layouts/footer.php";  
?>