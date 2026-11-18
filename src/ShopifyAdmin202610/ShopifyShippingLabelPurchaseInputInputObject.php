<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the fulfillment order, shipping date and time, package details, weight, notification setting, and optional rate preference used to purchase a shipping label.
 */
class ShopifyShippingLabelPurchaseInputInputObject extends InputObject
{
    const REQUIRED = ["fulfillmentOrderId", "shippingDatetime"];

    protected $fulfillmentOrderId;
    protected $shippingDatetime;
    protected $packageInfo;
    protected $totalWeight;
    protected $notifyCustomer;
    protected $preferredRateSelection;
    protected $originAddress;

    /**
     * The ID of the fulfillment order to create the shipping label for. The fulfillment order must be fulfillable, require shipping, and have a destination shipping address.
     */
    public function setFulfillmentOrderId($fulfillmentOrderId): static
    {
        $this->fulfillmentOrderId = $fulfillmentOrderId;

        return $this;
    }

    /**
     * The date and time when the package is expected to be shipped. The value must not be in the past.
     */
    public function setShippingDatetime($shippingDatetime): static
    {
        $this->shippingDatetime = $shippingDatetime;

        return $this;
    }

    /**
     * The package to use for the shipment. Provide either a custom package or a carrier-provided package.
     */
    public function setPackageInfo(ShopifyPackageInfoInputInputObject $shopifyPackageInfoInputInputObject): static
    {
        $this->packageInfo = $shopifyPackageInfoInputInputObject;

        return $this;
    }

    /**
     * Total shipment weight, including the items being fulfilled and the package. If omitted, the total weight used is calculated using the weight of the empty package and the weight of the fulfillable line items.
     */
    public function setTotalWeight(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->totalWeight = $shopifyWeightInputInputObject;

        return $this;
    }

    /**
     * Whether to notify the customer after the shipping label is purchased.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }

    /**
     * The preferred carrier and service to use for the shipping label. If omitted, the mutation uses Shopify Shipping's default rate selection.
     */
    public function setPreferredRateSelection(ShopifyPreferredRateSelectionInputInputObject $shopifyPreferredRateSelectionInputInputObject): static
    {
        $this->preferredRateSelection = $shopifyPreferredRateSelectionInputInputObject;

        return $this;
    }

    /**
     * A custom ship-from origin address that overrides the fulfillment order's assigned location for this label. If not provided, the assigned location is used.
     */
    public function setOriginAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->originAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }
}
