<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyCollectionResourcePublicationsCountArgumentsObject extends ArgumentsObject
{
    protected $onlyPublished;

    /**
     * Include only the resource's publications that are published. If false, then return all the resource's publications including future publications.
     */
    public function setOnlyPublished($onlyPublished): static
    {
        $this->onlyPublished = $onlyPublished;

        return $this;
    }
}
