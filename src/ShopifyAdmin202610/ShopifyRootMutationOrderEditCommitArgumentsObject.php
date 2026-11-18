<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderEditCommitArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $notifyCustomer;
    protected $staffNote;

    /**
     * The ID of the [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * or the order edit session that will have its changes applied to the order.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Whether to notify the customer or not.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }

    /**
     * Note for staff members.
     */
    public function setStaffNote($staffNote): static
    {
        $this->staffNote = $staffNote;

        return $this;
    }
}
