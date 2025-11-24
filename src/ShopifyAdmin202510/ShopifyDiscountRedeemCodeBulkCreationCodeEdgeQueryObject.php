<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountRedeemCodeBulkCreationCodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeBulkCreationCodeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDiscountRedeemCodeBulkCreationCodeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountRedeemCodeBulkCreationCodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
