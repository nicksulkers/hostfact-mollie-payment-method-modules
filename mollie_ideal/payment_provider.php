<?php
require_once __DIR__."/../mollie/payment_provider.php";

class mollie_ideal extends mollie
{
    public function __construct()
    {
        $this->conf['PaymentDirectory'] = basename(__DIR__);
        $this->conf['PaymentMethod'] = 'other';
        Payment_Provider_Base::__construct();
        $this->loadConf();
    }

    public static function getBackofficeSettings()
    {
        return array(
            'InternalName' => 'Mollie iDeal',
            'MerchantID' => array(
                'Title' => "Mollie API key",
                'Value' => ""
            ),
            'Advanced' => array(
                'Title' => "Betaling via iDeal",
                'Image' => "ideal.jpg",
                'Description' => "Met Mollie iDeal kunt u vertrouwd, veilig en gemakkelijk uw online betalingen verrichten.",
                'FeeType' => "",
                'FeeAmount' => "0",
                'FeeDesc' => "Transactiekosten",
                'Testmode' => "0"
            )
        );
    }

    public function choosePaymentMethod(){
        return false;
    }

    public function validateChosenPaymentMethod(){
        return true;
    }

    public function startTransaction()
    {
        $_SESSION['mollie_payment_method'] = 'ideal';
        parent::startTransaction();
    }
}