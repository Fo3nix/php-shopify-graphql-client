<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifyReturnOutcomeFinancialTransferUnionObject extends UnionObject
{
    public function onShopifyInvoiceReturnOutcome()
    {
        $object = new ShopifyInvoiceReturnOutcomeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyRefundReturnOutcome()
    {
        $object = new ShopifyRefundReturnOutcomeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
