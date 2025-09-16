<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryLocalPickupSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocalPickupSettings";

    public function selectInstructions()
    {
        $this->selectField("instructions");

        return $this;
    }

    public function selectPickupTime()
    {
        $this->selectField("pickupTime");

        return $this;
    }
}
