<?php  
class price_changer_Model_Observer {  
public function priceUpdate(Varien_Event_Observer $observer){  
	$product=$observer->getEvent()->getProduct();  
	$price=$observer->getEvent()->getProduct();  
	switch (Mage::app()->getStore()->getCurrentCurrencyCode)  
	{  
		case 'USD':  
			$this->getData('price',$this->getData('catalog/product_attribute_backend_price'));  
			break;  
		case 'INR':  
			$this->setData('price',$this->getData('price1'));  
			break;  
		case 'EUR':  
			$this->setData('price',$this->getData('price2'));  
			break;  
	}  
	}  
}  
