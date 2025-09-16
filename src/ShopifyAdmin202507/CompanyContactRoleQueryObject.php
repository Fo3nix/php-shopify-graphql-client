<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyContactRoleQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRole";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }
}
