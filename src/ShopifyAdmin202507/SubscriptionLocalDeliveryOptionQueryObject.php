<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionLocalDeliveryOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionLocalDeliveryOption";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectPhoneRequired()
    {
        $this->selectField("phoneRequired");

        return $this;
    }

    public function selectPresentmentTitle()
    {
        $this->selectField("presentmentTitle");

        return $this;
    }

    public function selectPrice(SubscriptionLocalDeliveryOptionPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
