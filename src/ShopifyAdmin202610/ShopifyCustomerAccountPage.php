<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A customer account page.
 */
interface ShopifyCustomerAccountPage extends ShopifyNavigable, ShopifyNode
{
    
    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     *
     * @return string
     */
    public function getDefaultCursor(): ?string;

    
    /**
     * A unique, human-friendly string for the customer account page.
     *
     * @return string
     */
    public function getHandle(): ?string;

    
    /**
     * The unique ID for the customer account page.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * The title of the customer account page.
     *
     * @return string
     */
    public function getTitle(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
