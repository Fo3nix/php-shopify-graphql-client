<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A business entity that purchases from the shop as part of B2B commerce. Companies organize multiple locations and contacts who can place orders on behalf of the organization. [`CompanyLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation) objects can have custom pricing through [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) and [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList) configurations.
 */
class ShopifyCompanyQueryObject extends QueryObject
{
    const OBJECT_NAME = "Company";

    /**
     * The number of contacts that belong to the company.
     *
     * @deprecated Use `contactsCount` instead.
     */
    public function selectContactCount(): static
    {
        $this->selectField("contactCount");

        return $this;
    }

    /**
     * The list of roles for the company contacts.
     */
    public function selectContactRoles(?ShopifyCompanyContactRolesArgumentsObject $argsObject = null): ShopifyCompanyContactRoleConnectionQueryObject
    {
        $object = new ShopifyCompanyContactRoleConnectionQueryObject("contactRoles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of contacts in the company.
     */
    public function selectContacts(?ShopifyCompanyContactsArgumentsObject $argsObject = null): ShopifyCompanyContactConnectionQueryObject
    {
        $object = new ShopifyCompanyContactConnectionQueryObject("contacts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of contacts that belong to the company.
     */
    public function selectContactsCount(?ShopifyCompanyContactsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("contactsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company was created in Shopify.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company became the customer.
     */
    public function selectCustomerSince(): static
    {
        $this->selectField("customerSince");

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
     * The role proposed by default for a contact at the company.
     */
    public function selectDefaultRole(?ShopifyCompanyDefaultRoleArgumentsObject $argsObject = null): ShopifyCompanyContactRoleQueryObject
    {
        $object = new ShopifyCompanyContactRoleQueryObject("defaultRole");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of the company's draft orders.
     */
    public function selectDraftOrders(?ShopifyCompanyDraftOrdersArgumentsObject $argsObject = null): ShopifyDraftOrderConnectionQueryObject
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
    public function selectEvents(?ShopifyCompanyEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique externally-supplied ID for the company.
     */
    public function selectExternalId(): static
    {
        $this->selectField("externalId");

        return $this;
    }

    /**
     * Whether the merchant added a timeline comment to the company.
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
     * The lifetime duration of the company, since it became a customer of the shop. Examples: `2 days`, `3 months`, `1 year`.
     */
    public function selectLifetimeDuration(): static
    {
        $this->selectField("lifetimeDuration");

        return $this;
    }

    /**
     * The list of locations in the company.
     */
    public function selectLocations(?ShopifyCompanyLocationsArgumentsObject $argsObject = null): ShopifyCompanyLocationConnectionQueryObject
    {
        $object = new ShopifyCompanyLocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of locations that belong to the company.
     */
    public function selectLocationsCount(?ShopifyCompanyLocationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The main contact for the company.
     */
    public function selectMainContact(?ShopifyCompanyMainContactArgumentsObject $argsObject = null): ShopifyCompanyContactQueryObject
    {
        $object = new ShopifyCompanyContactQueryObject("mainContact");
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
    public function selectMetafield(ShopifyCompanyMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
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
    public function selectMetafieldDefinitions(?ShopifyCompanyMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
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
    public function selectMetafields(?ShopifyCompanyMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the company.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * A note about the company.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The list of the company's orders.
     */
    public function selectOrders(?ShopifyCompanyOrdersArgumentsObject $argsObject = null): ShopifyOrderConnectionQueryObject
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of orders placed for this company, across all its locations.
     */
    public function selectOrdersCount(?ShopifyCompanyOrdersCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("ordersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount spent by this company, across all its locations.
     */
    public function selectTotalSpent(?ShopifyCompanyTotalSpentArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalSpent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company was last modified.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
