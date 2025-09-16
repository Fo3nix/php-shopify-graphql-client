<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SalesAgreementConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SalesAgreementConnection";

    public function selectEdges(SalesAgreementConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new SalesAgreementEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(SalesAgreementConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
