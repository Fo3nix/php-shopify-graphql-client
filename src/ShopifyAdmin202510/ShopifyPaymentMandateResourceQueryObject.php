<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentMandateResourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentMandateResource";

    public function selectResourceId()
    {
        $this->selectField("resourceId");

        return $this;
    }

    public function selectResourceType()
    {
        $this->selectField("resourceType");

        return $this;
    }
}
