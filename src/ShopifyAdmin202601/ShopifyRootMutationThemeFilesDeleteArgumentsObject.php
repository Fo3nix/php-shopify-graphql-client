<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationThemeFilesDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["themeId", "files"];

    protected $themeId;
    protected $files;

    /**
     * Specifies the theme to deleted.
     */
    public function setThemeId($themeId): static
    {
        $this->themeId = $themeId;

        return $this;
    }

    /**
     * The files to delete.
     */
    public function setFiles(array $files): static
    {
        $this->files = $files;

        return $this;
    }
}
