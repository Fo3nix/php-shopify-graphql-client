<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectCapabilityDefinitionDataRenderableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityDefinitionDataRenderable";

    public function selectMetaDescriptionKey()
    {
        $this->selectField("metaDescriptionKey");

        return $this;
    }

    public function selectMetaTitleKey()
    {
        $this->selectField("metaTitleKey");

        return $this;
    }
}
