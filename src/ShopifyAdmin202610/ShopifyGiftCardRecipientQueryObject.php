<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyGiftCardRecipientQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardRecipient";

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }

    public function selectPreferredName()
    {
        $this->selectField("preferredName");

        return $this;
    }

    public function selectRecipient(ShopifyGiftCardRecipientRecipientArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("recipient");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSendNotificationAt()
    {
        $this->selectField("sendNotificationAt");

        return $this;
    }
}
