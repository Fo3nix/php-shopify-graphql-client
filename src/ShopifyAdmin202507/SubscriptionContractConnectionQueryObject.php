<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionContractConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractConnection";

    public function selectEdges(SubscriptionContractConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(SubscriptionContractConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(SubscriptionContractConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
