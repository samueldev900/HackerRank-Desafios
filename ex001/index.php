
    <?php

    $arr1 = array(-4, 3, -9, 0, 4, 1);


    function plusMinus($arr){

        $contPositivo =0;
        $contZero= 0;
        $contNegativo = 0;
        
        foreach($arr as $cont){
            
            if($cont > 0){
                $contPositivo++; 
            }elseif($cont == 0 ){
                $contZero++;
            }elseif($cont < 0 ){
                $contNegativo++;
            }
    
        }
    
        $lenfArr = count($arr);
        $vPosit = $contPositivo/$lenfArr;
        $vNegat = $contNegativo/$lenfArr;
        $vZero = $contZero/$lenfArr;
        
        $vPositFormatado = number_format($vPosit,6);
        $vNegatFormatado =  number_format($vNegat,6);
        $vZeroFormatado = number_format($vZero,6);
    
  
        $result = array($vPositFormatado, $vNegatFormatado, $vZeroFormatado );

        foreach($result as $print){
             
            echo $print . "\n";

        }
    
        return array(
             $vNegatFormatado,
             $vPositFormatado,
             $vZeroFormatado
        );
    }

    plusMinus($arr1);
       




    
    ?>
