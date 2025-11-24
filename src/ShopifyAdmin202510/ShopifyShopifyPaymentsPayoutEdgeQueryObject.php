<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsPayoutEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayoutEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyShopifyPaymentsPayoutEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsPayoutQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
