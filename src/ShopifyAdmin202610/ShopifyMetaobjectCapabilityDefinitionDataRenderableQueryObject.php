<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The renderable capability data for the metaobject definition.
 */
class ShopifyMetaobjectCapabilityDefinitionDataRenderableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityDefinitionDataRenderable";

    /**
     * The metaobject field used as an alias for the SEO page description.
     */
    public function selectMetaDescriptionKey(): static
    {
        $this->selectField("metaDescriptionKey");

        return $this;
    }

    /**
     * The metaobject field used as an alias for the SEO page title.
     */
    public function selectMetaTitleKey(): static
    {
        $this->selectField("metaTitleKey");

        return $this;
    }
}
