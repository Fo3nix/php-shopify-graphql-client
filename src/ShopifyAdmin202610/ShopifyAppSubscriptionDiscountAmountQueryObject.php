<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The fixed amount value of a discount.
 */
class ShopifyAppSubscriptionDiscountAmountQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionDiscountAmount";

    /**
     * The fixed amount value of a discount.
     */
    public function selectAmount(?ShopifyAppSubscriptionDiscountAmountAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
