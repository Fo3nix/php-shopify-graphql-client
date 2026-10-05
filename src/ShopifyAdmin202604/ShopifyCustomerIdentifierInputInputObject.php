<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

class ShopifyCustomerIdentifierInputInputObject extends InputObject
{
    protected $id;
    protected $customId;
    protected $emailAddress;
    protected $phoneNumber;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setCustomId(ShopifyUniqueMetafieldValueInputInputObject $shopifyUniqueMetafieldValueInputInputObject)
    {
        $this->customId = $shopifyUniqueMetafieldValueInputInputObject;

        return $this;
    }

    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
