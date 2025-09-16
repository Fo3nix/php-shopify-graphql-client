<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class OnlineStoreThemeFilesArgumentsObject extends ArgumentsObject
{
    protected $filenames;
    protected $first;
    protected $after;

    public function setFilenames(array $filenames)
    {
        $this->filenames = $filenames;

        return $this;
    }

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    public function setAfter($after)
    {
        $this->after = $after;

        return $this;
    }
}
