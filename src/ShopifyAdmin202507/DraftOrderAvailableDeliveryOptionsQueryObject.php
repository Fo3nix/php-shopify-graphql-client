<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DraftOrderAvailableDeliveryOptionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderAvailableDeliveryOptions";

    public function selectAvailableLocalDeliveryRates(DraftOrderAvailableDeliveryOptionsAvailableLocalDeliveryRatesArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderShippingRateQueryObject("availableLocalDeliveryRates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableLocalPickupOptions(DraftOrderAvailableDeliveryOptionsAvailableLocalPickupOptionsArgumentsObject $argsObject = null)
    {
        $object = new PickupInStoreLocationQueryObject("availableLocalPickupOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableShippingRates(DraftOrderAvailableDeliveryOptionsAvailableShippingRatesArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderShippingRateQueryObject("availableShippingRates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DraftOrderAvailableDeliveryOptionsPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
