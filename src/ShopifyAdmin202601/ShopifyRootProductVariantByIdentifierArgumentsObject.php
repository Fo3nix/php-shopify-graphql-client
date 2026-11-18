<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootProductVariantByIdentifierArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["identifier"];

    protected $identifier;

    /**
     * The identifier of the product variant.
     */
    public function setIdentifier(ShopifyProductVariantIdentifierInputInputObject $shopifyProductVariantIdentifierInputInputObject): static
    {
        $this->identifier = $shopifyProductVariantIdentifierInputInputObject;

        return $this;
    }
}
