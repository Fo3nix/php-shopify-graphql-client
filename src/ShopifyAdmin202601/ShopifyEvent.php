<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;

/**
 * Events chronicle resource activities such as the creation of an article, the fulfillment of an order, or the
 * addition of a product.
 */
interface ShopifyEvent
{
    
    /**
     * The action that occurred.
     *
     * @return string
     */
    public function getAction(): ?string;

    
    /**
     * The name of the app that created the event.
     *
     * @return string
     */
    public function getAppTitle(): ?string;

    
    /**
     * Whether the event was created by an app.
     *
     * @return bool
     */
    public function getAttributeToApp(): ?bool;

    
    /**
     * Whether the event was caused by an admin user.
     *
     * @return bool
     */
    public function getAttributeToUser(): ?bool;

    
    /**
     * The date and time when the event was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon;

    
    /**
     * Whether the event is critical.
     *
     * @return bool
     */
    public function getCriticalAlert(): ?bool;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * Human readable text that describes the event.
     *
     * @return string
     */
    public function getMessage(): mixed;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
