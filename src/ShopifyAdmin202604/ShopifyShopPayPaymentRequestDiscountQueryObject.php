<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a discount for a Shop Pay payment request.
 */
class ShopifyShopPayPaymentRequestDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestDiscount";

    /**
     * The amount of the discount.
     */
    public function selectAmount(?ShopifyShopPayPaymentRequestDiscountAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The label of the discount.
     */
    public function selectLabel(): static
    {
        $this->selectField("label");

        return $this;
    }
}
