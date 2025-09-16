<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppSubscriptionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionConnection";

    public function selectEdges(AppSubscriptionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new AppSubscriptionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(AppSubscriptionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new AppSubscriptionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(AppSubscriptionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
