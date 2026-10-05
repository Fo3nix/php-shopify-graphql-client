<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerVisitQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerVisit";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLandingPage()
    {
        $this->selectField("landingPage");

        return $this;
    }

    public function selectLandingPageHtml()
    {
        $this->selectField("landingPageHtml");

        return $this;
    }

    public function selectMarketingEvent(ShopifyCustomerVisitMarketingEventArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingEventQueryObject("marketingEvent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOccurredAt()
    {
        $this->selectField("occurredAt");

        return $this;
    }

    public function selectReferralCode()
    {
        $this->selectField("referralCode");

        return $this;
    }

    public function selectReferralInfoHtml()
    {
        $this->selectField("referralInfoHtml");

        return $this;
    }

    public function selectReferrerUrl()
    {
        $this->selectField("referrerUrl");

        return $this;
    }

    public function selectSource()
    {
        $this->selectField("source");

        return $this;
    }

    public function selectSourceDescription()
    {
        $this->selectField("sourceDescription");

        return $this;
    }

    public function selectSourceType()
    {
        $this->selectField("sourceType");

        return $this;
    }

    public function selectUtmParameters(ShopifyCustomerVisitUtmParametersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUTMParametersQueryObject("utmParameters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
