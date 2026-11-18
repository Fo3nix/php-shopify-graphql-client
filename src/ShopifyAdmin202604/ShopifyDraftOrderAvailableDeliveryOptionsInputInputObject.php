<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to determine available delivery options for a draft order.
 */
class ShopifyDraftOrderAvailableDeliveryOptionsInputInputObject extends InputObject
{
    protected $appliedDiscount;
    protected $discountCodes;
    protected $acceptAutomaticDiscounts;
    protected $lineItems;
    protected $shippingAddress;
    protected $marketRegionCountryCode;
    protected $purchasingEntity;

    /**
     * The discount that will be applied to the draft order.
     * A draft order line item can have one discount. A draft order can also have one order-level discount.
     */
    public function setAppliedDiscount(ShopifyDraftOrderAppliedDiscountInputInputObject $shopifyDraftOrderAppliedDiscountInputInputObject): static
    {
        $this->appliedDiscount = $shopifyDraftOrderAppliedDiscountInputInputObject;

        return $this;
    }

    /**
     * Discount codes that will be attempted to be applied to the draft order. If the draft isn't eligible for any given discount code it will be skipped during calculation.
     */
    public function setDiscountCodes(array $discountCodes): static
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }

    /**
     * Whether or not to accept automatic discounts on the draft order during calculation.
     * If false, only discount codes and custom draft order discounts (see `appliedDiscount`) will be applied.
     * If true, eligible automatic discounts will be applied in addition to discount codes and custom draft order discounts.
     */
    public function setAcceptAutomaticDiscounts($acceptAutomaticDiscounts): static
    {
        $this->acceptAutomaticDiscounts = $acceptAutomaticDiscounts;

        return $this;
    }

    /**
     * Product variant line item or custom line item associated to the draft order.
     * Each draft order must include at least one line item.
     */
    public function setLineItems(array $lineItems): static
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * The mailing address to where the order will be shipped.
     */
    public function setShippingAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->shippingAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * The selected country code that determines the pricing of the draft order.
     */
    public function setMarketRegionCountryCode($shopifyCountryCode): static
    {
        $this->marketRegionCountryCode = new RawObject($shopifyCountryCode);

        return $this;
    }

    /**
     * The purchasing entity for the draft order.
     */
    public function setPurchasingEntity(ShopifyPurchasingEntityInputInputObject $shopifyPurchasingEntityInputInputObject): static
    {
        $this->purchasingEntity = $shopifyPurchasingEntityInputInputObject;

        return $this;
    }
}
