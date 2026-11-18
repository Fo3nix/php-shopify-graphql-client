<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel).
 */
class ShopifyChannelUpdateInputInputObject extends InputObject
{
    protected $handle;
    protected $specificationHandle;
    protected $accountId;
    protected $accountName;

    /**
     * A new unique identifier for the channel within the shop. Must be unique across all channels on the shop. Handles are typically set at creation and rarely changed — use when correcting a handle or migrating legacy channel records.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * The handle of the [channel specification](https://shopify.dev/docs/apps/build/sales-channels/channel-config-extension) to bind to this channel. When changed, the platform re-evaluates the specification's country coverage against the shop's region markets and reconciles product feeds accordingly.
     */
    public function setSpecificationHandle($specificationHandle): static
    {
        $this->specificationHandle = $specificationHandle;

        return $this;
    }

    /**
     * An updated identifier for the merchant's account on the external platform. Changing this value signals that the channel connection now represents a different external account.
     */
    public function setAccountId($accountId): static
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * An updated merchant-facing name for the external account. Displayed in Shopify Admin when multiple channels exist for the same app, to help merchants distinguish between connections.
     */
    public function setAccountName($accountName): static
    {
        $this->accountName = $accountName;

        return $this;
    }
}
