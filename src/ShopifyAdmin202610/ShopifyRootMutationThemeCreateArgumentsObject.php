<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationThemeCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["source"];

    protected $source;
    protected $name;
    protected $role;

    /**
     * An external URL or a
     * [staged upload URL](https://shopify.dev/api/admin-graphql/latest/mutations/stageduploadscreate)
     * of the theme to import.
     */
    public function setSource($source): static
    {
        $this->source = $source;

        return $this;
    }

    /**
     * The name of the theme to be created.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The role of the theme to be created. Only UNPUBLISHED and DEVELOPMENT roles are permitted.
     */
    public function setRole($shopifyThemeRole): static
    {
        $this->role = new RawObject($shopifyThemeRole);

        return $this;
    }
}
