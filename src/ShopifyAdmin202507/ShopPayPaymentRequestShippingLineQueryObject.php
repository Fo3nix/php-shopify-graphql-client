<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayPaymentRequestShippingLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestShippingLine";

    public function selectAmount(ShopPayPaymentRequestShippingLineAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }
}
