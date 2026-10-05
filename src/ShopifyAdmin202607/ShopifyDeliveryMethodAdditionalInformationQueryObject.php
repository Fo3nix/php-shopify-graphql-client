<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryMethodAdditionalInformationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethodAdditionalInformation";

    public function selectInstructions()
    {
        $this->selectField("instructions");

        return $this;
    }

    public function selectPhone()
    {
        $this->selectField("phone");

        return $this;
    }
}
