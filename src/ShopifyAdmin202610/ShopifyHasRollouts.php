<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRolloutConnection;

/**
 * A resource that can be included in rollouts. Use this interface to query the
 * resource's rollouts with a reusable fragment.
 */
interface ShopifyHasRollouts
{
    
    /**
     * The rollouts that include this resource. Walk `treatments.changes` to see
     * what each treatment does to the resource. Use `query` to filter by rollout `status`.
     *
     * @return ShopifyRolloutConnection
     */
    public function getRollouts(): ?ShopifyRolloutConnection;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
