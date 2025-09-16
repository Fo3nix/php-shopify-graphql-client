<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionShippingOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionShippingOption";

    /**
     * @deprecated This field has never been implemented.
     */
    public function selectCarrierService(SubscriptionShippingOptionCarrierServiceArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

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

    public function selectPrice(SubscriptionShippingOptionPriceArgumentsObject $argsObject = null)
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
