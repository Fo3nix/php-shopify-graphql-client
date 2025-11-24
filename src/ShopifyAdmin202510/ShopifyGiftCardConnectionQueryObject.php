<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyGiftCardConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardConnection";

    public function selectEdges(ShopifyGiftCardConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyGiftCardEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyGiftCardConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyGiftCardQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyGiftCardConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
