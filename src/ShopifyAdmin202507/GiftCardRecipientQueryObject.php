<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class GiftCardRecipientQueryObject extends QueryObject
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

    public function selectRecipient(GiftCardRecipientRecipientArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("recipient");
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
