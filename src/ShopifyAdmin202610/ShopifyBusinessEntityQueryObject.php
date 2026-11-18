<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A legal entity through which a merchant operates. Each business entity contains its own [`BusinessEntityAddress`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BusinessEntityAddress), company information, and can be associated with its own [`ShopifyPaymentsAccount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsAccount). [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) objects can be assigned to a business entity to determine payment processing and [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) attribution.
 *
 * Every shop must have one primary business entity. Additional entities enable international operations by establishing legal presence in multiple countries.
 *
 * Learn more about [managing multiple legal entities](https://shopify.dev/docs/apps/build/markets/multiple-entities).
 */
class ShopifyBusinessEntityQueryObject extends QueryObject
{
    const OBJECT_NAME = "BusinessEntity";

    /**
     * The address of the merchant's Business Entity.
     */
    public function selectAddress(?ShopifyBusinessEntityAddressArgumentsObject $argsObject = null): ShopifyBusinessEntityAddressQueryObject
    {
        $object = new ShopifyBusinessEntityAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the Business Entity is archived from the shop.
     */
    public function selectArchived(): static
    {
        $this->selectField("archived");

        return $this;
    }

    /**
     * The name of the company associated with the merchant's Business Entity.
     */
    public function selectCompanyName(): static
    {
        $this->selectField("companyName");

        return $this;
    }

    /**
     * The display name of the merchant's Business Entity.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The stable central legal entity ID associated with this business entity.
     */
    public function selectLegalEntityId(): static
    {
        $this->selectField("legalEntityId");

        return $this;
    }

    /**
     * Whether it's the merchant's primary Business Entity.
     */
    public function selectPrimary(): static
    {
        $this->selectField("primary");

        return $this;
    }

    /**
     * Returns the Shopify Payments account information for the shop. Includes current balances across all currencies, payout schedules, and bank account configurations.
     *
     * The account includes [`ShopifyPaymentsBalanceTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBalanceTransaction) records showing charges, refunds, and adjustments that affect your balance. Also includes [`ShopifyPaymentsDispute`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsDispute) records and [`ShopifyPaymentsPayout`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayout) history between the account and connected [`ShopifyPaymentsBankAccount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBankAccount) configurations.
     */
    public function selectShopifyPaymentsAccount(?ShopifyBusinessEntityShopifyPaymentsAccountArgumentsObject $argsObject = null): ShopifyShopifyPaymentsAccountQueryObject
    {
        $object = new ShopifyShopifyPaymentsAccountQueryObject("shopifyPaymentsAccount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
