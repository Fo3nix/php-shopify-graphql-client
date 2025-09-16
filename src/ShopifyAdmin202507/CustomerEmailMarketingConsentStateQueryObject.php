<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerEmailMarketingConsentStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerEmailMarketingConsentState";

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

    public function selectSourceLocation(CustomerEmailMarketingConsentStateSourceLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("sourceLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
