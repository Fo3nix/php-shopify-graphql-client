<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionContractConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractConnection";

    public function selectEdges(ShopifySubscriptionContractConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySubscriptionContractConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySubscriptionContractConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
