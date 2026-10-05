<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopPayInstallmentsPaymentDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayInstallmentsPaymentDetails";

    public function selectPaymentMethodName()
    {
        $this->selectField("paymentMethodName");

        return $this;
    }
}
