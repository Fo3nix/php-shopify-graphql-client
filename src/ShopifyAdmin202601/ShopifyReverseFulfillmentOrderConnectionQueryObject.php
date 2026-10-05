<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseFulfillmentOrderConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderConnection";

    public function selectEdges(ShopifyReverseFulfillmentOrderConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyReverseFulfillmentOrderConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyReverseFulfillmentOrderConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
