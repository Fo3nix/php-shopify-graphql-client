<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyProductResourcePublicationsCountArgumentsObject extends ArgumentsObject
{
    protected $onlyPublished;

    public function setOnlyPublished($onlyPublished)
    {
        $this->onlyPublished = $onlyPublished;

        return $this;
    }
}
