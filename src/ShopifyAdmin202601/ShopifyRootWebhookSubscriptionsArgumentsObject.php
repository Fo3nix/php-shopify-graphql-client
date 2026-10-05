<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootWebhookSubscriptionsArgumentsObject extends ArgumentsObject
{
    protected $uri;
    protected $format;
    protected $topics;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;
    protected $query;

    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    public function setFormat($shopifyWebhookSubscriptionFormat)
    {
        $this->format = new RawObject($shopifyWebhookSubscriptionFormat);

        return $this;
    }

    public function setTopics(array $topics)
    {
        $this->topics = $topics;

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

    public function setSortKey($shopifyWebhookSubscriptionSortKeys)
    {
        $this->sortKey = new RawObject($shopifyWebhookSubscriptionSortKeys);

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }
}
