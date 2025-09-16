<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootCustomerMergePreviewArgumentsObject extends ArgumentsObject
{
    protected $customerOneId;
    protected $customerTwoId;
    protected $overrideFields;

    public function setCustomerOneId($customerOneId)
    {
        $this->customerOneId = $customerOneId;

        return $this;
    }

    public function setCustomerTwoId($customerTwoId)
    {
        $this->customerTwoId = $customerTwoId;

        return $this;
    }

    public function setOverrideFields(CustomerMergeOverrideFieldsInputObject $customerMergeOverrideFieldsInputObject)
    {
        $this->overrideFields = $customerMergeOverrideFieldsInputObject;

        return $this;
    }
}
