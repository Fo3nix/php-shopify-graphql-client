<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayPaymentRequestReceiptProcessingStatusQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestReceiptProcessingStatus";

    public function selectErrorCode()
    {
        $this->selectField("errorCode");

        return $this;
    }

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }

    public function selectState()
    {
        $this->selectField("state");

        return $this;
    }
}
