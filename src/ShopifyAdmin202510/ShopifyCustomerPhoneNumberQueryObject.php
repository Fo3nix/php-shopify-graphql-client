<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerPhoneNumberQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPhoneNumber";

    public function selectMarketingCollectedFrom()
    {
        $this->selectField("marketingCollectedFrom");

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
