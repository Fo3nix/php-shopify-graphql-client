<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionShippingOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionShippingOption";

    /**
     * @deprecated This field has never been implemented.
     */
    public function selectCarrierService(ShopifySubscriptionShippingOptionCarrierServiceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("carrierService");
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

    public function selectPrice(ShopifySubscriptionShippingOptionPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("price");
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
