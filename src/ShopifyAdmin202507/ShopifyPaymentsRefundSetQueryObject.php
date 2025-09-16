<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsRefundSetQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsRefundSet";

    public function selectAcquirerReferenceNumber()
    {
        $this->selectField("acquirerReferenceNumber");

        return $this;
    }
}
