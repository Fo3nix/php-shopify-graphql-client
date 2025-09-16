<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayPaymentRequestDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestDiscount";

    public function selectAmount(ShopPayPaymentRequestDiscountAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
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
