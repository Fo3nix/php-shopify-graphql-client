<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a contact field for a Shop Pay payment request.
 */
class ShopifyShopPayPaymentRequestContactFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestContactField";

    /**
     * The first address line of the contact field.
     */
    public function selectAddress1(): static
    {
        $this->selectField("address1");

        return $this;
    }

    /**
     * The second address line of the contact field.
     */
    public function selectAddress2(): static
    {
        $this->selectField("address2");

        return $this;
    }

    /**
     * The city of the contact field.
     */
    public function selectCity(): static
    {
        $this->selectField("city");

        return $this;
    }

    /**
     * The company name of the contact field.
     */
    public function selectCompanyName(): static
    {
        $this->selectField("companyName");

        return $this;
    }

    /**
     * The country of the contact field.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * The email of the contact field.
     */
    public function selectEmail(): static
    {
        $this->selectField("email");

        return $this;
    }

    /**
     * The first name of the contact field.
     */
    public function selectFirstName(): static
    {
        $this->selectField("firstName");

        return $this;
    }

    /**
     * The last name of the contact field.
     */
    public function selectLastName(): static
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * The phone number of the contact field.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * The postal code of the contact field.
     */
    public function selectPostalCode(): static
    {
        $this->selectField("postalCode");

        return $this;
    }

    /**
     * The province of the contact field.
     */
    public function selectProvinceCode(): static
    {
        $this->selectField("provinceCode");

        return $this;
    }
}
