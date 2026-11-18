<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a remote gateway payment method, only one remote reference permitted.
 */
class ShopifyCustomerPaymentMethodRemoteInputInputObject extends InputObject
{
    protected $stripePaymentMethod;
    protected $authorizeNetCustomerPaymentProfile;
    protected $braintreePaymentMethod;

    /**
     * Input containing the fields for a remote stripe credit card.
     */
    public function setStripePaymentMethod(ShopifyRemoteStripePaymentMethodInputInputObject $shopifyRemoteStripePaymentMethodInputInputObject): static
    {
        $this->stripePaymentMethod = $shopifyRemoteStripePaymentMethodInputInputObject;

        return $this;
    }

    /**
     * The input fields for a remote authorize net customer profile.
     */
    public function setAuthorizeNetCustomerPaymentProfile(ShopifyRemoteAuthorizeNetCustomerPaymentProfileInputInputObject $shopifyRemoteAuthorizeNetCustomerPaymentProfileInputInputObject): static
    {
        $this->authorizeNetCustomerPaymentProfile = $shopifyRemoteAuthorizeNetCustomerPaymentProfileInputInputObject;

        return $this;
    }

    /**
     * The input fields for a remote Braintree customer profile.
     */
    public function setBraintreePaymentMethod(ShopifyRemoteBraintreePaymentMethodInputInputObject $shopifyRemoteBraintreePaymentMethodInputInputObject): static
    {
        $this->braintreePaymentMethod = $shopifyRemoteBraintreePaymentMethodInputInputObject;

        return $this;
    }
}
