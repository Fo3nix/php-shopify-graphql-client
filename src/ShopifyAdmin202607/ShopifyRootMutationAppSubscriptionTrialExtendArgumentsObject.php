<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationAppSubscriptionTrialExtendArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "days"];

    protected $id;
    protected $days;

    /**
     * The ID of the app subscription to extend the trial for.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The number of days to extend the trial. The value must be greater than 0 and less than or equal to 1000.
     */
    public function setDays($days): static
    {
        $this->days = $days;

        return $this;
    }
}
