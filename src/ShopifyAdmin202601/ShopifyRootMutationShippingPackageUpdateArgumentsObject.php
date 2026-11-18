<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationShippingPackageUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "shippingPackage"];

    protected $id;
    protected $shippingPackage;

    /**
     * The ID of the shipping package to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the input fields for a shipping package.
     */
    public function setShippingPackage(ShopifyCustomShippingPackageInputInputObject $shopifyCustomShippingPackageInputInputObject): static
    {
        $this->shippingPackage = $shopifyCustomShippingPackageInputInputObject;

        return $this;
    }
}
