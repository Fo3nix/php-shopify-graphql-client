<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for the buyers who can use this discount.
 */
class ShopifyDiscountContextInputInputObject extends InputObject
{
    protected $all;
    protected $customers;
    protected $customerSegments;

    /**
     * All buyers are eligible for this discount.
     */
    public function setAll($shopifyDiscountBuyerSelection): static
    {
        $this->all = new RawObject($shopifyDiscountBuyerSelection);

        return $this;
    }

    /**
     * The list of customer IDs to add or remove from the list of customers.
     */
    public function setCustomers(ShopifyDiscountCustomersInputInputObject $shopifyDiscountCustomersInputInputObject): static
    {
        $this->customers = $shopifyDiscountCustomersInputInputObject;

        return $this;
    }

    /**
     * The list of customer segment IDs to add or remove from the list of customer segments.
     */
    public function setCustomerSegments(ShopifyDiscountCustomerSegmentsInputInputObject $shopifyDiscountCustomerSegmentsInputInputObject): static
    {
        $this->customerSegments = $shopifyDiscountCustomerSegmentsInputInputObject;

        return $this;
    }
}
