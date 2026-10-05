<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStoreCreditAccountEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyStoreCreditAccountEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStoreCreditAccountQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
