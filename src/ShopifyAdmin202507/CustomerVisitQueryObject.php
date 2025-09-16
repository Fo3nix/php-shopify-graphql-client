<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerVisitQueryObject extends QueryObject
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

    public function selectMarketingEvent(CustomerVisitMarketingEventArgumentsObject $argsObject = null)
    {
        $object = new MarketingEventQueryObject("marketingEvent");
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

    public function selectUtmParameters(CustomerVisitUtmParametersArgumentsObject $argsObject = null)
    {
        $object = new UTMParametersQueryObject("utmParameters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
