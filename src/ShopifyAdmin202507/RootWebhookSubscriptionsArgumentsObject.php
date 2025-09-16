<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootWebhookSubscriptionsArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;
    protected $query;
    protected $format;
    protected $topics;

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

    public function setSortKey($webhookSubscriptionSortKeys)
    {
        $this->sortKey = new RawObject($webhookSubscriptionSortKeys);

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    public function setFormat($webhookSubscriptionFormat)
    {
        $this->format = new RawObject($webhookSubscriptionFormat);

        return $this;
    }

    public function setTopics(array $topics)
    {
        $this->topics = $topics;

        return $this;
    }
}
