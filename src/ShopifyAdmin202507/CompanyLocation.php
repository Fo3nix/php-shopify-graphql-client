<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CompanyAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\BuyerExperienceConfiguration;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CatalogConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Company;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Market;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CompanyContactRoleAssignmentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CompanyLocationStaffMemberAssignmentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CompanyLocationTaxSettings;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class CompanyLocation
{
    protected $billingAddress;
    protected $buyerExperienceConfiguration;
    protected $catalogs;
    protected $catalogsCount;
    protected $company;
    protected $createdAt;
    protected $currency;
    protected $defaultCursor;
    protected $draftOrders;
    protected $events;
    protected $externalId;
    protected $hasTimelineComment;
    protected $id;
    protected $inCatalog;
    protected $locale;
    protected $market;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $name;
    protected $note;
    protected $orderCount;
    protected $orders;
    protected $ordersCount;
    protected $phone;
    protected $roleAssignments;
    protected $shippingAddress;
    protected $staffMemberAssignments;
    protected $taxExemptions;
    protected $taxRegistrationId;
    protected $taxSettings;
    protected $totalSpent;
    protected $updatedAt;

    
    /**
     * @return CompanyAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    
    /**
     * @return BuyerExperienceConfiguration
     */
    public function getBuyerExperienceConfiguration()
    {
        return $this->buyerExperienceConfiguration;
    }

    
    /**
     * @return CatalogConnection
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }

    
    /**
     * @return Count
     */
    public function getCatalogsCount()
    {
        return $this->catalogsCount;
    }

    
    /**
     * @return Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return CurrencyCodeEnumObject
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    
    /**
     * @return string
     */
    public function getDefaultCursor()
    {
        return $this->defaultCursor;
    }

    
    /**
     * @return DraftOrderConnection
     */
    public function getDraftOrders()
    {
        return $this->draftOrders;
    }

    
    /**
     * @return EventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    
    /**
     * @return bool
     */
    public function getHasTimelineComment()
    {
        return $this->hasTimelineComment;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getInCatalog()
    {
        return $this->inCatalog;
    }

    
    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    
    /**
     * @return Market
     */
    public function getMarket()
    {
        return $this->market;
    }

    
    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return MetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    
    /**
     * @return int
     */
    public function getOrderCount()
    {
        return $this->orderCount;
    }

    
    /**
     * @return OrderConnection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    
    /**
     * @return Count
     */
    public function getOrdersCount()
    {
        return $this->ordersCount;
    }

    
    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    
    /**
     * @return CompanyContactRoleAssignmentConnection
     */
    public function getRoleAssignments()
    {
        return $this->roleAssignments;
    }

    
    /**
     * @return CompanyAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    
    /**
     * @return CompanyLocationStaffMemberAssignmentConnection
     */
    public function getStaffMemberAssignments()
    {
        return $this->staffMemberAssignments;
    }

    
    /**
     * @return TaxExemptionEnumObject[]
     */
    public function getTaxExemptions()
    {
        return $this->taxExemptions;
    }

    
    /**
     * @return string
     */
    public function getTaxRegistrationId()
    {
        return $this->taxRegistrationId;
    }

    
    /**
     * @return CompanyLocationTaxSettings
     */
    public function getTaxSettings()
    {
        return $this->taxSettings;
    }

    
    /**
     * @return MoneyV2
     */
    public function getTotalSpent()
    {
        return $this->totalSpent;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = CompanyAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['buyerExperienceConfiguration']) && $data['buyerExperienceConfiguration'] !== null) {
                $instance->buyerExperienceConfiguration = BuyerExperienceConfiguration::fromArray($data['buyerExperienceConfiguration']);
            }
            if (isset($data['catalogs']) && $data['catalogs'] !== null) {
                $instance->catalogs = CatalogConnection::fromArray($data['catalogs']);
            }
            if (isset($data['catalogsCount']) && $data['catalogsCount'] !== null) {
                $instance->catalogsCount = Count::fromArray($data['catalogsCount']);
            }
            if (isset($data['company']) && $data['company'] !== null) {
                $instance->company = Company::fromArray($data['company']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currency']) && $data['currency'] !== null) {
                $instance->currency = $data['currency'];
            }
            if (isset($data['defaultCursor']) && $data['defaultCursor'] !== null) {
                $instance->defaultCursor = $data['defaultCursor'];
            }
            if (isset($data['draftOrders']) && $data['draftOrders'] !== null) {
                $instance->draftOrders = DraftOrderConnection::fromArray($data['draftOrders']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = EventConnection::fromArray($data['events']);
            }
            if (isset($data['externalId']) && $data['externalId'] !== null) {
                $instance->externalId = $data['externalId'];
            }
            if (isset($data['hasTimelineComment']) && $data['hasTimelineComment'] !== null) {
                $instance->hasTimelineComment = $data['hasTimelineComment'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inCatalog']) && $data['inCatalog'] !== null) {
                $instance->inCatalog = $data['inCatalog'];
            }
            if (isset($data['locale']) && $data['locale'] !== null) {
                $instance->locale = $data['locale'];
            }
            if (isset($data['market']) && $data['market'] !== null) {
                $instance->market = Market::fromArray($data['market']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = MetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['orderCount']) && $data['orderCount'] !== null) {
                $instance->orderCount = $data['orderCount'];
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = OrderConnection::fromArray($data['orders']);
            }
            if (isset($data['ordersCount']) && $data['ordersCount'] !== null) {
                $instance->ordersCount = Count::fromArray($data['ordersCount']);
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['roleAssignments']) && $data['roleAssignments'] !== null) {
                $instance->roleAssignments = CompanyContactRoleAssignmentConnection::fromArray($data['roleAssignments']);
            }
            if (isset($data['shippingAddress']) && $data['shippingAddress'] !== null) {
                $instance->shippingAddress = CompanyAddress::fromArray($data['shippingAddress']);
            }
            if (isset($data['staffMemberAssignments']) && $data['staffMemberAssignments'] !== null) {
                $instance->staffMemberAssignments = CompanyLocationStaffMemberAssignmentConnection::fromArray($data['staffMemberAssignments']);
            }
            if (isset($data['taxExemptions']) && $data['taxExemptions'] !== null) {
                $instance->taxExemptions = $data['taxExemptions'];
            }
            if (isset($data['taxRegistrationId']) && $data['taxRegistrationId'] !== null) {
                $instance->taxRegistrationId = $data['taxRegistrationId'];
            }
            if (isset($data['taxSettings']) && $data['taxSettings'] !== null) {
                $instance->taxSettings = CompanyLocationTaxSettings::fromArray($data['taxSettings']);
            }
            if (isset($data['totalSpent']) && $data['totalSpent'] !== null) {
                $instance->totalSpent = MoneyV2::fromArray($data['totalSpent']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->buyerExperienceConfiguration !== null) {
                $data['buyerExperienceConfiguration'] = $this->buyerExperienceConfiguration->asArray();
            }
            if ($this->catalogs !== null) {
                $data['catalogs'] = $this->catalogs->asArray();
            }
            if ($this->catalogsCount !== null) {
                $data['catalogsCount'] = $this->catalogsCount->asArray();
            }
            if ($this->company !== null) {
                $data['company'] = $this->company->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currency !== null) {
                $data['currency'] = $this->currency;
            }
            if ($this->defaultCursor !== null) {
                $data['defaultCursor'] = $this->defaultCursor;
            }
            if ($this->draftOrders !== null) {
                $data['draftOrders'] = $this->draftOrders->asArray();
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->externalId !== null) {
                $data['externalId'] = $this->externalId;
            }
            if ($this->hasTimelineComment !== null) {
                $data['hasTimelineComment'] = $this->hasTimelineComment;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inCatalog !== null) {
                $data['inCatalog'] = $this->inCatalog;
            }
            if ($this->locale !== null) {
                $data['locale'] = $this->locale;
            }
            if ($this->market !== null) {
                $data['market'] = $this->market->asArray();
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->orderCount !== null) {
                $data['orderCount'] = $this->orderCount;
            }
            if ($this->orders !== null) {
                $data['orders'] = $this->orders->asArray();
            }
            if ($this->ordersCount !== null) {
                $data['ordersCount'] = $this->ordersCount->asArray();
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->roleAssignments !== null) {
                $data['roleAssignments'] = $this->roleAssignments->asArray();
            }
            if ($this->shippingAddress !== null) {
                $data['shippingAddress'] = $this->shippingAddress->asArray();
            }
            if ($this->staffMemberAssignments !== null) {
                $data['staffMemberAssignments'] = $this->staffMemberAssignments->asArray();
            }
            if ($this->taxExemptions !== null) {
                $data['taxExemptions'] = $this->taxExemptions;
            }
            if ($this->taxRegistrationId !== null) {
                $data['taxRegistrationId'] = $this->taxRegistrationId;
            }
            if ($this->taxSettings !== null) {
                $data['taxSettings'] = $this->taxSettings->asArray();
            }
            if ($this->totalSpent !== null) {
                $data['totalSpent'] = $this->totalSpent->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
