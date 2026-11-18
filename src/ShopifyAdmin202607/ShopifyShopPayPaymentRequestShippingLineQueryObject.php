<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a shipping line for a Shop Pay payment request.
 */
class ShopifyShopPayPaymentRequestShippingLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestShippingLine";

    /**
     * The amount for the shipping line.
     */
    public function selectAmount(?ShopifyShopPayPaymentRequestShippingLineAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The code of the shipping line.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The label of the shipping line.
     */
    public function selectLabel(): static
    {
        $this->selectField("label");

        return $this;
    }
}
