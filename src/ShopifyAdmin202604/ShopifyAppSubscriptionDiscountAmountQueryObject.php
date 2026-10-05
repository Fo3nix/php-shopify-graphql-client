<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppSubscriptionDiscountAmountQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionDiscountAmount";

    public function selectAmount(ShopifyAppSubscriptionDiscountAmountAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
