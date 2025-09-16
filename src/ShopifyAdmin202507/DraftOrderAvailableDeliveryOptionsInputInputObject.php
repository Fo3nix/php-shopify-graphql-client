<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class DraftOrderAvailableDeliveryOptionsInputInputObject extends InputObject
{
    protected $appliedDiscount;
    protected $discountCodes;
    protected $acceptAutomaticDiscounts;
    protected $lineItems;
    protected $shippingAddress;
    protected $marketRegionCountryCode;
    protected $purchasingEntity;

    public function setAppliedDiscount(DraftOrderAppliedDiscountInputInputObject $draftOrderAppliedDiscountInputInputObject)
    {
        $this->appliedDiscount = $draftOrderAppliedDiscountInputInputObject;

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

    public function setShippingAddress(MailingAddressInputInputObject $mailingAddressInputInputObject)
    {
        $this->shippingAddress = $mailingAddressInputInputObject;

        return $this;
    }

    public function setMarketRegionCountryCode($marketRegionCountryCode)
    {
        $this->marketRegionCountryCode = $marketRegionCountryCode;

        return $this;
    }

    public function setPurchasingEntity(PurchasingEntityInputInputObject $purchasingEntityInputInputObject)
    {
        $this->purchasingEntity = $purchasingEntityInputInputObject;

        return $this;
    }
}
