<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCustomerMergePreviewArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerOneId", "customerTwoId"];

    protected $customerOneId;
    protected $customerTwoId;
    protected $overrideFields;

    /**
     * The ID of one customer to merge. This customer isn't guaranteed to be kept.
     */
    public function setCustomerOneId($customerOneId): static
    {
        $this->customerOneId = $customerOneId;

        return $this;
    }

    /**
     * The ID of another customer to merge. This customer is kept when neither customer has an email address.
     */
    public function setCustomerTwoId($customerTwoId): static
    {
        $this->customerTwoId = $customerTwoId;

        return $this;
    }

    /**
     * The field-specific overrides for default customer merge rules.
     */
    public function setOverrideFields(ShopifyCustomerMergeOverrideFieldsInputObject $shopifyCustomerMergeOverrideFieldsInputObject): static
    {
        $this->overrideFields = $shopifyCustomerMergeOverrideFieldsInputObject;

        return $this;
    }
}
