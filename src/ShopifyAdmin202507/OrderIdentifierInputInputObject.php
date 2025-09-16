<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class OrderIdentifierInputInputObject extends InputObject
{
    protected $id;
    protected $customId;

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
}
