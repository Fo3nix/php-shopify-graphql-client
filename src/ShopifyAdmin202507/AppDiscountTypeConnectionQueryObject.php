<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppDiscountTypeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppDiscountTypeConnection";

    public function selectEdges(AppDiscountTypeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new AppDiscountTypeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(AppDiscountTypeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new AppDiscountTypeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(AppDiscountTypeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
