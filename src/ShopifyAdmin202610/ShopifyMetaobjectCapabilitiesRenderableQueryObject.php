<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectCapabilitiesRenderableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilitiesRenderable";

    public function selectData(ShopifyMetaobjectCapabilitiesRenderableDataArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectCapabilityDefinitionDataRenderableQueryObject("data");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
