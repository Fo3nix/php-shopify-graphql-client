<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The Online Store capability for the parent metaobject.
 */
class ShopifyMetaobjectCapabilityDataOnlineStoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityDataOnlineStore";

    /**
     * The theme template used when viewing the metaobject in a store.
     */
    public function selectTemplateSuffix(): static
    {
        $this->selectField("templateSuffix");

        return $this;
    }
}
