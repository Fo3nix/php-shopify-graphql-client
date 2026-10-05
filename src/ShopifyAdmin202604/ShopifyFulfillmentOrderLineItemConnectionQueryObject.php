<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItemConnection";

    public function selectEdges(ShopifyFulfillmentOrderLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyFulfillmentOrderLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyFulfillmentOrderLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
