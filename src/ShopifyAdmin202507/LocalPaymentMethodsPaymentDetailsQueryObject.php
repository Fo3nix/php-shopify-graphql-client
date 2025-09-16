<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LocalPaymentMethodsPaymentDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalPaymentMethodsPaymentDetails";

    public function selectPaymentDescriptor()
    {
        $this->selectField("paymentDescriptor");

        return $this;
    }

    public function selectPaymentMethodName()
    {
        $this->selectField("paymentMethodName");

        return $this;
    }
}
