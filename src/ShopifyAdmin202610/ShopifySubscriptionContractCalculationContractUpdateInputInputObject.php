<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for calculating changes to an existing subscription contract. Each field you provide replaces the corresponding value on the contract, and omitted fields remain unchanged. For list fields, provide the complete replacement list, including the `id` of each existing item that you want to keep.
 *
 * Learn how to [update a subscription contract](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/update-a-subscription-contract).
 */
class ShopifySubscriptionContractCalculationContractUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["withMerchandiseCustomizations"];

    protected $withMerchandiseCustomizations;
    protected $lines;
    protected $manualDiscounts;
    protected $discountCodes;
    protected $note;
    protected $customAttributes;
    protected $billingPolicy;
    protected $deliveryPolicy;
    protected $deliveryMethod;
    protected $paymentMethod;
    protected $appManagedBillingConfig;

    /**
     * Specifies whether to use merchandise customizations in the calculation.
     */
    public function setWithMerchandiseCustomizations($withMerchandiseCustomizations): static
    {
        $this->withMerchandiseCustomizations = $withMerchandiseCustomizations;

        return $this;
    }

    /**
     * The subscription lines to set on the contract. Replaces all existing lines with the contents of this array. At least one line is required.
     * - To update an existing line within the new set, include its `id`.
     * - To add a new line, omit its `id`.
     */
    public function setLines(array $lines): static
    {
        $this->lines = $lines;

        return $this;
    }

    /**
     * The manual order and delivery discounts to set on the contract. Replaces all existing manual discounts.
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
     * The discount codes to apply during this calculation. Applied codes are resolved into manual
     * discounts on the contract; discount codes aren't persisted as codes, so there's nothing to
     * preserve or replace across calculations. Defaults to an empty array (apply no discount codes).
     */
    public function setDiscountCodes(array $discountCodes): static
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }

    /**
     * The note for the contract. To remove the existing note, pass `null`.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The custom attributes for the contract. Replaces all existing attributes. To remove all attributes, provide an empty array (`[]`).
     */
    public function setCustomAttributes(array $customAttributes): static
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * The billing policy for the contract. Replaces the existing billing policy.
     */
    public function setBillingPolicy(ShopifySubscriptionContractCalculationBillingPolicyInputInputObject $shopifySubscriptionContractCalculationBillingPolicyInputInputObject): static
    {
        $this->billingPolicy = $shopifySubscriptionContractCalculationBillingPolicyInputInputObject;

        return $this;
    }

    /**
     * The delivery policy for the contract. Replaces the existing delivery policy.
     */
    public function setDeliveryPolicy(ShopifySubscriptionContractCalculationDeliveryPolicyInputInputObject $shopifySubscriptionContractCalculationDeliveryPolicyInputInputObject): static
    {
        $this->deliveryPolicy = $shopifySubscriptionContractCalculationDeliveryPolicyInputInputObject;

        return $this;
    }

    /**
     * The delivery method for the contract. Replaces the existing delivery method. Provide `none` to remove the delivery method. Provide `fetchAvailableDeliveryOptions` instead of a method to discover options for an address without changing the committed delivery method.
     */
    public function setDeliveryMethod(ShopifySubscriptionContractCalculationDeliveryMethodInputInputObject $shopifySubscriptionContractCalculationDeliveryMethodInputInputObject): static
    {
        $this->deliveryMethod = $shopifySubscriptionContractCalculationDeliveryMethodInputInputObject;

        return $this;
    }

    /**
     * The payment method for the contract. Replaces the existing payment method. Provide `none` to remove the payment method.
     */
    public function setPaymentMethod(ShopifySubscriptionContractCalculationPaymentMethodInputInputObject $shopifySubscriptionContractCalculationPaymentMethodInputInputObject): static
    {
        $this->paymentMethod = $shopifySubscriptionContractCalculationPaymentMethodInputInputObject;

        return $this;
    }

    /**
     * App-managed billing configuration for the contract. Replaces the existing configuration. To remove the existing minimum and maximum cycles, pass `null`.
     */
    public function setAppManagedBillingConfig(ShopifySubscriptionContractCalculationAppManagedBillingConfigInputInputObject $shopifySubscriptionContractCalculationAppManagedBillingConfigInputInputObject): static
    {
        $this->appManagedBillingConfig = $shopifySubscriptionContractCalculationAppManagedBillingConfigInputInputObject;

        return $this;
    }
}
