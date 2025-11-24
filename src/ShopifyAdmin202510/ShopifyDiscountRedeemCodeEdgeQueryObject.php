<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountRedeemCodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDiscountRedeemCodeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountRedeemCodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
