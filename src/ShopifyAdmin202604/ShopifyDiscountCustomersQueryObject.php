<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCustomersQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomers";

    public function selectCustomers(ShopifyDiscountCustomersCustomersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
