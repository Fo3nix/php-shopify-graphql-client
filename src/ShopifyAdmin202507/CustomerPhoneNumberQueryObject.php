<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerPhoneNumberQueryObject extends QueryObject
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

    public function selectSourceLocation(CustomerPhoneNumberSourceLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("sourceLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
