<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a Subscription Draft.
 */
class ShopifySubscriptionDraftInputInputObject extends InputObject
{
    protected $status;
    protected $paymentMethodId;
    protected $nextBillingDate;
    protected $billingPolicy;
    protected $deliveryPolicy;
    protected $deliveryPrice;
    protected $deliveryMethod;
    protected $note;
    protected $customAttributes;

    /**
     * The current status of the subscription contract.
     */
    public function setStatus($shopifySubscriptionContractSubscriptionStatus): static
    {
        $this->status = new RawObject($shopifySubscriptionContractSubscriptionStatus);

        return $this;
    }

    /**
     * The ID of the payment method to be used for the subscription contract.
     */
    public function setPaymentMethodId($paymentMethodId): static
    {
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * The next billing date for the subscription contract.
     */
    public function setNextBillingDate($nextBillingDate): static
    {
        $this->nextBillingDate = $nextBillingDate;

        return $this;
    }

    /**
     * The billing policy for the subscription contract.
     */
    public function setBillingPolicy(ShopifySubscriptionBillingPolicyInputInputObject $shopifySubscriptionBillingPolicyInputInputObject): static
    {
        $this->billingPolicy = $shopifySubscriptionBillingPolicyInputInputObject;

        return $this;
    }

    /**
     * The delivery policy for the subscription contract.
     */
    public function setDeliveryPolicy(ShopifySubscriptionDeliveryPolicyInputInputObject $shopifySubscriptionDeliveryPolicyInputInputObject): static
    {
        $this->deliveryPolicy = $shopifySubscriptionDeliveryPolicyInputInputObject;

        return $this;
    }

    /**
     * The shipping price for each renewal the subscription contract.
     */
    public function setDeliveryPrice($deliveryPrice): static
    {
        $this->deliveryPrice = $deliveryPrice;

        return $this;
    }

    /**
     * The delivery method for the subscription contract.
     */
    public function setDeliveryMethod(ShopifySubscriptionDeliveryMethodInputInputObject $shopifySubscriptionDeliveryMethodInputInputObject): static
    {
        $this->deliveryMethod = $shopifySubscriptionDeliveryMethodInputInputObject;

        return $this;
    }

    /**
     * The note field that will be applied to the generated orders.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * A list of the custom attributes added to the subscription contract.
     */
    public function setCustomAttributes(array $customAttributes): static
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }
}
