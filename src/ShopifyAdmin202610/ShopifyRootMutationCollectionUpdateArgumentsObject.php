<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionUpdateArgumentsObject extends ArgumentsObject
{
    protected $collection;

    /**
     * The properties and sources to use when updating the collection.
     */
    public function setCollection(ShopifyCollectionUpdateInputInputObject $shopifyCollectionUpdateInputInputObject): static
    {
        $this->collection = $shopifyCollectionUpdateInputInputObject;

        return $this;
    }
}
