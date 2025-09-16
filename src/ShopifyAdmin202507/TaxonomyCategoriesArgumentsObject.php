<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class TaxonomyCategoriesArgumentsObject extends ArgumentsObject
{
    protected $search;
    protected $childrenOf;
    protected $siblingsOf;
    protected $descendantsOf;
    protected $first;
    protected $after;
    protected $last;
    protected $before;

    public function setSearch($search)
    {
        $this->search = $search;

        return $this;
    }

    public function setChildrenOf($childrenOf)
    {
        $this->childrenOf = $childrenOf;

        return $this;
    }

    public function setSiblingsOf($siblingsOf)
    {
        $this->siblingsOf = $siblingsOf;

        return $this;
    }

    public function setDescendantsOf($descendantsOf)
    {
        $this->descendantsOf = $descendantsOf;

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
