<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsRefundSetQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsRefundSet";

    public function selectAcquirerReferenceNumber()
    {
        $this->selectField("acquirerReferenceNumber");

        return $this;
    }
}
