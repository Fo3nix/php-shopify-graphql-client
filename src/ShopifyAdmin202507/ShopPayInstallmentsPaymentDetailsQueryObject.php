<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayInstallmentsPaymentDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayInstallmentsPaymentDetails";

    public function selectPaymentMethodName()
    {
        $this->selectField("paymentMethodName");

        return $this;
    }
}
