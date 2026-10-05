<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionLineConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionLineConnection";

    public function selectEdges(ShopifySubscriptionLineConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionLineEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySubscriptionLineConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionLineQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySubscriptionLineConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
