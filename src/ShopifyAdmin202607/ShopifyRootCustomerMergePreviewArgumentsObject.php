<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCustomerMergePreviewArgumentsObject extends ArgumentsObject
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

    public function setOverrideFields(ShopifyCustomerMergeOverrideFieldsInputObject $shopifyCustomerMergeOverrideFieldsInputObject)
    {
        $this->overrideFields = $shopifyCustomerMergeOverrideFieldsInputObject;

        return $this;
    }
}
