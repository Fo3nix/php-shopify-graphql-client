<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LocalizationExtensionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalizationExtensionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(LocalizationExtensionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new LocalizationExtensionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
