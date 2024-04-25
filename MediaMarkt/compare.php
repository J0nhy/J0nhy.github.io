<?php 
require('top.php');
?>
<!-- Inicio de banner -->
 <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
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
        <!-- Tabela de comparação de produtos -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">        
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th style="width:15%; text-align:center;">Imagem</th>
                                            <th style="width:35%; text-align:center;">Produto</th>
                                            <th style="width:25%; text-align:center;">Preço</th>
                                            <th style="width:35%; text-align:center;">CPU</th>
                                            <th style="width:15%; text-align:center;">RAM</th>
                                            <th style="width:25%; text-align:center;">GPU</th>
                                            <th style="width:5%; text-align:center;">Armazenamento</th>
                                            <th style="width:5%; text-align:center;">2ºArmazenamento</th>
                                            <th style="width:5%; text-align:center;">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										if(isset($_SESSION['comparacao'])){
											foreach($_SESSION['comparacao'] as $key=>$val){
											$productArr=get_product($con,'','',$key);
											$pname=$productArr[0]['name'];
											$price=$productArr[0]['price'];
                                            $cpu=$productArr[0]['CPU'];
											$image=$productArr[0]['image'];
                                            $ram=$productArr[0]['RAM'];										
                                            $arm=$productArr[0]['Armazenamento'];
                                            $armSec=$productArr[0]['Armazenamento_Secundário'];
                                            $gpu=$productArr[0]['GPU'];

											?>
											<tr>
												<td class="product-thumbnail"><a href="#"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>"  /></a></td>
                                                <td class="product-price"><span class="amount"><?php echo $pname?></span></td>
                                                <td class="product-price"><span class="amount"><?php echo $price .'€'?></span></td>
												<td class="product-name">
													<ul  class="pro__prize">
														<li><?php echo $cpu?></li>
													</ul>
												</td>
                                                
												<td class="product-price"><span class="amount"><?php echo $ram?></span></td>
												<td class="product-price"><span class="amount"><?php echo $gpu?></span></td>
												<td class="product-subtotal"><?php echo $arm?></td>
                                                <td class="product-subtotal"><?php if (empty($armSec)) {echo 'Não tem';}else{ echo $armSec;}?></td>
												<td class="product-remove"><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="icon-trash icons"></i></a></td>
											</tr>
											<?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>
        </div>
        
										
<?php require('footer.php')?>        