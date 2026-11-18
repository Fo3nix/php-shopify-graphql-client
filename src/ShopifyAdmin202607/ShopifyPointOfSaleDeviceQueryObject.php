<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a mobile device that Shopify Point of Sale has been installed on.
 */
class ShopifyPointOfSaleDeviceQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDevice";

    /**
     * The currently open payment session for this device. Data is returned only if the device's location has a POS Pro subscription.
     */
    public function selectActivePaymentSession(?ShopifyPointOfSaleDeviceActivePaymentSessionArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionQueryObject("activePaymentSession");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The cash drawer that this device is currently assigned to. Data is returned only if the device's location has a POS Pro subscription.
     */
    public function selectCashDrawer(?ShopifyPointOfSaleDeviceCashDrawerArgumentsObject $argsObject = null): ShopifyCashDrawerQueryObject
    {
        $object = new ShopifyCashDrawerQueryObject("cashDrawer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}
