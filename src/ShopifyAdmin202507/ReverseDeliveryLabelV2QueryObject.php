<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseDeliveryLabelV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryLabelV2";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectPublicFileUrl()
    {
        $this->selectField("publicFileUrl");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
