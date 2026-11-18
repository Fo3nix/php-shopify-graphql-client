<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A warning that is displayed to the merchant when a change is made to a draft order.
 */
interface ShopifyDraftOrderWarning
{
    
    /**
     * The error code.
     *
     * @return string
     */
    public function getErrorCode(): ?string;

    
    /**
     * The input field that the warning applies to.
     *
     * @return string
     */
    public function getField(): ?string;

    
    /**
     * The warning message.
     *
     * @return string
     */
    public function getMessage(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
