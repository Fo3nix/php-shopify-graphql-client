<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountRedeemCodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeConnection";

    public function selectEdges(DiscountRedeemCodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DiscountRedeemCodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DiscountRedeemCodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountRedeemCodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DiscountRedeemCodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
