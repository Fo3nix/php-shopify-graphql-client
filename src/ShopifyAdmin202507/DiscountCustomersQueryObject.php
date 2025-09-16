<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCustomersQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomers";

    public function selectCustomers(DiscountCustomersCustomersArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
