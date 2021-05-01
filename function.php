<?php
/*
 $myarry =['omar','omar','omar','SARA','sara','reem'];
 
 function getNumMatches ($arr,$term)
 {
    $cont=0;
    for ($i=0; $i <count($arr) ; $i++) { 
        
      if ($arr[$i] == $term) {
        $cont++;
      }
      

    }
    return $cont;

 }
 $countName=getNumMatches($myarry,"reem");
  echo $countName;

*/
/////////////////////end function search in arry////////////////////////


////////////////////////////frist function discount//////////
function  getPriceWithDiscount ($price)
{
    if ($price < 1000) {
        $price =$price-($price*(10/100));
        echo" $price";
    }
    elseif($price >=1000)
    {
        $price =$price-($price*(5/100));
        echo "$price";
    }
    

}


