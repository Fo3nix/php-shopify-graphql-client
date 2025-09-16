<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderMerchantRequestEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderMerchantRequestEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(FulfillmentOrderMerchantRequestEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderMerchantRequestQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
