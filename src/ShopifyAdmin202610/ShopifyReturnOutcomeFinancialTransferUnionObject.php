<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * The financial transfer details for the return outcome.
 */
class ShopifyReturnOutcomeFinancialTransferUnionObject extends UnionObject
{
    public function onShopifyInvoiceReturnOutcome(): ShopifyInvoiceReturnOutcomeQueryObject
    {
        $object = new ShopifyInvoiceReturnOutcomeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyRefundReturnOutcome(): ShopifyRefundReturnOutcomeQueryObject
    {
        $object = new ShopifyRefundReturnOutcomeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
