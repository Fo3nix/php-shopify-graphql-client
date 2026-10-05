<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySalesAgreementConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SalesAgreementConnection";

    public function selectEdges(ShopifySalesAgreementConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySalesAgreementEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySalesAgreementConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
