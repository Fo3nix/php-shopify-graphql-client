<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCollectionByIdentifierArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["identifier"];

    protected $identifier;

    /**
     * The identifier of the collection.
     */
    public function setIdentifier(ShopifyCollectionIdentifierInputInputObject $shopifyCollectionIdentifierInputInputObject): static
    {
        $this->identifier = $shopifyCollectionIdentifierInputInputObject;

        return $this;
    }
}
