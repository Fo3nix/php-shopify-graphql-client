<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about a customer of the shop, such as the customer's contact details, purchase history, and marketing preferences.
 *
 * Tracks the customer's total spending through the [`amountSpent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer#field-amountSpent) field and provides access to associated data such as payment methods and subscription contracts.
 *
 * > Caution:
 * > Only use this data if it's required for your app's functionality. Shopify will restrict [access to scopes](https://shopify.dev/api/usage/access-scopes) for apps that don't have a legitimate use for the associated data.
 */
class ShopifyCustomerQueryObject extends QueryObject
{
    const OBJECT_NAME = "Customer";

    /**
     * A list of addresses associated with the customer. Limited to 250 addresses. Use `addressesV2` for paginated access to all addresses.
     *
     * @deprecated Limited to 250 addresses. Use `addressesV2` for paginated access to all addresses.
     */
    public function selectAddresses(?ShopifyCustomerAddressesArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("addresses");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The addresses associated with the customer.
     */
    public function selectAddressesV2(?ShopifyCustomerAddressesV2ArgumentsObject $argsObject = null): ShopifyMailingAddressConnectionQueryObject
    {
        $object = new ShopifyMailingAddressConnectionQueryObject("addressesV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount that the customer has spent on orders in their lifetime.
     */
    public function selectAmountSpent(?ShopifyCustomerAmountSpentArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amountSpent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the merchant can delete the customer from their store.
     *
     * A customer can be deleted from a store only if they haven't yet made an order. After a customer makes an
     * order, they can't be deleted from a store.
     */
    public function selectCanDelete(): static
    {
        $this->selectField("canDelete");

        return $this;
    }

    /**
     * A list of the customer's company contact profiles.
     */
    public function selectCompanyContactProfiles(?ShopifyCustomerCompanyContactProfilesArgumentsObject $argsObject = null): ShopifyCompanyContactQueryObject
    {
        $object = new ShopifyCompanyContactQueryObject("companyContactProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the customer was added to the store.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Whether the customer has opted out of having their data sold.
     */
    public function selectDataSaleOptOut(): static
    {
        $this->selectField("dataSaleOptOut");

        return $this;
    }

    /**
     * The default address associated with the customer.
     */
    public function selectDefaultAddress(?ShopifyCustomerDefaultAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("defaultAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer's default email address.
     */
    public function selectDefaultEmailAddress(?ShopifyCustomerDefaultEmailAddressArgumentsObject $argsObject = null): ShopifyCustomerEmailAddressQueryObject
    {
        $object = new ShopifyCustomerEmailAddressQueryObject("defaultEmailAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer's default phone number.
     */
    public function selectDefaultPhoneNumber(?ShopifyCustomerDefaultPhoneNumberArgumentsObject $argsObject = null): ShopifyCustomerPhoneNumberQueryObject
    {
        $object = new ShopifyCustomerPhoneNumberQueryObject("defaultPhoneNumber");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The full name of the customer, based on the values for first_name and last_name. If the first_name and
     * last_name are not available, then this falls back to the customer's email address, and if that is not available, the customer's phone number.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * The customer's email address.
     *
     * @deprecated Use `defaultEmailAddress.emailAddress` instead.
     */
    public function selectEmail(): static
    {
        $this->selectField("email");

        return $this;
    }

    /**
     * The current email marketing state for the customer.
     * If the customer doesn't have an email address, then this property is `null`.
     *
     * @deprecated Use `defaultEmailAddress.marketingState`, `defaultEmailAddress.marketingOptInLevel`, `defaultEmailAddress.marketingUpdatedAt`, and `defaultEmailAddress.sourceLocation` instead.
     */
    public function selectEmailMarketingConsent(?ShopifyCustomerEmailMarketingConsentArgumentsObject $argsObject = null): ShopifyCustomerEmailMarketingConsentStateQueryObject
    {
        $object = new ShopifyCustomerEmailMarketingConsentStateQueryObject("emailMarketingConsent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of events associated with the customer.
     */
    public function selectEvents(?ShopifyCustomerEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer's first name.
     */
    public function selectFirstName(): static
    {
        $this->selectField("firstName");

        return $this;
    }

    /**
     * Whether the merchant has added timeline comments about the customer on the customer's page.
     *
     * @deprecated To query for comments on the timeline, use the `events` connection and a 'query' argument containing `verb:comment`, or look for a 'CommentEvent' in the `__typename` of `events`.
     */
    public function selectHasTimelineComment(): static
    {
        $this->selectField("hasTimelineComment");

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
     * The image associated with the customer.
     */
    public function selectImage(?ShopifyCustomerImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer's last name.
     */
    public function selectLastName(): static
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * The customer's last order.
     */
    public function selectLastOrder(?ShopifyCustomerLastOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("lastOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The amount of time since the customer was first added to the store.
     *
     * Example: 'about 12 years'.
     */
    public function selectLifetimeDuration(): static
    {
        $this->selectField("lifetimeDuration");

        return $this;
    }

    /**
     * The customer's locale.
     */
    public function selectLocale(): static
    {
        $this->selectField("locale");

        return $this;
    }

    /**
     * The market that applies to the customer’s default address country. In cases where multiple markets match, this returns the most-specific country region market.
     *
     * @deprecated This `market` field will be removed in a future version of the API.
     */
    public function selectMarket(?ShopifyCustomerMarketArgumentsObject $argsObject = null): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the customer can be merged with another customer.
     */
    public function selectMergeable(?ShopifyCustomerMergeableArgumentsObject $argsObject = null): ShopifyCustomerMergeableQueryObject
    {
        $object = new ShopifyCustomerMergeableQueryObject("mergeable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyCustomerMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of metafield definitions.
     *
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(?ShopifyCustomerMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyCustomerMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique identifier for the customer that's used with Multipass login.
     */
    public function selectMultipassIdentifier(): static
    {
        $this->selectField("multipassIdentifier");

        return $this;
    }

    /**
     * A note about the customer.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The number of orders that the customer has made at the store in their lifetime.
     */
    public function selectNumberOfOrders(): static
    {
        $this->selectField("numberOfOrders");

        return $this;
    }

    /**
     * A list of the customer's orders.
     */
    public function selectOrders(?ShopifyCustomerOrdersArgumentsObject $argsObject = null): ShopifyOrderConnectionQueryObject
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the customer's payment methods.
     */
    public function selectPaymentMethods(?ShopifyCustomerPaymentMethodsArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodConnectionQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodConnectionQueryObject("paymentMethods");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer's phone number.
     *
     * @deprecated Use `defaultPhoneNumber.phoneNumber` instead.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * Possible subscriber states of a customer defined by their subscription contracts.
     */
    public function selectProductSubscriberStatus(): static
    {
        $this->selectField("productSubscriberStatus");

        return $this;
    }

    /**
     * The current SMS marketing state for the customer's phone number.
     *
     * If the customer does not have a phone number, then this property is `null`.
     *
     * @deprecated Use `defaultPhoneNumber.marketingState`, `defaultPhoneNumber.marketingOptInLevel`, `defaultPhoneNumber.marketingUpdatedAt`, `defaultPhoneNumber.marketingCollectedFrom`, and `defaultPhoneNumber.sourceLocation` instead.
     */
    public function selectSmsMarketingConsent(?ShopifyCustomerSmsMarketingConsentArgumentsObject $argsObject = null): ShopifyCustomerSmsMarketingConsentStateQueryObject
    {
        $object = new ShopifyCustomerSmsMarketingConsentStateQueryObject("smsMarketingConsent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The state of the customer's account with the shop.
     *
     * With legacy customer accounts, the state follows the account invite and activation. With customer
     * accounts, signing in changes the state to `ENABLED`.
     */
    public function selectState(): static
    {
        $this->selectField("state");

        return $this;
    }

    /**
     * The statistics for a given customer.
     */
    public function selectStatistics(?ShopifyCustomerStatisticsArgumentsObject $argsObject = null): ShopifyCustomerStatisticsQueryObject
    {
        $object = new ShopifyCustomerStatisticsQueryObject("statistics");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of store credit accounts that belong to the owner resource.
     * A store credit account owner can hold multiple accounts each with a different currency.
     */
    public function selectStoreCreditAccounts(?ShopifyCustomerStoreCreditAccountsArgumentsObject $argsObject = null): ShopifyStoreCreditAccountConnectionQueryObject
    {
        $object = new ShopifyStoreCreditAccountConnectionQueryObject("storeCreditAccounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the customer's subscription contracts.
     */
    public function selectSubscriptionContracts(?ShopifyCustomerSubscriptionContractsArgumentsObject $argsObject = null): ShopifySubscriptionContractConnectionQueryObject
    {
        $object = new ShopifySubscriptionContractConnectionQueryObject("subscriptionContracts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A comma separated list of tags that have been added to the customer.
     */
    public function selectTags(): static
    {
        $this->selectField("tags");

        return $this;
    }

    /**
     * Whether the customer is exempt from being charged taxes on their orders.
     */
    public function selectTaxExempt(): static
    {
        $this->selectField("taxExempt");

        return $this;
    }

    /**
     * The list of tax exemptions applied to the customer.
     */
    public function selectTaxExemptions(): static
    {
        $this->selectField("taxExemptions");

        return $this;
    }

    /**
     * The URL to unsubscribe the customer from the mailing list.
     *
     * @deprecated Use `defaultEmailAddress.marketingUnsubscribeUrl` instead.
     */
    public function selectUnsubscribeUrl(): static
    {
        $this->selectField("unsubscribeUrl");

        return $this;
    }

    /**
     * The date and time when the customer was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * Whether the email address is formatted correctly.
     *
     * Returns `true` when the email is formatted correctly and
     * belongs to an existing domain. This doesn't guarantee that
     * the email address actually exists.
     *
     * @deprecated Use `defaultEmailAddress.validFormat` instead.
     */
    public function selectValidEmailAddress(): static
    {
        $this->selectField("validEmailAddress");

        return $this;
    }

    /**
     * Whether the customer has verified their email address. Defaults to `true` if the customer is created through the Shopify admin or API.
     */
    public function selectVerifiedEmail(): static
    {
        $this->selectField("verifiedEmail");

        return $this;
    }
}
