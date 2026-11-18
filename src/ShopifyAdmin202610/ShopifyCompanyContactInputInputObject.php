<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for company contact attributes when creating or updating a company contact.
 */
class ShopifyCompanyContactInputInputObject extends InputObject
{
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $title;
    protected $locale;
    protected $phone;

    /**
     * The company contact's first name.
     */
    public function setFirstName($firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The company contact's last name.
     */
    public function setLastName($lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * The unique email address of the company contact.
     */
    public function setEmail($email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The title of the company contact.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The contact's locale.
     */
    public function setLocale($locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * The phone number of the company contact.
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }
}
