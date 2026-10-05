<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentEventConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentEventConnection";

    public function selectEdges(ShopifyFulfillmentEventConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentEventEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyFulfillmentEventConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentEventQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyFulfillmentEventConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
