<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The renderable capability of a metaobject definition.
 */
class ShopifyMetaobjectCapabilitiesRenderableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilitiesRenderable";

    /**
     * The data associated with the renderable capability.
     */
    public function selectData(?ShopifyMetaobjectCapabilitiesRenderableDataArgumentsObject $argsObject = null): ShopifyMetaobjectCapabilityDefinitionDataRenderableQueryObject
    {
        $object = new ShopifyMetaobjectCapabilityDefinitionDataRenderableQueryObject("data");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Indicates if the capability is enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }
}
