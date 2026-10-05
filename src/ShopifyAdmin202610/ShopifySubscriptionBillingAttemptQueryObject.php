<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttempt";

    public function selectCompletedAt()
    {
        $this->selectField("completedAt");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * @deprecated Use `state` instead.
     */
    public function selectErrorCode()
    {
        $this->selectField("errorCode");

        return $this;
    }

    /**
     * @deprecated Use `state` instead.
     */
    public function selectErrorMessage()
    {
        $this->selectField("errorMessage");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIdempotencyKey()
    {
        $this->selectField("idempotencyKey");

        return $this;
    }

    /**
     * @deprecated Use `state` instead.
     */
    public function selectNextActionUrl()
    {
        $this->selectField("nextActionUrl");

        return $this;
    }

    /**
     * @deprecated Use `state` instead.
     */
    public function selectOrder(ShopifySubscriptionBillingAttemptOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginTime()
    {
        $this->selectField("originTime");

        return $this;
    }

    public function selectPaymentGroupId()
    {
        $this->selectField("paymentGroupId");

        return $this;
    }

    public function selectPaymentSessionId()
    {
        $this->selectField("paymentSessionId");

        return $this;
    }

    /**
     * @deprecated Use `state` instead.
     */
    public function selectReady()
    {
        $this->selectField("ready");

        return $this;
    }

    public function selectRespectInventoryPolicy()
    {
        $this->selectField("respectInventoryPolicy");

        return $this;
    }

    public function selectState(ShopifySubscriptionBillingAttemptStateArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingAttemptStateUnionObject("state");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionContract(ShopifySubscriptionBillingAttemptSubscriptionContractArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractQueryObject("subscriptionContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTransactions(ShopifySubscriptionBillingAttemptTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionConnectionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
