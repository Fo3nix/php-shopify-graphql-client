<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountRedeemCodeBulkCreationCodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeBulkCreationCodeConnection";

    public function selectEdges(ShopifyDiscountRedeemCodeBulkCreationCodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountRedeemCodeBulkCreationCodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDiscountRedeemCodeBulkCreationCodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountRedeemCodeBulkCreationCodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDiscountRedeemCodeBulkCreationCodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
