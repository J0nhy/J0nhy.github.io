<?php
require('top.php');

$per_page=5;
$start=0;
$current_page=1;
if(isset($_GET['start'])){
	$start=$_GET['start'];
	if($start<=0){
		$start=0;
		$current_page=1;
	}else{
		$current_page=$start;
		$start--;
		$start=$start*$per_page;
	}
}
//Seleciona os produtos 
$record=mysqli_num_rows(mysqli_query($con,"select * from product"));
$pagi=ceil($record/$per_page);
//Estabelece um limite nos produtos que foram buscados
$sql="select * from product limit $start,$per_page";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pagination Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .mt-100{margin-top:50px;}
  .mt-30{margin-top:30px;}
  .mb-30{margin-bottom:30px;}
  </style>
</head>
<body>
	 <!-- Inicio de banner -->
	 <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ; border-style: solid; border-color:black;border-left: transparent; border-right: transparent;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim de banner -->



<div class="container mt-100">
<div class="section__title--2 text-center">
  <h2 class="title__line">Todos os nossos produtos</h2></Div><br><br>   
  <ul class="list-group float">
	<?php 
	//Começa e exibir os 5 primeiros produtos
	if(mysqli_num_rows($res)>0){
		
	while($row=mysqli_fetch_assoc($res)){?><br><div class="texto">
			<a href="product.php?id=<?php echo $row['id']?>">
    <img style="width:300px; height:250px;" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" alt="product images">
	</a>
 <br><br><div class="textoPro">
		<?php echo $row['name']?><div class="preço"><?php echo '<br>' . $row['price'] .'€'?></div></div></div>
    <?php } } else {?>
	No records
	<?php } ?>
	
  </ul>           <br><br><br><br><br><br><br><br>
  <div class="paginacao"><ul class="pagination mt-30">
	<?php 
    // Muda o nr dos produtos exibidos
	for($i=1;$i<=$pagi;$i++){
	$class='';
	if($current_page==$i){
		?><li class="page-item active"><a class="page-link" href="javascript:void(0)"><?php echo $i?></a></li><?php
	}else{
	?>
		<li class="page-item"><a class="page-link" href="?start=<?php echo $i?>"><?php echo $i?></a></li>
	<?php
	}
	?>
    
	<?php } ?>
  </ul></div>

</div>
<!-- Inicio de produtos BestSellers -->
<section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Best Sellers</h2>
                            <p>Descobre aqui os nossos Best Sellers</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__wrap clearfix">
                        <!-- Inicio de produto -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product.php?id=29">
                                        <img src="images/product/9.jpg" alt="product images"> 
                                    </a>
                                </div>
                                <div class="fr__product__inner">
                                    <h4><a href="product.php?id=29">GAMING DESKTOP PC ASUS	</a></h4>
                                    <ul class="fr__pro__prize">
                                        <li>1599€</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Fim de produto -->
                        <!-- Inicio de produto -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product.php?id=36">
                                        <img src="images/product/10.jpg" alt="product images">
                                    </a>
                                </div>
                                <div class="fr__product__inner">
                                    <h4><a href="product.php?id=36">GAMING DESKTOP PC HP TG01-1024NP</a></h4>
                                    <ul class="fr__pro__prize">
                                        <li>799€</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Fim de produto -->
                        <!-- Inicio de produto -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb ">
                                    <a href="product.php?id=30">
                                        <img src="images/product/11.png" alt="product images">
                                    </a>
                                </div>
                                <div class="fr__product__inner">
                                    <h4><a href="product.php?id=30">GAMING DESKTOP PC OMEN OBELISK	</a></h4>
                                    <ul class="fr__pro__prize">
                                        <li>1449€</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Fim de produto -->
                        <!-- Inicio de produto -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb <?php echo $row['id'];?>">
                                    <a href="product.php?id=14">
                                        <img src="images/product/12.jpg" alt="product images">
                                    </a>
                                </div>
                                <div class="fr__product__inner">
                                    <h4><a href="product.php?id=14">GAMING DESKTOP PC ASUS ROG STRIX</a></h4>
                                    <ul class="fr__pro__prize">
                                        <li>999€</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
     
                        <!-- Fim de produto -->
		                <script src="js/classie.js"></script>
		                <script src="js/main.js"></script>

</body>
</html>
<?php require('footer.php')?>        
