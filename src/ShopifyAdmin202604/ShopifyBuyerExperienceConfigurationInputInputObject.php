<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields specifying the behavior of checkout for a B2B buyer.
 */
class ShopifyBuyerExperienceConfigurationInputInputObject extends InputObject
{
    protected $checkoutToDraft;
    protected $paymentTermsTemplateId;
    protected $editableShippingAddress;
    protected $deposit;

    /**
     * Whether to checkout to draft order for merchant review.
     */
    public function setCheckoutToDraft($checkoutToDraft): static
    {
        $this->checkoutToDraft = $checkoutToDraft;

        return $this;
    }

    /**
     * Represents the merchant configured payment terms.
     */
    public function setPaymentTermsTemplateId($paymentTermsTemplateId): static
    {
        $this->paymentTermsTemplateId = $paymentTermsTemplateId;

        return $this;
    }

    /**
     * Whether to allow customers to edit their shipping address at checkout.
     */
    public function setEditableShippingAddress($editableShippingAddress): static
    {
        $this->editableShippingAddress = $editableShippingAddress;

        return $this;
    }

    /**
     * The input fields configuring the deposit a B2B buyer.
     */
    public function setDeposit(ShopifyDepositInputInputObject $shopifyDepositInputInputObject): static
    {
        $this->deposit = $shopifyDepositInputInputObject;

        return $this;
    }
}
