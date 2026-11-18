<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyProductVariantResourcePublicationsCountArgumentsObject extends ArgumentsObject
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
