<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;

/**
 * A source that provides products for a collection.
 */
interface ShopifyCollectionSource extends ShopifyNode
{
    
    /**
     * The app that created this source, if applicable. In the case of shareable sources, this app manages this source's conditions and selections exclusively.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp;

    
    /**
     * An optional description of the source.
     *
     * @return string
     */
    public function getDescription(): ?string;

    
    /**
     * The unique identifier for this source.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * The title of the source.
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
