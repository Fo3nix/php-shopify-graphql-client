<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppSubscriptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscription";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCurrentPeriodEnd()
    {
        $this->selectField("currentPeriodEnd");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLineItems(AppSubscriptionLineItemsArgumentsObject $argsObject = null)
    {
        $object = new AppSubscriptionLineItemQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectReturnUrl()
    {
        $this->selectField("returnUrl");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectTest()
    {
        $this->selectField("test");

        return $this;
    }

    public function selectTrialDays()
    {
        $this->selectField("trialDays");

        return $this;
    }
}
