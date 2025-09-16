<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class DraftOrderMetafieldsArgumentsObject extends ArgumentsObject
{
    protected $namespace;
    protected $keys;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    public function setKeys(array $keys)
    {
        $this->keys = $keys;

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

    public function setReverse($reverse)
    {
        $this->reverse = $reverse;

        return $this;
    }
}
