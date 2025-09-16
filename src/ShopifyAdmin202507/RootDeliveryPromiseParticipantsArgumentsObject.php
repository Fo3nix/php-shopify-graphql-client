<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootDeliveryPromiseParticipantsArgumentsObject extends ArgumentsObject
{
    protected $ownerIds;
    protected $brandedPromiseHandle;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    public function setOwnerIds(array $ownerIds)
    {
        $this->ownerIds = $ownerIds;

        return $this;
    }

    public function setBrandedPromiseHandle($brandedPromiseHandle)
    {
        $this->brandedPromiseHandle = $brandedPromiseHandle;

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
