<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class ReturnOutcomeFinancialTransferUnionObject extends UnionObject
{
    public function onInvoiceReturnOutcome()
    {
        $object = new InvoiceReturnOutcomeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRefundReturnOutcome()
    {
        $object = new RefundReturnOutcomeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
