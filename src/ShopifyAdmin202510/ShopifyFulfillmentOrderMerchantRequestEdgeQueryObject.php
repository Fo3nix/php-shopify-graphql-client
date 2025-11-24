<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderMerchantRequestEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderMerchantRequestEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyFulfillmentOrderMerchantRequestEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderMerchantRequestQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
