<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTranslatableResourceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslatableResourceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyTranslatableResourceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslatableResourceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
