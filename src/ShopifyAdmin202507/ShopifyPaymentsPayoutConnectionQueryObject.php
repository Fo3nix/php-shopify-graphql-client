<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsPayoutConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayoutConnection";

    public function selectEdges(ShopifyPaymentsPayoutConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsPayoutEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyPaymentsPayoutConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsPayoutQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyPaymentsPayoutConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
