<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySellingPlanEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
