<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

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
