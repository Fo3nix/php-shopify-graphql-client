<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootAppInstallationArgumentsObject extends ArgumentsObject
{
    protected $id;

    /**
     * ID used to lookup AppInstallation.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
