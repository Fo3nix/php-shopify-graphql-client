<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootAppInstallationsArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;
    protected $category;
    protected $privacy;

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

    public function setSortKey($appInstallationSortKeys)
    {
        $this->sortKey = new RawObject($appInstallationSortKeys);

        return $this;
    }

    public function setCategory($appInstallationCategory)
    {
        $this->category = new RawObject($appInstallationCategory);

        return $this;
    }

    public function setPrivacy($appInstallationPrivacy)
    {
        $this->privacy = new RawObject($appInstallationPrivacy);

        return $this;
    }
}
