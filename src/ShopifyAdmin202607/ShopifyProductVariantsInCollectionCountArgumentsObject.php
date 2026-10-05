<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyProductVariantsInCollectionCountArgumentsObject extends ArgumentsObject
{
    protected $collectionId;

    public function setCollectionId($collectionId)
    {
        $this->collectionId = $collectionId;

        return $this;
    }
}
