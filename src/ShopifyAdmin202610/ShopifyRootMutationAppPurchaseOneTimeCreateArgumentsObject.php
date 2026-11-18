<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationAppPurchaseOneTimeCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["name", "price", "returnUrl"];

    protected $name;
    protected $price;
    protected $returnUrl;
    protected $test;

    /**
     * The name of the one-time purchase from the app.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The amount to be charged to the store for the app one-time purchase.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The URL where the merchant is redirected after approving the app one-time purchase.
     */
    public function setReturnUrl($returnUrl): static
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    /**
     * Whether the app one-time purchase is a test transaction.
     */
    public function setTest($test): static
    {
        $this->test = $test;

        return $this;
    }
}
