<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionBillingAttemptQueryObject extends QueryObject
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
     * @deprecated Use `processingError.code` instead to get the errorCode
     */
    public function selectErrorCode()
    {
        $this->selectField("errorCode");

        return $this;
    }

    /**
     * @deprecated Use `processingError.message` instead to get the errorMessage
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

    public function selectNextActionUrl()
    {
        $this->selectField("nextActionUrl");

        return $this;
    }

    public function selectOrder(SubscriptionBillingAttemptOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
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

    public function selectSubscriptionContract(SubscriptionBillingAttemptSubscriptionContractArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractQueryObject("subscriptionContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTransactions(SubscriptionBillingAttemptTransactionsArgumentsObject $argsObject = null)
    {
        $object = new OrderTransactionConnectionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
