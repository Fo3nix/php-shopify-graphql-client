<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for editing a subscription contract for a single billing cycle, used for
 * contract calculation. Any field provided will update or replace the corresponding value for
 * the targeted cycle. Fields that are omitted will be left unchanged. Contract-level
 * attributes such as billing policy, delivery policy, and payment method cannot be changed by
 * a billing cycle edit.
 */
class ShopifySubscriptionContractCalculationBillingCycleEditInputInputObject extends InputObject
{
    const REQUIRED = ["withMerchandiseCustomizations"];

    protected $withMerchandiseCustomizations;
    protected $lines;
    protected $manualDiscounts;
    protected $discountCodes;
    protected $note;
    protected $customAttributes;
    protected $deliveryMethod;

    /**
     * Specifies whether to use merchandise customizations in the calculation.
     */
    public function setWithMerchandiseCustomizations($withMerchandiseCustomizations): static
    {
        $this->withMerchandiseCustomizations = $withMerchandiseCustomizations;

        return $this;
    }

    /**
     * The subscription lines to set for the targeted billing cycle. Replaces all existing lines with the contents of this array. At least one line is required.
     * - To update an existing line within the new set, include its `id`.
     * - To add a new line, omit its `id`.
     */
    public function setLines(array $lines): static
    {
        $this->lines = $lines;

        return $this;
    }

    /**
     * The manual order and delivery discounts to set for the targeted billing cycle. Replaces all existing manual discounts.
     * - To update an existing discount within the new set, include its `id`.
     * - To add a new discount, omit its `id`.
     * - To remove all manual discounts, provide an empty array (`[]`).
     */
    public function setManualDiscounts(array $manualDiscounts): static
    {
        $this->manualDiscounts = $manualDiscounts;

        return $this;
    }

    /**
     * The discount codes to apply to the targeted billing cycle during this calculation. Applied
     * codes are resolved into manual discounts; discount codes aren't persisted as codes, so there
     * is nothing to preserve or replace across calculations. Defaults to an empty array (apply no
     * discount codes).
     */
    public function setDiscountCodes(array $discountCodes): static
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }

    /**
     * The note for the targeted billing cycle. To remove the existing note, pass `null`.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The custom attributes for the targeted billing cycle. Replaces all existing attributes. To remove all attributes, provide an empty array (`[]`).
     */
    public function setCustomAttributes(array $customAttributes): static
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * The delivery method for the targeted billing cycle. Replaces the existing delivery method. Provide `none` to remove the delivery method. Provide `fetchAvailableDeliveryOptions` instead of a method to discover options for an address without changing the committed delivery method.
     */
    public function setDeliveryMethod(ShopifySubscriptionContractCalculationDeliveryMethodInputInputObject $shopifySubscriptionContractCalculationDeliveryMethodInputInputObject): static
    {
        $this->deliveryMethod = $shopifySubscriptionContractCalculationDeliveryMethodInputInputObject;

        return $this;
    }
}
