<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

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
     * The Shopify-assigned fiscal register identifier for the device, such as Sweden's manufacturing number (tillverkningsnummer). Only present for devices at locations in countries whose fiscal regulations require registering the device with the tax authority.
     */
    public function selectFiscalDeviceIdentifier(): static
    {
        $this->selectField("fiscalDeviceIdentifier");

        return $this;
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
