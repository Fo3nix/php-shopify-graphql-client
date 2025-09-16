<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerAccountPageConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAccountPageConnection";

    public function selectEdges(CustomerAccountPageConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CustomerAccountPageEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CustomerAccountPageConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
