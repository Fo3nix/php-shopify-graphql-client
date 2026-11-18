<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyProductVariantsInCollectionCountArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["collectionId"];

    protected $collectionId;

    /**
     * The ID of the collection to filter variants by.
     * For example, `collectionId: "gid://shopify/Collection/123"`.
     */
    public function setCollectionId($collectionId): static
    {
        $this->collectionId = $collectionId;

        return $this;
    }
}
