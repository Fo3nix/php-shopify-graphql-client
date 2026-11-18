<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Describes a capability that is enabled on a Metaobject Definition.
 */
class ShopifyStandardMetaobjectCapabilityTemplateQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetaobjectCapabilityTemplate";

    /**
     * The type of capability that's enabled for the metaobject definition.
     */
    public function selectCapabilityType(): static
    {
        $this->selectField("capabilityType");

        return $this;
    }
}
