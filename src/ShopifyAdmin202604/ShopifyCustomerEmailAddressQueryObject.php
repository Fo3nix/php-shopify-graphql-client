<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerEmailAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerEmailAddress";

    public function selectEmailAddress()
    {
        $this->selectField("emailAddress");

        return $this;
    }

    public function selectMarketingOptInLevel()
    {
        $this->selectField("marketingOptInLevel");

        return $this;
    }

    public function selectMarketingState()
    {
        $this->selectField("marketingState");

        return $this;
    }

    public function selectMarketingUnsubscribeUrl()
    {
        $this->selectField("marketingUnsubscribeUrl");

        return $this;
    }

    public function selectMarketingUpdatedAt()
    {
        $this->selectField("marketingUpdatedAt");

        return $this;
    }

    public function selectOpenTrackingLevel()
    {
        $this->selectField("openTrackingLevel");

        return $this;
    }

    public function selectOpenTrackingUrl()
    {
        $this->selectField("openTrackingUrl");

        return $this;
    }

    public function selectSourceLocation(ShopifyCustomerEmailAddressSourceLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("sourceLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValidFormat()
    {
        $this->selectField("validFormat");

        return $this;
    }
}
