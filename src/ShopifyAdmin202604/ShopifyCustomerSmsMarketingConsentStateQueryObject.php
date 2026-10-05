<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerSmsMarketingConsentStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSmsMarketingConsentState";

    public function selectConsentCollectedFrom()
    {
        $this->selectField("consentCollectedFrom");

        return $this;
    }

    public function selectConsentUpdatedAt()
    {
        $this->selectField("consentUpdatedAt");

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

    public function selectSourceLocation(ShopifyCustomerSmsMarketingConsentStateSourceLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("sourceLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
