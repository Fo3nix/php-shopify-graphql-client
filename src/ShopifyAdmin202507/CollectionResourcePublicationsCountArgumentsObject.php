<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class CollectionResourcePublicationsCountArgumentsObject extends ArgumentsObject
{
    protected $onlyPublished;

    public function setOnlyPublished($onlyPublished)
    {
        $this->onlyPublished = $onlyPublished;

        return $this;
    }
}
