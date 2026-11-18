<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyDeliveryProfileProfileLocationGroupsArgumentsObject extends ArgumentsObject
{
    protected $locationGroupId;

    /**
     * Filter the location groups of the profile by location group ID.
     */
    public function setLocationGroupId($locationGroupId): static
    {
        $this->locationGroupId = $locationGroupId;

        return $this;
    }
}
