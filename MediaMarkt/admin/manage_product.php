<?php
require('top.inc.php');
$categories_id='';
$name='';
$price='';
$image='';
$short_desc	='';
$description='';
$cpu='';
$ram='';
$gpu='';
$fonte='';
$armazenamento='';
$armazenamentosec='';
$motherboard='';



$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from product where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories_id=$row['categories_id'];
		$name=$row['name'];
		$price=$row['price'];
		$short_desc=$row['short_desc'];
		$description=$row['description'];
		$cpu=$row['CPU'];
		$ram=$row['RAM'];
		$gpu=$row['GPU'];
		$fonte=$row['FONTE'];
		$armazenamento=$row['Armazenamento'];
		$armazenamentosec=$row['Armazenamento_Secundário'];
		$motherboard=$row['MotherBoard'];
		
	}else{
		header('location:product.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories_id=get_safe_value($con,$_POST['categories_id']);
	$name=get_safe_value($con,$_POST['name']);
	$price=get_safe_value($con,$_POST['price']);
	$short_desc=get_safe_value($con,$_POST['short_desc']);
	$description=get_safe_value($con,$_POST['description']);
	$cpu=get_safe_value($con,$_POST['CPU']);
	$ram=get_safe_value($con,$_POST['RAM']);
	$gpu=get_safe_value($con,$_POST['GPU']);
	$fonte=get_safe_value($con,$_POST['Fonte']);
	$armazenamento=get_safe_value($con,$_POST['Armazenamento']);
	$armazenamentosec=get_safe_value($con,$_POST['ArmazenamentoSec']);
	$motherboard=get_safe_value($con,$_POST['MotherBoard']);


	
	$res=mysqli_query($con,"select * from product where name='$name'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Product already exist";
			}
		}else{
			$msg="Product already exist";
		}
	}
	
	if($_GET['id']==0){
		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
			$msg="Please select only png,jpg and jpeg image formate";
		}
	}else{
		if($_FILES['image']['type']!=''){
				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
				$msg="Please select only png,jpg and jpeg image formate";
			}
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['image']['name']!=''){
				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);




				
				$update_sql="update product set categories_id='$categories_id',name='$name',price='$price',short_desc='$short_desc',description='$description',CPU='$cpu',RAM='$ram',GPU='$gpu',FONTE='$fonte',Armazenamento='$armazenamento',Armazenamento_Secundário='$armazenamentosec',MotherBoard='$motherboard',image='$image' where id='$id'";
			}else{
				$update_sql="update product set categories_id='$categories_id',name='$name',price='$price',short_desc='$short_desc',description='$description',CPU='$cpu',RAM='$ram',GPU='$gpu',FONTE='$fonte',Armazenamento='$armazenamento',Armazenamento_Secundário='$armazenamentosec',MotherBoard='$motherboard' where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];

			/* Código redimensionar imagens
			if($result){
				$maxDimW = 480;
				$maxDimH = 480;
				list($width, $height, $type, $attr) = getimagesize( $_FILES['image']['name'] );
				if ( $width > $maxDimW || $height > $maxDimH ) {
					$target_filename = $_FILES['image']['name'];
					$fn = $_FILES['image']['name'];
					$size = getimagesize( $fn );
					$ratio = $size[0]/$size[1]; // width/height
					if( $ratio > 1) {
						$width = $maxDimW;
						$height = $maxDimH/$ratio;
					} else {
						$width = $maxDimW*$ratio;
						$height = $maxDimH;
					}
					$src = imagecreatefromstring(file_get_contents($fn));
					$dst = imagecreatetruecolor( $width, $height );
					imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );
				
					imagejpeg($dst, $target_filename); // adjust format as needed
				
				
				}
			}*/

			move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
			mysqli_query($con,"insert into product(categories_id,name,price,short_desc,description,CPU,RAM,GPU,FONTE,Armazenamento,Armazenamento_Secundário,MotherBoard,status,image) values('$categories_id','$name','$price','$short_desc','$description','$cpu','$ram','$gpu','$fonte','$armazenamento','$armazenamentosec','$motherboard',1,'$image')");
		}
		header('location:product.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Produtos</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Categorias</label>
									<select class="form-control" name="categories_id">
										<option>Selecionar Categoria</option>
										<?php
										$res=mysqli_query($con,"select id,categories from categories order by categories asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id']==$categories_id){
												echo "<option selected value=".$row['id'].">".$row['categories']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['categories']."</option>";
											}
											
										}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Nome do produto</label>
									<input type="text" name="name" placeholder="Insira o nome do produto" class="form-control" required value="<?php echo $name?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Preço</label>
									<input type="text" name="price" placeholder="Insira o preço do produto" class="form-control" required value="<?php echo $price?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Imagem</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Descrição brévia</label>
									<textarea name="short_desc" placeholder="Insira uma descrição brévia" class="form-control" required><?php echo $short_desc?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Descrição detalhada</label>
									<textarea name="description" placeholder="Insira uma descrição detalhada" class="form-control" required><?php echo $description?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Processador</label>
									<textarea name="CPU" placeholder="Insira o processador" class="form-control" required><?php echo $cpu?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">RAM</label>
									<textarea name="RAM" placeholder="Insira a RAM" class="form-control" required><?php echo $ram?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Placa gráfica</label>
									<textarea name="GPU" placeholder="Insira a placa gráfica" class="form-control" required><?php echo $gpu?></textarea>
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Fonte de alimentação</label>
									<textarea name="Fonte" placeholder="Insira a Fonte de alimentação" class="form-control" required><?php echo $fonte?></textarea>
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Armazenamento</label>
									<textarea name="Armazenamento" placeholder="Insira o armazanemento principal" class="form-control" required><?php echo $armazenamento?></textarea>
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Armazenamento secundário</label>
									<textarea name="ArmazenamentoSec" placeholder="Insira o armazenamento secundário" class="form-control"><?php echo $armazenamentosec?></textarea>
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Motherboard</label>
									<textarea name="MotherBoard" placeholder="Insira a motherboard" class="form-control" required><?php echo $motherboard?></textarea>
								</div>
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Inserir</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>