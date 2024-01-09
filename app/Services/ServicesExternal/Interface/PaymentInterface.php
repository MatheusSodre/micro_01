<?php

namespace App\Services\ServicesExternal\Interface;
interface PaymentInterface
{

    public function execute();
    public function formatParams();
    public function generatePayment();
    public function returnData(array $params);

}
