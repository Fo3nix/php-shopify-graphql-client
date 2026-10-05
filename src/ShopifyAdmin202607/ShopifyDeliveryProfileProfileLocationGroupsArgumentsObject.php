<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyDeliveryProfileProfileLocationGroupsArgumentsObject extends ArgumentsObject
{
    protected $locationGroupId;

    public function setLocationGroupId($locationGroupId)
    {
        $this->locationGroupId = $locationGroupId;

        return $this;
    }
}
