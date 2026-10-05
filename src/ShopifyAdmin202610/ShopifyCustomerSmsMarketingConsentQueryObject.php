<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerSmsMarketingConsentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSmsMarketingConsent";

    public function selectCollectedFrom()
    {
        $this->selectField("collectedFrom");

        return $this;
    }

    public function selectOptInLevel()
    {
        $this->selectField("optInLevel");

        return $this;
    }

    public function selectSourceLocation(ShopifyCustomerSmsMarketingConsentSourceLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("sourceLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectState()
    {
        $this->selectField("state");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
