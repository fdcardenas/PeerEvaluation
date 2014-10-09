<?php 
	
        function conectar(){
            $con=@mysql_connect('localhost', 'root', '');
            @mysql_select_db('peerassessment', $con);
        }
        
        function crypt_blowfish_bydinvaders($password, $digito = 7) {
            $set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            $salt = sprintf('$2a$%02d$', $digito);
            for($i = 0; $i < 22; $i++){
                $salt .= $set_salt[mt_rand(0, 22)];
            }
            return crypt($password, $salt);
}
        
?>
