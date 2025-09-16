<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppSubscriptionDiscountAmountQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionDiscountAmount";

    public function selectAmount(AppSubscriptionDiscountAmountAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
