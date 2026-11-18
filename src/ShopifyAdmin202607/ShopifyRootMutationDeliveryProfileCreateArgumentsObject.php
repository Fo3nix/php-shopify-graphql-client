<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDeliveryProfileCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["profile"];

    protected $profile;

    /**
     * Specifies the input fields for a delivery profile.
     */
    public function setProfile(ShopifyDeliveryProfileInputInputObject $shopifyDeliveryProfileInputInputObject): static
    {
        $this->profile = $shopifyDeliveryProfileInputInputObject;

        return $this;
    }
}
