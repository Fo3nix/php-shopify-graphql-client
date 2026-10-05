<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaypalWalletPaymentDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaypalWalletPaymentDetails";

    public function selectPaymentMethodName()
    {
        $this->selectField("paymentMethodName");

        return $this;
    }
}
