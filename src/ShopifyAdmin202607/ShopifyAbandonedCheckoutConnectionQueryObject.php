<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAbandonedCheckoutConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutConnection";

    public function selectEdges(ShopifyAbandonedCheckoutConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonedCheckoutEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyAbandonedCheckoutConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonedCheckoutQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyAbandonedCheckoutConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
