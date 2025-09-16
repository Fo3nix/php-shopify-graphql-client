<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyLocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocation";

    public function selectBillingAddress(CompanyLocationBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new CompanyAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBuyerExperienceConfiguration(CompanyLocationBuyerExperienceConfigurationArgumentsObject $argsObject = null)
    {
        $object = new BuyerExperienceConfigurationQueryObject("buyerExperienceConfiguration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCatalogs(CompanyLocationCatalogsArgumentsObject $argsObject = null)
    {
        $object = new CatalogConnectionQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCatalogsCount(CompanyLocationCatalogsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("catalogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompany(CompanyLocationCompanyArgumentsObject $argsObject = null)
    {
        $object = new CompanyQueryObject("company");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCurrency()
    {
        $this->selectField("currency");

        return $this;
    }

    public function selectDefaultCursor()
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    public function selectDraftOrders(CompanyLocationDraftOrdersArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEvents(CompanyLocationEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExternalId()
    {
        $this->selectField("externalId");

        return $this;
    }

    public function selectHasTimelineComment()
    {
        $this->selectField("hasTimelineComment");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInCatalog()
    {
        $this->selectField("inCatalog");

        return $this;
    }

    public function selectLocale()
    {
        $this->selectField("locale");

        return $this;
    }

    /**
     * @deprecated This `market` field will be removed in a future version of the API.
     */
    public function selectMarket(CompanyLocationMarketArgumentsObject $argsObject = null)
    {
        $object = new MarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(CompanyLocationMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(CompanyLocationMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(CompanyLocationMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * @deprecated Use `ordersCount` instead.
     */
    public function selectOrderCount()
    {
        $this->selectField("orderCount");

        return $this;
    }

    public function selectOrders(CompanyLocationOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrdersCount(CompanyLocationOrdersCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("ordersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPhone()
    {
        $this->selectField("phone");

        return $this;
    }

    public function selectRoleAssignments(CompanyLocationRoleAssignmentsArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactRoleAssignmentConnectionQueryObject("roleAssignments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingAddress(CompanyLocationShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new CompanyAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStaffMemberAssignments(CompanyLocationStaffMemberAssignmentsArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationStaffMemberAssignmentConnectionQueryObject("staffMemberAssignments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `taxSettings` instead.
     */
    public function selectTaxExemptions()
    {
        $this->selectField("taxExemptions");

        return $this;
    }

    /**
     * @deprecated Use `taxSettings` instead.
     */
    public function selectTaxRegistrationId()
    {
        $this->selectField("taxRegistrationId");

        return $this;
    }

    public function selectTaxSettings(CompanyLocationTaxSettingsArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationTaxSettingsQueryObject("taxSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalSpent(CompanyLocationTotalSpentArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalSpent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
