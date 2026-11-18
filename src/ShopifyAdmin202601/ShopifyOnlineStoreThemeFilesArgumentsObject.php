<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyOnlineStoreThemeFilesArgumentsObject extends ArgumentsObject
{
    protected $filenames;
    protected $first;
    protected $after;

    /**
     * The filenames of the theme files. At most 50 filenames can be specified. Use '*' to match zero or more characters.
     */
    public function setFilenames(array $filenames): static
    {
        $this->filenames = $filenames;

        return $this;
    }

    /**
     * Returns at most the first n files for this theme. Fewer than n files may be returned to stay within the payload size limit, or when the end of the list is reached. At most 2500 can be fetched at once.
     */
    public function setFirst($first): static
    {
        $this->first = $first;

        return $this;
    }

    /**
     * A cursor for use in pagination.
     */
    public function setAfter($after): static
    {
        $this->after = $after;

        return $this;
    }
}
