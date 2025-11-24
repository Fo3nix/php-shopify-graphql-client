<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingCycleQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycle";

    public function selectBillingAttemptExpectedDate()
    {
        $this->selectField("billingAttemptExpectedDate");

        return $this;
    }

    public function selectBillingAttempts(ShopifySubscriptionBillingCycleBillingAttemptsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingAttemptConnectionQueryObject("billingAttempts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCycleEndAt()
    {
        $this->selectField("cycleEndAt");

        return $this;
    }

    public function selectCycleIndex()
    {
        $this->selectField("cycleIndex");

        return $this;
    }

    public function selectCycleStartAt()
    {
        $this->selectField("cycleStartAt");

        return $this;
    }

    public function selectEdited()
    {
        $this->selectField("edited");

        return $this;
    }

    public function selectEditedContract(ShopifySubscriptionBillingCycleEditedContractArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingCycleEditedContractQueryObject("editedContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSkipped()
    {
        $this->selectField("skipped");

        return $this;
    }

    public function selectSourceContract(ShopifySubscriptionBillingCycleSourceContractArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractQueryObject("sourceContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
