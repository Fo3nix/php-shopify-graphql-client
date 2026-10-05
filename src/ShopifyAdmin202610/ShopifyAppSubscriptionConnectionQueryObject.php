<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppSubscriptionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionConnection";

    public function selectEdges(ShopifyAppSubscriptionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppSubscriptionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyAppSubscriptionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppSubscriptionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyAppSubscriptionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
