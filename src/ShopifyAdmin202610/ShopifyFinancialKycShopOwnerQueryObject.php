<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the shop owner information for financial KYC purposes.
 */
class ShopifyFinancialKycShopOwnerQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinancialKycShopOwner";

    /**
     * The email of the shop owner.
     */
    public function selectEmail(): static
    {
        $this->selectField("email");

        return $this;
    }

    /**
     * The first name of the shop owner.
     */
    public function selectFirstName(): static
    {
        $this->selectField("firstName");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The last name of the shop owner.
     */
    public function selectLastName(): static
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * The phone number of the shop owner.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }
}
