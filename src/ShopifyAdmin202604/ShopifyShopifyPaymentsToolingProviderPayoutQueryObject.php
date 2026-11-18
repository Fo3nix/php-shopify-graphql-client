<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Relevant reference information for an alternate currency payout.
 */
class ShopifyShopifyPaymentsToolingProviderPayoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsToolingProviderPayout";

    /**
     * The balance amount the alternate currency payout was created for.
     */
    public function selectAmount(?ShopifyShopifyPaymentsToolingProviderPayoutAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A timestamp for the arrival of the alternate currency payout.
     */
    public function selectArrivalDate(): static
    {
        $this->selectField("arrivalDate");

        return $this;
    }

    /**
     * A timestamp for the creation of the alternate currency payout.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The currency alternate currency payout was created in.
     */
    public function selectCurrency(): static
    {
        $this->selectField("currency");

        return $this;
    }

    /**
     * The remote ID for the alternate currency payout.
     */
    public function selectRemoteId(): static
    {
        $this->selectField("remoteId");

        return $this;
    }
}
