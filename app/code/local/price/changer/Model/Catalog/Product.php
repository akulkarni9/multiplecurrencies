<?php  
class price_changer_Model_Catalog_Product extends Mage_Catalog_Model_Product  
{  
   //$qty=0;  
  public function getFinalPrice($qty=null)  
   {  
      switch(Mage::app()->getStore()->getCurrentCurrencyCode())  
      {  
       case 'INR': $this->setData('price', $this->getData('price1'));  
        			break;  
       case 'EUR': $this->setData('price', $this->getData('price2'));  
        			break;  
      }  

     return parent::getFinalPrice($qty);  
   }  
}  
?>  
