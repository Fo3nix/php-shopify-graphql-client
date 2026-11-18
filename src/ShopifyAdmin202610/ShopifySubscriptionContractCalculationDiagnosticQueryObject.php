<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A diagnostic (error or warning) emitted during a subscription contract calculation.
 */
class ShopifySubscriptionContractCalculationDiagnosticQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationDiagnostic";

    /**
     * The diagnostic code.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The path to the field on the calculation result that the diagnostic refers to, if any. Fields of the calculated contract start at `calculatedContract`, and line paths are keyed by the line's `id` on the calculated contract.
     */
    public function selectField_(): static
    {
        $this->selectField("field");

        return $this;
    }

    /**
     * A human-readable message describing the diagnostic.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
