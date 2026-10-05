<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopPayPaymentRequestDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestDiscount";

    public function selectAmount(ShopifyShopPayPaymentRequestDiscountAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }
}
