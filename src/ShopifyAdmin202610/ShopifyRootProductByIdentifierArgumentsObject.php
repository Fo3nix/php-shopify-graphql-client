<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootProductByIdentifierArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["identifier"];

    protected $identifier;

    /**
     * The identifier of the product.
     */
    public function setIdentifier(ShopifyProductIdentifierInputInputObject $shopifyProductIdentifierInputInputObject): static
    {
        $this->identifier = $shopifyProductIdentifierInputInputObject;

        return $this;
    }
}
