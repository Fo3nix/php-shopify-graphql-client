<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A warning that is displayed to the merchant when a change is made to a draft order.
 */
class ShopifyDraftOrderWarningInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "DraftOrderWarning";

    /**
     * The error code.
     */
    public function selectErrorCode(): static
    {
        $this->selectField("errorCode");

        return $this;
    }

    /**
     * The input field that the warning applies to.
     */
    public function selectField_(): static
    {
        $this->selectField("field");

        return $this;
    }

    /**
     * The warning message.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    public function onDraftOrderBundleAddedWarning(): ShopifyDraftOrderBundleAddedWarningQueryObject
    {
        $object = new ShopifyDraftOrderBundleAddedWarningQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDraftOrderDiscountNotAppliedWarning(): ShopifyDraftOrderDiscountNotAppliedWarningQueryObject
    {
        $object = new ShopifyDraftOrderDiscountNotAppliedWarningQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDraftOrderMarketRegionCountryCodeNotSupportedWarning(): ShopifyDraftOrderMarketRegionCountryCodeNotSupportedWarningQueryObject
    {
        $object = new ShopifyDraftOrderMarketRegionCountryCodeNotSupportedWarningQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
