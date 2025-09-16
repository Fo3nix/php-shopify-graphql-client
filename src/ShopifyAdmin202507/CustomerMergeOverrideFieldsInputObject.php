<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class CustomerMergeOverrideFieldsInputObject extends InputObject
{
    protected $customerIdOfFirstNameToKeep;
    protected $customerIdOfLastNameToKeep;
    protected $customerIdOfEmailToKeep;
    protected $customerIdOfPhoneNumberToKeep;
    protected $customerIdOfDefaultAddressToKeep;
    protected $note;
    protected $tags;

    public function setCustomerIdOfFirstNameToKeep($customerIdOfFirstNameToKeep)
    {
        $this->customerIdOfFirstNameToKeep = $customerIdOfFirstNameToKeep;

        return $this;
    }

    public function setCustomerIdOfLastNameToKeep($customerIdOfLastNameToKeep)
    {
        $this->customerIdOfLastNameToKeep = $customerIdOfLastNameToKeep;

        return $this;
    }

    public function setCustomerIdOfEmailToKeep($customerIdOfEmailToKeep)
    {
        $this->customerIdOfEmailToKeep = $customerIdOfEmailToKeep;

        return $this;
    }

    public function setCustomerIdOfPhoneNumberToKeep($customerIdOfPhoneNumberToKeep)
    {
        $this->customerIdOfPhoneNumberToKeep = $customerIdOfPhoneNumberToKeep;

        return $this;
    }

    public function setCustomerIdOfDefaultAddressToKeep($customerIdOfDefaultAddressToKeep)
    {
        $this->customerIdOfDefaultAddressToKeep = $customerIdOfDefaultAddressToKeep;

        return $this;
    }

    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    public function setTags(array $tags)
    {
        $this->tags = $tags;

        return $this;
    }
}
