<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A subscription billing cycle.
 */
class ShopifySubscriptionBillingCycleQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycle";

    /**
     * The date on which the billing attempt is expected to be made.
     */
    public function selectBillingAttemptExpectedDate(): static
    {
        $this->selectField("billingAttemptExpectedDate");

        return $this;
    }

    /**
     * The list of billing attempts associated with the billing cycle.
     */
    public function selectBillingAttempts(?ShopifySubscriptionBillingCycleBillingAttemptsArgumentsObject $argsObject = null): ShopifySubscriptionBillingAttemptConnectionQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptConnectionQueryObject("billingAttempts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The end date of the billing cycle.
     */
    public function selectCycleEndAt(): static
    {
        $this->selectField("cycleEndAt");

        return $this;
    }

    /**
     * The index of the billing cycle.
     */
    public function selectCycleIndex(): static
    {
        $this->selectField("cycleIndex");

        return $this;
    }

    /**
     * The start date of the billing cycle.
     */
    public function selectCycleStartAt(): static
    {
        $this->selectField("cycleStartAt");

        return $this;
    }

    /**
     * Whether this billing cycle was edited.
     */
    public function selectEdited(): static
    {
        $this->selectField("edited");

        return $this;
    }

    /**
     * The active edited contract for the billing cycle.
     */
    public function selectEditedContract(?ShopifySubscriptionBillingCycleEditedContractArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleEditedContractQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleEditedContractQueryObject("editedContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether this billing cycle was skipped.
     */
    public function selectSkipped(): static
    {
        $this->selectField("skipped");

        return $this;
    }

    /**
     * The subscription contract that the billing cycle belongs to.
     */
    public function selectSourceContract(?ShopifySubscriptionBillingCycleSourceContractArgumentsObject $argsObject = null): ShopifySubscriptionContractQueryObject
    {
        $object = new ShopifySubscriptionContractQueryObject("sourceContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the billing cycle.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
