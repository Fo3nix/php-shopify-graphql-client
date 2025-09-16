<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class GiftCardTransactionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardTransactionConnection";

    public function selectEdges(GiftCardTransactionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new GiftCardTransactionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(GiftCardTransactionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
