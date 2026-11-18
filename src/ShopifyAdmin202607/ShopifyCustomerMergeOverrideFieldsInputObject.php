<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to override default customer merge rules. These overrides are field-specific; they don't
 * provide a general way to force a particular customer ID to survive the merge.
 */
class ShopifyCustomerMergeOverrideFieldsInputObject extends InputObject
{
    protected $customerIdOfFirstNameToKeep;
    protected $customerIdOfLastNameToKeep;
    protected $customerIdOfEmailToKeep;
    protected $customerIdOfPhoneNumberToKeep;
    protected $customerIdOfDefaultAddressToKeep;
    protected $note;
    protected $tags;

    /**
     * The ID of the customer whose first name will be kept.
     */
    public function setCustomerIdOfFirstNameToKeep($customerIdOfFirstNameToKeep): static
    {
        $this->customerIdOfFirstNameToKeep = $customerIdOfFirstNameToKeep;

        return $this;
    }

    /**
     * The ID of the customer whose last name will be kept.
     */
    public function setCustomerIdOfLastNameToKeep($customerIdOfLastNameToKeep): static
    {
        $this->customerIdOfLastNameToKeep = $customerIdOfLastNameToKeep;

        return $this;
    }

    /**
     * The ID of the customer whose email will be kept. The selected customer must have an email address. When
     * this field is provided and valid, the selected customer is also the resulting customer after the merge.
     */
    public function setCustomerIdOfEmailToKeep($customerIdOfEmailToKeep): static
    {
        $this->customerIdOfEmailToKeep = $customerIdOfEmailToKeep;

        return $this;
    }

    /**
     * The ID of the customer whose phone number will be kept.
     */
    public function setCustomerIdOfPhoneNumberToKeep($customerIdOfPhoneNumberToKeep): static
    {
        $this->customerIdOfPhoneNumberToKeep = $customerIdOfPhoneNumberToKeep;

        return $this;
    }

    /**
     * The ID of the customer whose default address will be kept.
     */
    public function setCustomerIdOfDefaultAddressToKeep($customerIdOfDefaultAddressToKeep): static
    {
        $this->customerIdOfDefaultAddressToKeep = $customerIdOfDefaultAddressToKeep;

        return $this;
    }

    /**
     * The note to keep.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The tags to keep.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }
}
