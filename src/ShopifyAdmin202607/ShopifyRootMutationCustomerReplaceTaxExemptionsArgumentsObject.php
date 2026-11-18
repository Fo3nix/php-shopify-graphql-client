<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationCustomerReplaceTaxExemptionsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId", "taxExemptions"];

    protected $customerId;
    protected $taxExemptions;

    /**
     * The ID of the customer to update.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The list of tax exemptions that will replace the current exemptions for a customer. Can be an array or a comma-separated list.
     *   Example values: `["CA_BC_RESELLER_EXEMPTION", "A_STATUS_CARD_EXEMPTION"]`, `"CA_BC_RESELLER_EXEMPTION, CA_STATUS_CARD_EXEMPTION"`.
     */
    public function setTaxExemptions(array $taxExemptions): static
    {
        $this->taxExemptions = array_map(function ($value) {
            return new RawObject($value);
        }, $taxExemptions);

        return $this;
    }
}
