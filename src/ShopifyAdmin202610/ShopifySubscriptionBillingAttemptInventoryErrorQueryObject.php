<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An inventory-related error that occurred during a subscription billing attempt.
 */
class ShopifySubscriptionBillingAttemptInventoryErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptInventoryError";

    /**
     * The error code for the inventory-related failure.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * A list of product variants that caused the insufficient inventory error.
     */
    public function selectInsufficientStockProductVariants(?ShopifySubscriptionBillingAttemptInventoryErrorInsufficientStockProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("insufficientStockProductVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
