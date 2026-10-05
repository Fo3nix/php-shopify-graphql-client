<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanGroupEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySellingPlanGroupEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanGroupQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
