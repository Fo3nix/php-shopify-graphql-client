<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a new customer object or identifying an existing customer to update & associate with the order.
 */
class ShopifyOrderCreateUpsertCustomerAttributesInputInputObject extends InputObject
{
    protected $addresses;
    protected $email;
    protected $firstName;
    protected $id;
    protected $lastName;
    protected $multipassIdentifier;
    protected $note;
    protected $phone;
    protected $tags;
    protected $taxExempt;

    /**
     * A list of addresses to associate with the customer.
     */
    public function setAddresses(array $addresses): static
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * The email address to update the customer with. If no `id` is provided, this is used to uniquely identify
     *                  the customer.
     *
     *                 > Note:
     *                 > If both this email input field and the email on `OrderCreateOrderInput` are provided, this field will
     *                 > take precedence.
     */
    public function setEmail($email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The first name of the customer.
     */
    public function setFirstName($firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The id of the customer to associate to the order.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The last name of the customer.
     */
    public function setLastName($lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * A unique identifier for the customer that's used with [Multipass login](https://shopify.dev/api/multipass).
     */
    public function setMultipassIdentifier($multipassIdentifier): static
    {
        $this->multipassIdentifier = $multipassIdentifier;

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
     * The unique phone number ([E.164 format](https://en.wikipedia.org/wiki/E.164)) for this customer.
     *                  Attempting to assign the same phone number to multiple customers returns an error. The property can be
     *                  set using different formats, but each format must represent a number that can be dialed from anywhere
     *                  in the world. The following formats are all valid:
     *                   - 6135551212
     *                   - +16135551212
     *                   - (613)555-1212
     *                   - +1 613-555-1212
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Tags that the shop owner has attached to the customer. A customer can have up to 250 tags. Each tag can have up to 255 characters.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Whether the customer is exempt from paying taxes on their order. If `true`, then taxes won't be applied to an order at checkout. If `false`, then taxes will be applied at checkout.
     */
    public function setTaxExempt($taxExempt): static
    {
        $this->taxExempt = $taxExempt;

        return $this;
    }
}
