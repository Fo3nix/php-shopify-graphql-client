<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootProductVariantByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(ShopifyProductVariantIdentifierInputInputObject $shopifyProductVariantIdentifierInputInputObject)
    {
        $this->identifier = $shopifyProductVariantIdentifierInputInputObject;

        return $this;
    }
}
