<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An inventory error caused by an issue with one or more of the contract merchandise lines.
 */
class ShopifySubscriptionBillingAttemptInsufficientStockProductVariantsErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptInsufficientStockProductVariantsError";

    /**
     * The code for the error.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * A list of product variants that caused the insufficient inventory error.
     */
    public function selectInsufficientStockProductVariants(?ShopifySubscriptionBillingAttemptInsufficientStockProductVariantsErrorInsufficientStockProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("insufficientStockProductVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An explanation of the error.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
