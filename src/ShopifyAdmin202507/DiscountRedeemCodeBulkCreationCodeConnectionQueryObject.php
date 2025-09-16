<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountRedeemCodeBulkCreationCodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeBulkCreationCodeConnection";

    public function selectEdges(DiscountRedeemCodeBulkCreationCodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DiscountRedeemCodeBulkCreationCodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DiscountRedeemCodeBulkCreationCodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountRedeemCodeBulkCreationCodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DiscountRedeemCodeBulkCreationCodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
