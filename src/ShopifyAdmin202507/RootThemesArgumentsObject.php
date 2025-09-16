<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootThemesArgumentsObject extends ArgumentsObject
{
    protected $roles;
    protected $names;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    public function setNames(array $names)
    {
        $this->names = $names;

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
