<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerAccountPageConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAccountPageConnection";

    public function selectEdges(ShopifyCustomerAccountPageConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerAccountPageEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCustomerAccountPageConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
