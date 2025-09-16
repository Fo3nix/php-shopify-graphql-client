<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountRedeemCodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DiscountRedeemCodeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountRedeemCodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
