<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectCapabilitiesRenderableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilitiesRenderable";

    public function selectData(MetaobjectCapabilitiesRenderableDataArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectCapabilityDefinitionDataRenderableQueryObject("data");
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
