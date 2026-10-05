<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerWhatsAppMarketingConsentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerWhatsAppMarketingConsent";

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

    public function selectSourceLocation(ShopifyCustomerWhatsAppMarketingConsentSourceLocationArgumentsObject $argsObject = null)
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
