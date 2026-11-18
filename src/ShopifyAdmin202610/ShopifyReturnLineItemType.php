<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyReturnReasonDefinition;

/**
 * A return line item of any type.
 */
interface ShopifyReturnLineItemType extends ShopifyNode
{
    
    /**
     * A note from the customer that describes the item to be returned. Maximum length: 300 characters.
     *
     * @return string
     */
    public function getCustomerNote(): ?string;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * The quantity that can be processed.
     *
     * @return int
     */
    public function getProcessableQuantity(): ?int;

    
    /**
     * The quantity that has been processed.
     *
     * @return int
     */
    public function getProcessedQuantity(): ?int;

    
    /**
     * The quantity being returned.
     *
     * @return int
     */
    public function getQuantity(): ?int;

    
    /**
     * The quantity that can be refunded.
     *
     * @return int
     */
    public function getRefundableQuantity(): ?int;

    
    /**
     * The quantity that was refunded.
     *
     * @return int
     */
    public function getRefundedQuantity(): ?int;

    
    /**
     * The reason for returning the item.
     *
     * @return string A ShopifyReturnReasonEnumObject value
     */
    public function getReturnReason(): ?string;

    
    /**
     * The standardized reason for why the item is being returned.
     *
     * @return ShopifyReturnReasonDefinition
     */
    public function getReturnReasonDefinition(): ?ShopifyReturnReasonDefinition;

    
    /**
     * Additional information about the reason for the return. Maximum length: 255 characters.
     *
     * @return string
     */
    public function getReturnReasonNote(): ?string;

    
    /**
     * The quantity that hasn't been processed.
     *
     * @return int
     */
    public function getUnprocessedQuantity(): ?int;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
