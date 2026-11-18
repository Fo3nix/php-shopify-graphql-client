<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The translatable capability of a metaobject definition.
 */
class ShopifyMetaobjectCapabilitiesTranslatableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilitiesTranslatable";

    /**
     * Indicates if the capability is enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }
}
