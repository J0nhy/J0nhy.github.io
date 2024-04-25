<?php
//classe com as funções para adicionar, alterar, remover o produto da exibição
class add_to_compare{
	function addProduct($pid){
		$_SESSION['comparacao'][$pid]=$pid;
	}
	
	function updateProduct($pid,$qty){
		if(isset($_SESSION['comparacao'][$pid])){
			$_SESSION['comparacao'][$pid]=$pid;
		}
	}
	
	function removeProduct($pid){
		if(isset($_SESSION['comparacao'][$pid])){
			unset($_SESSION['comparacao'][$pid]);
		}
	}
	
	function emptyProduct(){
		unset($_SESSION['comparacao']);
	}
	
	function totalProduct(){
		if(isset($_SESSION['comparacao'])){
			return count($_SESSION['comparacao']);
		}else{
			return 0;
		}
		
	}

}
?>