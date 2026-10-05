<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootDeliveryPromiseProviderArgumentsObject extends ArgumentsObject
{
    protected $locationId;

    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }
}
