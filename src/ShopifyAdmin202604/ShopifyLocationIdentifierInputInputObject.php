<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

class ShopifyLocationIdentifierInputInputObject extends InputObject
{
    protected $id;
    protected $customId;

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
}
