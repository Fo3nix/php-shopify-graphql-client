<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to identify a customer.
 */
class ShopifyCustomerSetIdentifiersInputObject extends InputObject
{
    protected $id;
    protected $email;
    protected $phone;
    protected $customId;

    /**
     * ID of customer to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Email address of the customer to upsert.
     */
    public function setEmail($email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Phone number of the customer to upsert.
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Custom ID of customer to upsert.
     */
    public function setCustomId(ShopifyUniqueMetafieldValueInputInputObject $shopifyUniqueMetafieldValueInputInputObject): static
    {
        $this->customId = $shopifyUniqueMetafieldValueInputInputObject;

        return $this;
    }
}
