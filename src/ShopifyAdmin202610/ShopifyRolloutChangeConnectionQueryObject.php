<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRolloutChangeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutChangeConnection";

    public function selectEdges(ShopifyRolloutChangeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRolloutChangeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyRolloutChangeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
