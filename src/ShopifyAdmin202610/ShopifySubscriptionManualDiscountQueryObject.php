<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Custom subscription discount.
 */
class ShopifySubscriptionManualDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionManualDiscount";

    /**
     * Entitled line items used to apply the subscription discount on.
     */
    public function selectEntitledLines(?ShopifySubscriptionManualDiscountEntitledLinesArgumentsObject $argsObject = null): ShopifySubscriptionDiscountEntitledLinesQueryObject
    {
        $object = new ShopifySubscriptionDiscountEntitledLinesQueryObject("entitledLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The maximum number of times the subscription discount will be applied on orders.
     */
    public function selectRecurringCycleLimit(): static
    {
        $this->selectField("recurringCycleLimit");

        return $this;
    }

    /**
     * The reason that the discount on the subscription draft is rejected.
     */
    public function selectRejectionReason(): static
    {
        $this->selectField("rejectionReason");

        return $this;
    }

    /**
     * Type of line the discount applies on.
     */
    public function selectTargetType(): static
    {
        $this->selectField("targetType");

        return $this;
    }

    /**
     * The title associated with the subscription discount.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The type of the subscription discount.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The number of times the discount was applied.
     */
    public function selectUsageCount(): static
    {
        $this->selectField("usageCount");

        return $this;
    }

    /**
     * The value of the subscription discount.
     */
    public function selectValue(?ShopifySubscriptionManualDiscountValueArgumentsObject $argsObject = null): ShopifySubscriptionDiscountValueUnionObject
    {
        $object = new ShopifySubscriptionDiscountValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
