<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootAppInstallationsArgumentsObject extends ArgumentsObject
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

    public function setSortKey($shopifyAppInstallationSortKeys)
    {
        $this->sortKey = new RawObject($shopifyAppInstallationSortKeys);

        return $this;
    }

    public function setCategory($shopifyAppInstallationCategory)
    {
        $this->category = new RawObject($shopifyAppInstallationCategory);

        return $this;
    }

    public function setPrivacy($shopifyAppInstallationPrivacy)
    {
        $this->privacy = new RawObject($shopifyAppInstallationPrivacy);

        return $this;
    }
}
