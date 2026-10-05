<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnLineItemTypeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnLineItemTypeConnection";

    public function selectEdges(ShopifyReturnLineItemTypeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnLineItemTypeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyReturnLineItemTypeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
