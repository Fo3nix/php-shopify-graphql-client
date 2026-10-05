<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

class ShopifyProductIdentifierInputInputObject extends InputObject
{
    protected $id;
    protected $customId;
    protected $handle;

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

    public function setHandle($handle)
    {
        $this->handle = $handle;

        return $this;
    }
}
