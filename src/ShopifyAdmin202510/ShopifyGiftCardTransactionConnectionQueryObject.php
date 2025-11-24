<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyGiftCardTransactionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardTransactionConnection";

    public function selectEdges(ShopifyGiftCardTransactionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyGiftCardTransactionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyGiftCardTransactionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
