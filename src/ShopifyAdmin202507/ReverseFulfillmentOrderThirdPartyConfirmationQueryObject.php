<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseFulfillmentOrderThirdPartyConfirmationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderThirdPartyConfirmation";

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
