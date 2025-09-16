<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootProductVariantByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(ProductVariantIdentifierInputInputObject $productVariantIdentifierInputInputObject)
    {
        $this->identifier = $productVariantIdentifierInputInputObject;

        return $this;
    }
}
