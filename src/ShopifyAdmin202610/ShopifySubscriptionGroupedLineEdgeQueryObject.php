<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionGroupedLineEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionGroupedLineEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySubscriptionGroupedLineEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionGroupedLineUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
