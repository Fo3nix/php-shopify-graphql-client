<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProduct;

/**
 * An interface representing asynchronous operations on products. Tracks the status and details of background product mutations like `productSet`, `productDelete`, `productDuplicate`, and `productBundle` operations. Provides status field (CREATED, ACTIVE, COMPLETE) and product field to monitor long-running product operations.
 */
interface ShopifyProductOperation
{
    
    /**
     * The product on which the operation is being performed.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct;

    
    /**
     * The status of this operation.
     *
     * @return string A ShopifyProductOperationStatusEnumObject value
     */
    public function getStatus(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
