<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class DeliveryProfileProfileLocationGroupsArgumentsObject extends ArgumentsObject
{
    protected $locationGroupId;

    public function setLocationGroupId($locationGroupId)
    {
        $this->locationGroupId = $locationGroupId;

        return $this;
    }
}
