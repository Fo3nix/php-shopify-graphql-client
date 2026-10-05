<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDraftOrderAvailableDeliveryOptionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderAvailableDeliveryOptions";

    public function selectAvailableLocalDeliveryRates(ShopifyDraftOrderAvailableDeliveryOptionsAvailableLocalDeliveryRatesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderShippingRateQueryObject("availableLocalDeliveryRates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableLocalPickupOptions(ShopifyDraftOrderAvailableDeliveryOptionsAvailableLocalPickupOptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPickupInStoreLocationQueryObject("availableLocalPickupOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableShippingRates(ShopifyDraftOrderAvailableDeliveryOptionsAvailableShippingRatesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderShippingRateQueryObject("availableShippingRates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDraftOrderAvailableDeliveryOptionsPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
