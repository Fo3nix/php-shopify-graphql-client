<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\InputObject;

class ShopifyDraftOrderAvailableDeliveryOptionsInputInputObject extends InputObject
{
    protected $appliedDiscount;
    protected $discountCodes;
    protected $acceptAutomaticDiscounts;
    protected $lineItems;
    protected $shippingAddress;
    protected $marketRegionCountryCode;
    protected $purchasingEntity;

    public function setAppliedDiscount(ShopifyDraftOrderAppliedDiscountInputInputObject $shopifyDraftOrderAppliedDiscountInputInputObject)
    {
        $this->appliedDiscount = $shopifyDraftOrderAppliedDiscountInputInputObject;

        return $this;
    }

    public function setDiscountCodes(array $discountCodes)
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }

    public function setAcceptAutomaticDiscounts($acceptAutomaticDiscounts)
    {
        $this->acceptAutomaticDiscounts = $acceptAutomaticDiscounts;

        return $this;
    }

    public function setLineItems(array $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    public function setShippingAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject)
    {
        $this->shippingAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    public function setMarketRegionCountryCode($marketRegionCountryCode)
    {
        $this->marketRegionCountryCode = $marketRegionCountryCode;

        return $this;
    }

    public function setPurchasingEntity(ShopifyPurchasingEntityInputInputObject $shopifyPurchasingEntityInputInputObject)
    {
        $this->purchasingEntity = $shopifyPurchasingEntityInputInputObject;

        return $this;
    }
}
