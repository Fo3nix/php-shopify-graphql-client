<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class CollectionIdentifierInputInputObject extends InputObject
{
    protected $id;
    protected $customId;
    protected $handle;

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

    public function setHandle($handle)
    {
        $this->handle = $handle;

        return $this;
    }
}
