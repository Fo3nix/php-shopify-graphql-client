<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootMetaobjectByHandleArgumentsObject extends ArgumentsObject
{
    protected $handle;

    public function setHandle(MetaobjectHandleInputInputObject $metaobjectHandleInputInputObject)
    {
        $this->handle = $metaobjectHandleInputInputObject;

        return $this;
    }
}
