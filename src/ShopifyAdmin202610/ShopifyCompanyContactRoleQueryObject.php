<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The role for a [company contact](https://shopify.dev/api/admin-graphql/latest/objects/companycontact).
 */
class ShopifyCompanyContactRoleQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRole";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of a role. For example, `admin` or `buyer`.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * A note for the role.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }
}
