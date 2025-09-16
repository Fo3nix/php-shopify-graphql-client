<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootDeliveryPromiseProviderArgumentsObject extends ArgumentsObject
{
    protected $locationId;

    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }
}
