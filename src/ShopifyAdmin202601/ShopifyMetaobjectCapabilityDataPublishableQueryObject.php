<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The publishable capability for the parent metaobject.
 */
class ShopifyMetaobjectCapabilityDataPublishableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityDataPublishable";

    /**
     * The visibility status of this metaobject across all channels.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
