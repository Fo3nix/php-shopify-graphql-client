<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class CustomerIdentifierInputInputObject extends InputObject
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

    public function setCustomId(UniqueMetafieldValueInputInputObject $uniqueMetafieldValueInputInputObject)
    {
        $this->customId = $uniqueMetafieldValueInputInputObject;

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
