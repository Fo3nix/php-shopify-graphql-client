<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootSegmentValueSuggestionsArgumentsObject extends ArgumentsObject
{
    protected $search;
    protected $filterQueryName;
    protected $functionParameterQueryName;
    protected $first;
    protected $after;
    protected $last;
    protected $before;

    public function setSearch($search)
    {
        $this->search = $search;

        return $this;
    }

    public function setFilterQueryName($filterQueryName)
    {
        $this->filterQueryName = $filterQueryName;

        return $this;
    }

    public function setFunctionParameterQueryName($functionParameterQueryName)
    {
        $this->functionParameterQueryName = $functionParameterQueryName;

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

    public function setLast($last)
    {
        $this->last = $last;

        return $this;
    }

    public function setBefore($before)
    {
        $this->before = $before;

        return $this;
    }
}
