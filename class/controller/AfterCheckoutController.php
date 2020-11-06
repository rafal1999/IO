<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_PATH."MainPageController.php");

class AfterCheckoutController extends MainPageController
{   

    function __construct(){
        parent::__construct();
        try{
            $this->viewMainPage = $this->loadView("MainPageAfterCheckoutView");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }
    }


    protected function showPage(){  

        $products = $this->getProductsFromCookies();

        if(count($products) == 0 || !is_array($products)){
            $this->changeController("CartController",[]);
        }
        
        $inData = [];
        
        $inData['_firstName'] = $_POST['first-name'];
        $inData['_lastName'] = $_POST['last-name'];
        $inData['_street'] = $_POST['street'];
        $inData['_houseNumber'] = $_POST['house-number'];
        $inData['_postalCode'] = $_POST['postal-code'];
        $inData['_flatNumber'] = $_POST['flat-number'];
        $inData['_city'] = $_POST['city'];
        $inData['_email'] = $_POST['email'];
        $inData['_phoneNumber'] = $_POST['phone-number'];
        $inData['_paymentMethod'] = isset($_POST['payment-method']) ? $_POST['payment-method'] : 0;
        $inData['_acceptConditions'] = isset($_POST['accept-conditions']) ? $_POST['accept-conditions'] : 0;
        
        foreach($inData as $key => $value){
            if(empty($value) && $key != "_flatNumber"){
                $this->changeController('CheckoutController', []);
            }
        }

        $inData['_delivered'] = false;

        $products = $this->getProductsFromCookies();

        $totalPrice = 0;

        if(!empty($products)){
            foreach($products as $product){         
                $productData = $this->modelProduct->getOneRow("_idproduct", $product[0]);
                $productData['_count'] = $product[1];
                $productData['_idProduct'] = $productData["_idproduct"];
                $productData['_totalPrice'] = $product[1] * ($productData['_price'] - $productData['_discount']);
                $totalPrice += $productData['_totalPrice'];
                $this->viewMainPage->addProduct($productData);
            }
        }else{
            $this->viewMainPage->addProduct([]);
        }

        $this->viewMainPage->setOrder($inData);

        $this->viewMainPage->setTotalPrice($totalPrice);

        $this->viewMainPage->output();
    }

}


?>