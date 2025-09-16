<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReturnLineItemTypeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnLineItemTypeConnection";

    public function selectEdges(ReturnLineItemTypeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ReturnLineItemTypeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ReturnLineItemTypeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
