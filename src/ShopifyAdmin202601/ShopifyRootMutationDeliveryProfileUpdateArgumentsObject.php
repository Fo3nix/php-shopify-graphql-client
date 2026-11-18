<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDeliveryProfileUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "profile"];

    protected $id;
    protected $profile;

    /**
     * The ID of the delivery profile to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the input fields for a delivery profile.
     */
    public function setProfile(ShopifyDeliveryProfileInputInputObject $shopifyDeliveryProfileInputInputObject): static
    {
        $this->profile = $shopifyDeliveryProfileInputInputObject;

        return $this;
    }
}
