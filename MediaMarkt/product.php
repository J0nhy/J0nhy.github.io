<?php 
//Busca o ficheiro top.php
require('top.php');
//Busca o produto a exibir
if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);

	if($product_id>0){
		$get_product=get_product($con,'','',$product_id);
        $idPro = $product_id;
	}else{
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>

 <!-- Inicio da banner -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/3.jpg) no-repeat scroll center center / cover ;border-style: solid; border-color:black;border-left: transparent; border-right: transparent;">
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
        <!-- Fim da banner -->
        <!-- Inicio da área de detalhes do produto -->
        <section class="htc__product__details bg__white ptb--100">
            <div class="htc__product__details__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="htc__product__details__tab__content">
                                <!-- Imagem do produto -->
                                <div class="product__big__images">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim da imagem do produto -->
                                
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="ht__product__dtl">
                                <h2><?php echo $get_product['0']['name']?></h2>
                                <ul class="pro__prize">              
                                    <li><?php echo $get_product['0']['price'], '€'?></li>
                                </ul>
                                <p class="pro__info"><?php echo $get_product['0']['short_desc']?></p><br>
                                <p class="desc"><?php echo $get_product['0']['description']?></p>
                          
                                <div class="ht__pro__desc">
                                    
                                    <div class="sin__desc align--left">
                                        <p><span>Categorias:</span></p>
                                        <ul class="pro__cat__list">
                                            <li><a href="categories.php?id=<?php echo $list['id']?>"><?php echo $get_product['0']['categories']?></a></li>
                                        </ul>
                                    </div>
                                    
                                    </div>
									
                                </div>
                                <ul>
								<a class="fr__btn" href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add')">Adicionar para comparar</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim da area de detalhes do produto -->
        



		<!-- Descrição do produto -->
        <section class="htc__produc__decription bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="pro__details__tab" role="tablist">
                            <li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">Descrição</a></li>
                        </ul>
                    <!--Descrição do Produto-->
                        <div class="row">
                    <div class="col-xs-12">
                        <div class="ht__pro__details__content">
                            <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                                <div class="pro__tab__content__inner">
                                    <?php echo $get_product['0']['description']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <!--Tabela com componentes-->
                        <table class="table_product ">
						 <thead>
							<tr>
							   <th style="width:15%; text-align:center;">CPU</th>
							   <th style="width:5%; text-align:center;">RAM</th>
							   <th style="width:16%; text-align:center;">GPU</th>
				
							   <th style="width:12%; text-align:center;">Armazenamento</th>
							   <th style="width:12%; text-align:center;">2ºArmazenamento</th>
							  

							</tr>
						 </thead>
						 <tbody>
							<?php 
                        $sql="select * from product where id = '$idPro'";
                        $res=mysqli_query($con,$sql);

							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td style="text-align:center;"><?php echo $row['CPU']?></td>
							   <td style="text-align:center;"><?php echo $row['RAM']?></td>
							   <td style="text-align:center;"><?php echo $row['GPU']?></td>
							
							   <td style="text-align:center;"><?php echo $row['Armazenamento']?></td>
							   <td style="text-align:center;"><?php if (empty($row['Armazenamento_Secundário'])) {echo 'Não tem';}else{ echo $row['Armazenamento_Secundário'];}?></td>
							
							</tr>
							<?php } ?>
						 </tbody>
					  </table>



                    </div>
                </div>
                
                
            </div>
        </section>
        <br><br><br><br><br>
        <!-- Fim da descrição do produto -->
        <?php require('footer.php')?>               
										
