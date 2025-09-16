<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryParticipantServiceQueryObject extends QueryObject
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
