<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryParticipantServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryParticipantService";

    public function selectActive()
    {
        $this->selectField("active");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
