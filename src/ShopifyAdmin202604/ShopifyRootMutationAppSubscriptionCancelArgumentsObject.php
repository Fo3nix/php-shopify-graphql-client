<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationAppSubscriptionCancelArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $prorate;

    /**
     * The ID of the app subscription to be cancelled.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Whether to issue prorated credits for the unused portion of the app subscription.  There will
     * be a corresponding deduction (based on revenue share) to your Partner account.
     * For example, if a $10.00 app subscription (with 0% revenue share) is cancelled and prorated half way
     * through the billing cycle, then the merchant will be credited $5.00 and that amount will be deducted
     * from your Partner account.
     */
    public function setProrate($prorate): static
    {
        $this->prorate = $prorate;

        return $this;
    }
}
