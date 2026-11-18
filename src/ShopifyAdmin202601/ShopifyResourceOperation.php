<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyRowCount;

/**
 * Represents a merchandising background operation interface.
 */
interface ShopifyResourceOperation
{
    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * The count of processed rows, summing imported, failed, and skipped rows.
     *
     * @return int
     */
    public function getProcessedRowCount(): ?int;

    
    /**
     * Represents a rows objects within this background operation.
     *
     * @return ShopifyRowCount
     */
    public function getRowCount(): ?ShopifyRowCount;

    
    /**
     * The status of this operation.
     *
     * @return string A ShopifyResourceOperationStatusEnumObject value
     */
    public function getStatus(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
