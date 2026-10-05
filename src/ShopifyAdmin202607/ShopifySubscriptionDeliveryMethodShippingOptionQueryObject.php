<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDeliveryMethodShippingOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodShippingOption";

    /**
     * @deprecated This field has never been implemented.
     */
    public function selectCarrierService(ShopifySubscriptionDeliveryMethodShippingOptionCarrierServiceArgumentsObject $argsObject = null)
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

    public function selectPresentmentTitle()
    {
        $this->selectField("presentmentTitle");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
