<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyCollectionResourcePublicationsCountArgumentsObject extends ArgumentsObject
{
    protected $onlyPublished;

    public function setOnlyPublished($onlyPublished)
    {
        $this->onlyPublished = $onlyPublished;

        return $this;
    }
}
