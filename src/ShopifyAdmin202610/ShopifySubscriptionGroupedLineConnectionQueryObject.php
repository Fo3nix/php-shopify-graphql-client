<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionGroupedLineConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionGroupedLineConnection";

    public function selectEdges(ShopifySubscriptionGroupedLineConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionGroupedLineEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySubscriptionGroupedLineConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionGroupedLineUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySubscriptionGroupedLineConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
