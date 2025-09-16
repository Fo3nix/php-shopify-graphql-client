<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootSegmentFilterSuggestionsArgumentsObject extends ArgumentsObject
{
    protected $search;
    protected $first;
    protected $after;

    public function setSearch($search)
    {
        $this->search = $search;

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
