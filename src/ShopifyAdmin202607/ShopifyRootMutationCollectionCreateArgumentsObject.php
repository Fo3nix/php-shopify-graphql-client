<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionCreateArgumentsObject extends ArgumentsObject
{
    protected $collection;

    /**
     * The properties and sources to use when creating the collection. Define product membership with `sources` (conditions and manual selections) instead of the legacy `ruleSet`.
     */
    public function setCollection(ShopifyCollectionCreateInputInputObject $shopifyCollectionCreateInputInputObject): static
    {
        $this->collection = $shopifyCollectionCreateInputInputObject;

        return $this;
    }
}
