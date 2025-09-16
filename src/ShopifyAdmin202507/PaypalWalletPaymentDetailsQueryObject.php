<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PaypalWalletPaymentDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaypalWalletPaymentDetails";

    public function selectPaymentMethodName()
    {
        $this->selectField("paymentMethodName");

        return $this;
    }
}
