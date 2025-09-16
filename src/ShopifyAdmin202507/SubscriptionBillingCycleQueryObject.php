<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionBillingCycleQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycle";

    public function selectBillingAttemptExpectedDate()
    {
        $this->selectField("billingAttemptExpectedDate");

        return $this;
    }

    public function selectBillingAttempts(SubscriptionBillingCycleBillingAttemptsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingAttemptConnectionQueryObject("billingAttempts");
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

    public function selectEditedContract(SubscriptionBillingCycleEditedContractArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingCycleEditedContractQueryObject("editedContract");
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

    public function selectSourceContract(SubscriptionBillingCycleSourceContractArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractQueryObject("sourceContract");
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
