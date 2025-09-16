<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CardPaymentDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CardPaymentDetails";

    public function selectAvsResultCode()
    {
        $this->selectField("avsResultCode");

        return $this;
    }

    public function selectBin()
    {
        $this->selectField("bin");

        return $this;
    }

    public function selectCompany()
    {
        $this->selectField("company");

        return $this;
    }

    public function selectCvvResultCode()
    {
        $this->selectField("cvvResultCode");

        return $this;
    }

    public function selectExpirationMonth()
    {
        $this->selectField("expirationMonth");

        return $this;
    }

    public function selectExpirationYear()
    {
        $this->selectField("expirationYear");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectNumber()
    {
        $this->selectField("number");

        return $this;
    }

    public function selectPaymentMethodName()
    {
        $this->selectField("paymentMethodName");

        return $this;
    }

    public function selectWallet()
    {
        $this->selectField("wallet");

        return $this;
    }
}
