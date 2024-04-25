<?php require('top.php')?> 
            
            
<div class="body__overlay"></div>
        <!-- Inicio do slider -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- inicio de imagem1 do slider -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>PC's para desenvolvedores</h2>
                                        <h1>A Besta</h1>
                                        <div class="cr__btn">
                                            <a href="product.php?id=44">Vê mais!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/product/1.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fim de imagem1 do slider -->
                <!-- Inicio de imagem2 do slider -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>Pc's para desenvolvedores</h2>
                                        <h1>O mais em conta</h1>
                                        <div class="cr__btn">
                                            <a href="product.php?id=11">Vê mais!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/product/2.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fim de imagem2 do slider -->
            </div>
        </div>
        <!-- Fim de slider -->
      
        <!-- Início de área de produtos adicionados recentemente -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Novos lançamentos</h2>
                            <p>Descobre aqui os nossos novos lançamentos</p>
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
							<?php
							$get_product=get_product($con,4);
							foreach($get_product as $list){
							?>
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category"> 
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                        </a>
                                    </div>
                                    
                                    <div class="fr__product__inner ">
                                        <h4><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li><?php echo $list['price'], '€'?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim de área de produtos adicionados recentemente -->

        
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

        <!-- Fim da área de produtos BestSellers -->
<?php require('footer.php')?>        