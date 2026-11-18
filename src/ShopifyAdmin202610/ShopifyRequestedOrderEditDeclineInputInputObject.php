<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for declining a requested order edit.
 */
class ShopifyRequestedOrderEditDeclineInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $declineNote;
    protected $id;

    /**
     * The notification message that's sent to a buyer about their declined requested order edit.
     * Maximum length: 500 characters.
     */
    public function setDeclineNote($declineNote): static
    {
        $this->declineNote = $declineNote;

        return $this;
    }

    /**
     * The ID of the requested order edit to decline.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
