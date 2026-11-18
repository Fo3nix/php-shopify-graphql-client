<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `shopifyPaymentsPayoutAlternateCurrencyCreate` mutation.
 */
class ShopifyShopifyPaymentsPayoutAlternateCurrencyCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayoutAlternateCurrencyCreatePayload";

    /**
     * The resulting alternate currency payout created.
     */
    public function selectPayout(?ShopifyShopifyPaymentsPayoutAlternateCurrencyCreatePayloadPayoutArgumentsObject $argsObject = null): ShopifyShopifyPaymentsToolingProviderPayoutQueryObject
    {
        $object = new ShopifyShopifyPaymentsToolingProviderPayoutQueryObject("payout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the alternate currency payout was created successfully.
     */
    public function selectSuccess(): static
    {
        $this->selectField("success");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyShopifyPaymentsPayoutAlternateCurrencyCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyShopifyPaymentsPayoutAlternateCurrencyCreateUserErrorQueryObject
    {
        $object = new ShopifyShopifyPaymentsPayoutAlternateCurrencyCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
