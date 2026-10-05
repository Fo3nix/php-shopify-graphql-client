<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseFulfillmentOrderThirdPartyConfirmationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderThirdPartyConfirmation";

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
