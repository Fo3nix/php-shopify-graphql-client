<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLocalizationExtensionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalizationExtensionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyLocalizationExtensionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocalizationExtensionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
