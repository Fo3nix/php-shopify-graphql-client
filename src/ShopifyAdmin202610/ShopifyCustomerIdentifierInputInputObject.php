<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for identifying a customer.
 */
class ShopifyCustomerIdentifierInputInputObject extends InputObject
{
    protected $id;
    protected $customId;
    protected $emailAddress;
    protected $phoneNumber;

    /**
     * The ID of the customer.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The [custom ID](https://shopify.dev/docs/apps/build/custom-data/metafields/working-with-custom-ids) of the customer.
     */
    public function setCustomId(ShopifyUniqueMetafieldValueInputInputObject $shopifyUniqueMetafieldValueInputInputObject): static
    {
        $this->customId = $shopifyUniqueMetafieldValueInputInputObject;

        return $this;
    }

    /**
     * The email address of the customer.
     */
    public function setEmailAddress($emailAddress): static
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * The phone number of the customer.
     */
    public function setPhoneNumber($phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
