<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsPayoutConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayoutConnection";

    public function selectEdges(ShopifyShopifyPaymentsPayoutConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsPayoutEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyShopifyPaymentsPayoutConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsPayoutQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyShopifyPaymentsPayoutConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
