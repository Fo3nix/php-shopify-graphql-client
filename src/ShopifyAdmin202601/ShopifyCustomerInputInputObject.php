<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields and values to use when creating or updating a customer.
 */
class ShopifyCustomerInputInputObject extends InputObject
{
    protected $email;
    protected $firstName;
    protected $id;
    protected $lastName;
    protected $locale;
    protected $metafields;
    protected $note;
    protected $phone;
    protected $tags;
    protected $emailMarketingConsent;
    protected $smsMarketingConsent;
    protected $taxExempt;
    protected $taxExemptions;
    protected $multipassIdentifier;

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
     * The ID of the customer to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

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
     * Additional metafields to associate to the customer.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

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
     * Information that describes when the customer consented to receiving marketing
     *         material by email. The `email` field is required when creating a customer with email marketing
     *         consent information.
     */
    public function setEmailMarketingConsent(ShopifyCustomerEmailMarketingConsentInputInputObject $shopifyCustomerEmailMarketingConsentInputInputObject): static
    {
        $this->emailMarketingConsent = $shopifyCustomerEmailMarketingConsentInputInputObject;

        return $this;
    }

    /**
     * The marketing consent information when the customer consented to receiving marketing
     *         material by SMS. The `phone` field is required when creating a customer with SMS
     *         marketing consent information.
     */
    public function setSmsMarketingConsent(ShopifyCustomerSmsMarketingConsentInputInputObject $shopifyCustomerSmsMarketingConsentInputInputObject): static
    {
        $this->smsMarketingConsent = $shopifyCustomerSmsMarketingConsentInputInputObject;

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

    /**
     * A unique identifier for the customer that's used with Multipass login.
     */
    public function setMultipassIdentifier($multipassIdentifier): static
    {
        $this->multipassIdentifier = $multipassIdentifier;

        return $this;
    }
}
