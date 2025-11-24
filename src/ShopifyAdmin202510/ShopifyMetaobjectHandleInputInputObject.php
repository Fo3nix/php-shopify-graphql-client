<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\InputObject;

class ShopifyMetaobjectHandleInputInputObject extends InputObject
{
    protected $type;
    protected $handle;

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function setHandle($handle)
    {
        $this->handle = $handle;

        return $this;
    }
}
