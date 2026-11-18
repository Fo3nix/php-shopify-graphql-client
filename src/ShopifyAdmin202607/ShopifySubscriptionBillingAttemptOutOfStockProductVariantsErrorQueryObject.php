<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An inventory error caused by an issue with one or more of the contract merchandise lines.
 */
class ShopifySubscriptionBillingAttemptOutOfStockProductVariantsErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptOutOfStockProductVariantsError";

    /**
     * The code for the error.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * An explanation of the error.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    /**
     * A list of responsible product variants.
     *
     * @deprecated Use `subscriptionBillingAttemptInsufficientStockProductVariantsError` type instead.
     */
    public function selectOutOfStockProductVariants(?ShopifySubscriptionBillingAttemptOutOfStockProductVariantsErrorOutOfStockProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("outOfStockProductVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
