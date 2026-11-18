<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The Online Store capability data for the metaobject definition.
 */
class ShopifyMetaobjectCapabilityDefinitionDataOnlineStoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityDefinitionDataOnlineStore";

    /**
     * Flag indicating if a sufficient number of redirects are available to redirect all published entries.
     */
    public function selectCanCreateRedirects(): static
    {
        $this->selectField("canCreateRedirects");

        return $this;
    }

    /**
     * The URL handle for accessing pages of this metaobject type in the Online Store.
     */
    public function selectUrlHandle(): static
    {
        $this->selectField("urlHandle");

        return $this;
    }
}
