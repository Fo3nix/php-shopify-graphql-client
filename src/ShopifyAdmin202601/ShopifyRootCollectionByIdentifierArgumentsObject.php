<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCollectionByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(ShopifyCollectionIdentifierInputInputObject $shopifyCollectionIdentifierInputInputObject)
    {
        $this->identifier = $shopifyCollectionIdentifierInputInputObject;

        return $this;
    }
}
