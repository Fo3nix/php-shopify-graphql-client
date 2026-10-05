<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerPhoneNumberQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPhoneNumber";

    /**
     * @deprecated Use `smsMarketingConsent.collectedFrom` instead.
     */
    public function selectMarketingCollectedFrom()
    {
        $this->selectField("marketingCollectedFrom");

        return $this;
    }

    /**
     * @deprecated Use `smsMarketingConsent.optInLevel` instead.
     */
    public function selectMarketingOptInLevel()
    {
        $this->selectField("marketingOptInLevel");

        return $this;
    }

    /**
     * @deprecated Use `smsMarketingConsent.state` instead.
     */
    public function selectMarketingState()
    {
        $this->selectField("marketingState");

        return $this;
    }

    /**
     * @deprecated Use `smsMarketingConsent.updatedAt` instead.
     */
    public function selectMarketingUpdatedAt()
    {
        $this->selectField("marketingUpdatedAt");

        return $this;
    }

    public function selectPhoneNumber()
    {
        $this->selectField("phoneNumber");

        return $this;
    }

    /**
     * @deprecated Use `smsMarketingConsent.sourceLocation` instead.
     */
    public function selectSourceLocation(ShopifyCustomerPhoneNumberSourceLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("sourceLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
