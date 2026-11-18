<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for calculating a new subscription contract. Provide the complete desired state of the contract. The contract isn't created until you commit the calculation with the [`subscriptionContractCalculationCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionContractCalculationCommit) mutation.
 *
 * Learn how to [build a subscription contract](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/build-a-subscription-contract).
 */
class ShopifySubscriptionContractCalculationContractCreateInputInputObject extends InputObject
{
    const REQUIRED = ["withMerchandiseCustomizations", "customerId", "currencyCode", "lines", "manualDiscounts", "billingPolicy", "deliveryPolicy", "deliveryMethod", "paymentMethod"];

    protected $actor;
    protected $withMerchandiseCustomizations;
    protected $customerId;
    protected $currencyCode;
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
     * The actor who initiated a subscription action.
     */
    public function setActor($shopifySubscriptionActor): static
    {
        $this->actor = new RawObject($shopifySubscriptionActor);

        return $this;
    }

    /**
     * Specifies whether to use merchandise customizations in the calculation.
     */
    public function setWithMerchandiseCustomizations($withMerchandiseCustomizations): static
    {
        $this->withMerchandiseCustomizations = $withMerchandiseCustomizations;

        return $this;
    }

    /**
     * The ID of the customer to associate with the new subscription contract.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The currency code for the new subscription contract.
     */
    public function setCurrencyCode($shopifyCurrencyCode): static
    {
        $this->currencyCode = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * The subscription lines for the new contract.
     */
    public function setLines(array $lines): static
    {
        $this->lines = $lines;

        return $this;
    }

    /**
     * The manual order and delivery discounts for the new contract. Provide an empty array for no manual discounts.
     */
    public function setManualDiscounts(array $manualDiscounts): static
    {
        $this->manualDiscounts = $manualDiscounts;

        return $this;
    }

    /**
     * The discount codes to apply during this calculation. Applied codes are resolved into manual
     * discounts on the resulting contract. Defaults to an empty array (apply no discount codes).
     */
    public function setDiscountCodes(array $discountCodes): static
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }

    /**
     * The note for the new contract.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The custom attributes for the new contract.
     */
    public function setCustomAttributes(array $customAttributes): static
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * The billing policy for the new contract.
     */
    public function setBillingPolicy(ShopifySubscriptionContractCalculationBillingPolicyInputInputObject $shopifySubscriptionContractCalculationBillingPolicyInputInputObject): static
    {
        $this->billingPolicy = $shopifySubscriptionContractCalculationBillingPolicyInputInputObject;

        return $this;
    }

    /**
     * The delivery policy for the new contract.
     */
    public function setDeliveryPolicy(ShopifySubscriptionContractCalculationDeliveryPolicyInputInputObject $shopifySubscriptionContractCalculationDeliveryPolicyInputInputObject): static
    {
        $this->deliveryPolicy = $shopifySubscriptionContractCalculationDeliveryPolicyInputInputObject;

        return $this;
    }

    /**
     * The delivery method for the new contract. Provide `none` for digital-only subscriptions. Provide `fetchAvailableDeliveryOptions` instead of a method to discover options for an address without committing a delivery method.
     */
    public function setDeliveryMethod(ShopifySubscriptionContractCalculationDeliveryMethodInputInputObject $shopifySubscriptionContractCalculationDeliveryMethodInputInputObject): static
    {
        $this->deliveryMethod = $shopifySubscriptionContractCalculationDeliveryMethodInputInputObject;

        return $this;
    }

    /**
     * The payment method for the new contract. Provide `none` if no payment method is specified.
     */
    public function setPaymentMethod(ShopifySubscriptionContractCalculationPaymentMethodInputInputObject $shopifySubscriptionContractCalculationPaymentMethodInputInputObject): static
    {
        $this->paymentMethod = $shopifySubscriptionContractCalculationPaymentMethodInputInputObject;

        return $this;
    }

    /**
     * App-managed billing configuration for the contract.
     */
    public function setAppManagedBillingConfig(ShopifySubscriptionContractCalculationAppManagedBillingConfigInputInputObject $shopifySubscriptionContractCalculationAppManagedBillingConfigInputInputObject): static
    {
        $this->appManagedBillingConfig = $shopifySubscriptionContractCalculationAppManagedBillingConfigInputInputObject;

        return $this;
    }
}
