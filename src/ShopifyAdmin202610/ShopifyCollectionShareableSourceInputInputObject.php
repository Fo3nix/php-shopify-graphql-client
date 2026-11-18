<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for linking an existing shareable source to a collection.
 */
class ShopifyCollectionShareableSourceInputInputObject extends InputObject
{
    const REQUIRED = ["sourceId"];

    protected $sourceId;

    /**
     * The ID of an existing shareable source to link to the collection.
     */
    public function setSourceId($sourceId): static
    {
        $this->sourceId = $sourceId;

        return $this;
    }
}
