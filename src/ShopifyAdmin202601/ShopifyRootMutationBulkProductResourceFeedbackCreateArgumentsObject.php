<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationBulkProductResourceFeedbackCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["feedbackInput"];

    protected $feedbackInput;

    /**
     * An array of inputs to create the feedback. Limited to 50.
     */
    public function setFeedbackInput(array $feedbackInput): static
    {
        $this->feedbackInput = $feedbackInput;

        return $this;
    }
}
