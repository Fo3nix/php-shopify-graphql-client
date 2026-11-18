<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationThemeFilesUpsertArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["themeId", "files"];

    protected $themeId;
    protected $files;

    /**
     * The theme to update.
     */
    public function setThemeId($themeId): static
    {
        $this->themeId = $themeId;

        return $this;
    }

    /**
     * The files to update.
     */
    public function setFiles(array $files): static
    {
        $this->files = $files;

        return $this;
    }
}
