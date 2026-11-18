<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about the shop's customer account-related settings. Includes the [customer account version](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerAccountsV2#field-CustomerAccountsV2.fields.customerAccountsVersion) which indicates whether the merchant is using new customer accounts or legacy customer accounts, along with other account configuration such as login requirements.
 */
class ShopifyCustomerAccountsV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAccountsV2";

    /**
     * Indicates which version of customer accounts the merchant is using in online store and checkout.
     */
    public function selectCustomerAccountsVersion(): static
    {
        $this->selectField("customerAccountsVersion");

        return $this;
    }

    /**
     * Login links are shown in online store and checkout.
     */
    public function selectLoginLinksVisibleOnStorefrontAndCheckout(): static
    {
        $this->selectField("loginLinksVisibleOnStorefrontAndCheckout");

        return $this;
    }

    /**
     * Customers are required to log in to their account before checkout.
     */
    public function selectLoginRequiredAtCheckout(): static
    {
        $this->selectField("loginRequiredAtCheckout");

        return $this;
    }

    /**
     * The root url for the customer accounts pages.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
