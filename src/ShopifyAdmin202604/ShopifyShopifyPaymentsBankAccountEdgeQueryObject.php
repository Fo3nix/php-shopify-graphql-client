<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsBankAccountEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBankAccountEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyShopifyPaymentsBankAccountEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsBankAccountQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
