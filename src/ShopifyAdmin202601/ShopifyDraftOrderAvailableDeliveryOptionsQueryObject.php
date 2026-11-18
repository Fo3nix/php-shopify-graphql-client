<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The available delivery options for a draft order.
 */
class ShopifyDraftOrderAvailableDeliveryOptionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderAvailableDeliveryOptions";

    /**
     * The available local delivery rates for the draft order. Requires a customer with a valid shipping address and at least one line item.
     */
    public function selectAvailableLocalDeliveryRates(?ShopifyDraftOrderAvailableDeliveryOptionsAvailableLocalDeliveryRatesArgumentsObject $argsObject = null): ShopifyDraftOrderShippingRateQueryObject
    {
        $object = new ShopifyDraftOrderShippingRateQueryObject("availableLocalDeliveryRates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The available local pickup options for the draft order. Requires at least one line item.
     */
    public function selectAvailableLocalPickupOptions(?ShopifyDraftOrderAvailableDeliveryOptionsAvailableLocalPickupOptionsArgumentsObject $argsObject = null): ShopifyPickupInStoreLocationQueryObject
    {
        $object = new ShopifyPickupInStoreLocationQueryObject("availableLocalPickupOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The available shipping rates for the draft order. Requires a customer with a valid shipping address and at least one line item.
     */
    public function selectAvailableShippingRates(?ShopifyDraftOrderAvailableDeliveryOptionsAvailableShippingRatesArgumentsObject $argsObject = null): ShopifyDraftOrderShippingRateQueryObject
    {
        $object = new ShopifyDraftOrderShippingRateQueryObject("availableShippingRates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns information about pagination of local pickup options.
     */
    public function selectPageInfo(?ShopifyDraftOrderAvailableDeliveryOptionsPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
