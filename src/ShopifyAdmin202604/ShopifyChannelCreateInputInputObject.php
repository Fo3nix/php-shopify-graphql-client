<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel).
 */
class ShopifyChannelCreateInputInputObject extends InputObject
{
    const REQUIRED = ["specificationHandle", "accountId", "accountName"];

    protected $handle;
    protected $specificationHandle;
    protected $accountId;
    protected $accountName;

    /**
     * A unique, human-readable identifier for the channel within the shop. For example, `amazon-us-A1B2C3D4E5F6G7`. Used for lookups via [`channelByHandle`](https://shopify.dev/docs/api/admin-graphql/latest/queries/channelByHandle). If not provided, auto-generated from the specification handle and account ID. Must be unique across all channels on the shop.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * The handle of the [channel specification](https://shopify.dev/docs/apps/build/sales-channels/channel-config-extension) to bind to this channel. The specification must have been deployed by the calling application via `shopify app deploy`. Determines the channel's regional coverage, capabilities, and requirements.
     */
    public function setSpecificationHandle($specificationHandle): static
    {
        $this->specificationHandle = $specificationHandle;

        return $this;
    }

    /**
     * A unique identifier for the merchant's account on the external platform, such as an Amazon Seller ID or Google Merchant Center ID. Used together with `specificationHandle` to uniquely identify the channel connection.
     */
    public function setAccountId($accountId): static
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * The merchant-facing name for the external account. Displayed in Shopify Admin wherever the channel connection is referenced, such as in Markets and order attribution. Should match how the merchant recognises the account on the external platform.
     */
    public function setAccountName($accountName): static
    {
        $this->accountName = $accountName;

        return $this;
    }
}
