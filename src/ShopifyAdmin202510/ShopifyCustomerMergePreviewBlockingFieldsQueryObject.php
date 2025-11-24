<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerMergePreviewBlockingFieldsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePreviewBlockingFields";

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectTags()
    {
        $this->selectField("tags");

        return $this;
    }
}
