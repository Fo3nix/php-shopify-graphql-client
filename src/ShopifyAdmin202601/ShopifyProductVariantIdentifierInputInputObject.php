<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

class ShopifyProductVariantIdentifierInputInputObject extends InputObject
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
