<?php
	namespace gabrielweb7\tools;
	
	class tools {

		public static function jsRedirecionar($url) { 
			echo "<script>document.location.href='{$url}';</script>";
		}

		public static function checkEmailValido($email) { 
			if(empty($email)) { return false; }
			return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? false : true;
		}
		
		public static function limitaCaracteres($texto, $limite, $quebra = true){
			$tamanho = strlen($texto);
			if($tamanho <= $limite){
				$novo_texto = $texto;
			}else{ 
				if($quebra == true){
					$novo_texto = trim(substr($texto, 0, $limite))."...";
				}else{ 
					$ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); 
					$novo_texto = trim(substr($texto, 0, $ultimo_espaco))."..."; 
				}
			}
			return $novo_texto; 
		}

	}
?>