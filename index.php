  
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php

            /*cor = "amarelo"; //comentário php sempre fechar com ; 
            $cor = "vermelho"; //quando se usa o mesmo valor na váriavel este valr é substituido  
            echo $cor;*/
            /*var_dump (12);  
            var_dump (34.34);
            var_dump (array("banana", "uva"));*/  
            /*$nome = "ana";
            echo "Olá " . $nome;*/ 
             /*$a = 3;
             $b = 5; 
            /$resultado = $a + $b;*/
      
             /*$resultado = $a - $b;*/ 
      
             /*echo $resultado;*/ 
      
           /* 2; 
            $b = 5; 
            if( $a > $b) {
              echo "a é menor que b";
            } else if ($a == $b) { 
              echo "a é igual ao b"; 
            } else { 
              echo "a é menor que b";
              }*/ 
            
     /*$i = 1;
       while($i < 10) { 
         $i = $i + 1; 
         echo $i. "<br>"; 
       }*/
      
      /*$i = 1;
       while($i < 10) { 
       $i = si + 1; 
         if ($i%2 == 0) { 
           echo "o valor de $i é par<br>; 
         } else { 
           echo "o valor de $i é impar<br>; 
         }*/
      
     
        
        /*$nome = "ana"; 
      
        switch ($nome) { 
        case "ana":
        echo "olá ana"; 
        break; 
        
        case "pedro":
        echo "ola pedro";
        break; 
        
        default:
        echo "não sei quem é você";
        }*/ 
      
      /*function soma($a, $b) { 
        $resultado = $a + $b;
        return $resultado;
      } 
      
        $numero1 = 23;
        $numero2 = 20;
      
      $resultadoFuncao = soma($numero1, $numero2);
      
      echo $resultadoFuncao;*/
      
      /*$cores = [ "vermelho", "azul"];
      echo $cores [1];*/ 
      
      /*$pessoa = ["nome" => "ana", "idade" => 23];
      echo $pessoa["idade"];*/
      
      /*$numeros = [1, 2, 3];
      array_push ($numeros, 4);
      echo $numeros [3];*/
      
      /*$frutas = array ("maçã", "laranja" "uva");
      
      foreach ($frutas as $fruta) {
      echo "a fruta é $fruta<br>";
     
      }*/
      
      $sopas = array ("batata", "carne", "tempero");
    
      foreach ($sopas as $sopa) {
        echo "a sopa é de $sopa <br>)"; 
       
         array_push($sopas, "sopa de cebola");
        foreach ($sopas as $sopa) {
        echo "a sopa é de $sopa <br>)"; 
        } 
      }
      array_pop ($sopas);
       foreach ($sopas as $sopa) {
        echo "a sopa é de $sopa <br>)"; 
       } 
      
     
      
        
        

           
    
      
    
            
       ?>
   
      
    </body>
</html>