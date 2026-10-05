<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseFulfillmentOrderLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderLineItemConnection";

    public function selectEdges(ShopifyReverseFulfillmentOrderLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyReverseFulfillmentOrderLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyReverseFulfillmentOrderLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
