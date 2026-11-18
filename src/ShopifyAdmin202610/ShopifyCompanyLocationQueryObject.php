<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A location or branch of a [`Company`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Company) that's a customer of the shop. Company locations enable B2B customers to manage multiple branches with distinct billing and shipping addresses, tax settings, and checkout configurations.
 *
 * Each location can have its own [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) objects that determine which products are published and their pricing. The [`BuyerExperienceConfiguration`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BuyerExperienceConfiguration) determines checkout behavior including [`PaymentTerms`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PaymentTerms), and whether orders require merchant review. B2B customers select which location they're purchasing for, which determines the applicable catalogs, pricing, [`TaxExemption`](https://shopify.dev/docs/api/admin-graphql/latest/enums/TaxExemption) values, and checkout settings for their [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) objects.
 */
class ShopifyCompanyLocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocation";

    /**
     * The address used as billing address for the location.
     */
    public function selectBillingAddress(?ShopifyCompanyLocationBillingAddressArgumentsObject $argsObject = null): ShopifyCompanyAddressQueryObject
    {
        $object = new ShopifyCompanyAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The configuration for the buyer's B2B checkout.
     */
    public function selectBuyerExperienceConfiguration(?ShopifyCompanyLocationBuyerExperienceConfigurationArgumentsObject $argsObject = null): ShopifyBuyerExperienceConfigurationQueryObject
    {
        $object = new ShopifyBuyerExperienceConfigurationQueryObject("buyerExperienceConfiguration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of catalogs associated with the company location.
     */
    public function selectCatalogs(?ShopifyCompanyLocationCatalogsArgumentsObject $argsObject = null): ShopifyCatalogConnectionQueryObject
    {
        $object = new ShopifyCatalogConnectionQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of catalogs associated with the company location. Limited to a maximum of 10000 by default.
     */
    public function selectCatalogsCount(?ShopifyCompanyLocationCatalogsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("catalogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The company that the company location belongs to.
     */
    public function selectCompany(?ShopifyCompanyLocationCompanyArgumentsObject $argsObject = null): ShopifyCompanyQueryObject
    {
        $object = new ShopifyCompanyQueryObject("company");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company location was created in Shopify.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The location's currency based on the shipping address. If the shipping address is empty, then the value is the shop's primary market.
     */
    public function selectCurrency(): static
    {
        $this->selectField("currency");

        return $this;
    }

    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     */
    public function selectDefaultCursor(): static
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    /**
     * The list of draft orders for the company location.
     */
    public function selectDraftOrders(?ShopifyCompanyLocationDraftOrdersArgumentsObject $argsObject = null): ShopifyDraftOrderConnectionQueryObject
    {
        $object = new ShopifyDraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The paginated list of events associated with the host subject.
     */
    public function selectEvents(?ShopifyCompanyLocationEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique externally-supplied ID for the company location.
     */
    public function selectExternalId(): static
    {
        $this->selectField("externalId");

        return $this;
    }

    /**
     * Whether the merchant added a timeline comment to the company location.
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
     * Whether the company location is assigned a specific catalog.
     */
    public function selectInCatalog(): static
    {
        $this->selectField("inCatalog");

        return $this;
    }

    /**
     * The preferred locale of the company location.
     */
    public function selectLocale(): static
    {
        $this->selectField("locale");

        return $this;
    }

    /**
     * The market that applies to the location's shipping address country. In cases where multiple markets match, this returns the most-specific country region market. If the shipping address is empty, then the value is the shop's backup region market.
     *
     * @deprecated This `market` field will be removed in a future version of the API.
     */
    public function selectMarket(?ShopifyCompanyLocationMarketArgumentsObject $argsObject = null): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("market");
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
    public function selectMetafield(ShopifyCompanyLocationMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
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
    public function selectMetafieldDefinitions(?ShopifyCompanyLocationMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
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
    public function selectMetafields(?ShopifyCompanyLocationMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the company location.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * A note about the company location.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The total number of orders placed for the location.
     *
     * @deprecated Use `ordersCount` instead.
     */
    public function selectOrderCount(): static
    {
        $this->selectField("orderCount");

        return $this;
    }

    /**
     * The list of orders for the company location.
     */
    public function selectOrders(?ShopifyCompanyLocationOrdersArgumentsObject $argsObject = null): ShopifyOrderConnectionQueryObject
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of orders placed for the location.
     */
    public function selectOrdersCount(?ShopifyCompanyLocationOrdersCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("ordersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The phone number of the company location.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * The list of roles assigned to the company location.
     */
    public function selectRoleAssignments(?ShopifyCompanyLocationRoleAssignmentsArgumentsObject $argsObject = null): ShopifyCompanyContactRoleAssignmentConnectionQueryObject
    {
        $object = new ShopifyCompanyContactRoleAssignmentConnectionQueryObject("roleAssignments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The address used as shipping address for the location.
     */
    public function selectShippingAddress(?ShopifyCompanyLocationShippingAddressArgumentsObject $argsObject = null): ShopifyCompanyAddressQueryObject
    {
        $object = new ShopifyCompanyAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of staff members assigned to the company location.
     */
    public function selectStaffMemberAssignments(?ShopifyCompanyLocationStaffMemberAssignmentsArgumentsObject $argsObject = null): ShopifyCompanyLocationStaffMemberAssignmentConnectionQueryObject
    {
        $object = new ShopifyCompanyLocationStaffMemberAssignmentConnectionQueryObject("staffMemberAssignments");
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
    public function selectStoreCreditAccounts(?ShopifyCompanyLocationStoreCreditAccountsArgumentsObject $argsObject = null): ShopifyStoreCreditAccountConnectionQueryObject
    {
        $object = new ShopifyStoreCreditAccountConnectionQueryObject("storeCreditAccounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of tax exemptions applied to the location.
     *
     * @deprecated Use `taxSettings` instead.
     */
    public function selectTaxExemptions(): static
    {
        $this->selectField("taxExemptions");

        return $this;
    }

    /**
     * The tax registration ID for the company location.
     *
     * @deprecated Use `taxSettings` instead.
     */
    public function selectTaxRegistrationId(): static
    {
        $this->selectField("taxRegistrationId");

        return $this;
    }

    /**
     * The tax settings for the company location.
     */
    public function selectTaxSettings(?ShopifyCompanyLocationTaxSettingsArgumentsObject $argsObject = null): ShopifyCompanyLocationTaxSettingsQueryObject
    {
        $object = new ShopifyCompanyLocationTaxSettingsQueryObject("taxSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount spent by the location.
     */
    public function selectTotalSpent(?ShopifyCompanyLocationTotalSpentArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalSpent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company location was last modified.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
