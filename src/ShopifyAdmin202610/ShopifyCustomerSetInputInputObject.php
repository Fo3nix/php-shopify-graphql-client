<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields and values to use when creating or updating a customer.
 */
class ShopifyCustomerSetInputInputObject extends InputObject
{
    protected $email;
    protected $firstName;
    protected $lastName;
    protected $locale;
    protected $note;
    protected $phone;
    protected $tags;
    protected $taxExempt;
    protected $taxExemptions;

    /**
     * The unique email address of the customer.
     */
    public function setEmail($email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The customer's first name.
     */
    public function setFirstName($firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The customer's last name.
     */
    public function setLastName($lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * The customer's locale.
     */
    public function setLocale($locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * A note about the customer.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The unique phone number for the customer.
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * A list of tags to associate with the customer. Can be an array or a comma-separated list. Example values: `["tag1", "tag2", "tag3"]`, `"tag1, tag2, tag3"`
     *
     * Updating `tags` overwrites any existing tags that were previously added to the customer. To add new tags without overwriting
     * existing tags, use the [tagsAdd](https://shopify.dev/api/admin-graphql/latest/mutations/tagsadd)
     * mutation.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Whether the customer is exempt from paying taxes on their order.
     */
    public function setTaxExempt($taxExempt): static
    {
        $this->taxExempt = $taxExempt;

        return $this;
    }

    /**
     * The list of tax exemptions to apply to the customer.
     */
    public function setTaxExemptions(array $taxExemptions): static
    {
        $this->taxExemptions = array_map(function ($value) {
            return new RawObject($value);
        }, $taxExemptions);

        return $this;
    }
}
