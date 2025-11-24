<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopPayPaymentRequestShippingLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestShippingLine";

    public function selectAmount(ShopifyShopPayPaymentRequestShippingLineAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
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
