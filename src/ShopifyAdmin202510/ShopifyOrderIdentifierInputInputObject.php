<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\InputObject;

class ShopifyOrderIdentifierInputInputObject extends InputObject
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
