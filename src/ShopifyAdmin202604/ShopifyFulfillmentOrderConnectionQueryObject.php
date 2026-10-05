<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderConnection";

    public function selectEdges(ShopifyFulfillmentOrderConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyFulfillmentOrderConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyFulfillmentOrderConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
