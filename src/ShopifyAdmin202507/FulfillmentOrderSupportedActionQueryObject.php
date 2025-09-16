<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderSupportedActionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderSupportedAction";

    public function selectAction()
    {
        $this->selectField("action");

        return $this;
    }

    public function selectExternalUrl()
    {
        $this->selectField("externalUrl");

        return $this;
    }
}
