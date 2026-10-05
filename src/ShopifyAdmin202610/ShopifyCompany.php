<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyContactRoleConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyContactConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyContactRole;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDraftOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyLocationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyContact;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

class ShopifyCompany
{
    protected $contactCount;
    protected $contactRoles;
    protected $contacts;
    protected $contactsCount;
    protected $createdAt;
    protected $customerSince;
    protected $defaultCursor;
    protected $defaultRole;
    protected $draftOrders;
    protected $events;
    protected $externalId;
    protected $hasTimelineComment;
    protected $id;
    protected $lifetimeDuration;
    protected $locations;
    protected $locationsCount;
    protected $mainContact;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $name;
    protected $note;
    protected $orders;
    protected $ordersCount;
    protected $totalSpent;
    protected $updatedAt;

    
    /**
     * @return int
     */
    public function getContactCount()
    {
        return $this->contactCount;
    }

    
    /**
     * @return ShopifyCompanyContactRoleConnection
     */
    public function getContactRoles()
    {
        return $this->contactRoles;
    }

    
    /**
     * @return ShopifyCompanyContactConnection
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getContactsCount()
    {
        return $this->contactsCount;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return Carbon
     */
    public function getCustomerSince()
    {
        return $this->customerSince;
    }

    
    /**
     * @return string
     */
    public function getDefaultCursor()
    {
        return $this->defaultCursor;
    }

    
    /**
     * @return ShopifyCompanyContactRole
     */
    public function getDefaultRole()
    {
        return $this->defaultRole;
    }

    
    /**
     * @return ShopifyDraftOrderConnection
     */
    public function getDraftOrders()
    {
        return $this->draftOrders;
    }

    
    /**
     * @return ShopifyEventConnection
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
     * @return string
     */
    public function getLifetimeDuration()
    {
        return $this->lifetimeDuration;
    }

    
    /**
     * @return ShopifyCompanyLocationConnection
     */
    public function getLocations()
    {
        return $this->locations;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getLocationsCount()
    {
        return $this->locationsCount;
    }

    
    /**
     * @return ShopifyCompanyContact
     */
    public function getMainContact()
    {
        return $this->mainContact;
    }

    
    /**
     * @return ShopifyMetafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return ShopifyMetafieldConnection
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
     * @return ShopifyOrderConnection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getOrdersCount()
    {
        return $this->ordersCount;
    }

    
    /**
     * @return ShopifyMoneyV2
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
            if (isset($data['contactCount']) && $data['contactCount'] !== null) {
                $instance->contactCount = $data['contactCount'];
            }
            if (isset($data['contactRoles']) && $data['contactRoles'] !== null) {
                $instance->contactRoles = ShopifyCompanyContactRoleConnection::fromArray($data['contactRoles']);
            }
            if (isset($data['contacts']) && $data['contacts'] !== null) {
                $instance->contacts = ShopifyCompanyContactConnection::fromArray($data['contacts']);
            }
            if (isset($data['contactsCount']) && $data['contactsCount'] !== null) {
                $instance->contactsCount = ShopifyCount::fromArray($data['contactsCount']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customerSince']) && $data['customerSince'] !== null) {
                $instance->customerSince = new Carbon($data['customerSince']);
            }
            if (isset($data['defaultCursor']) && $data['defaultCursor'] !== null) {
                $instance->defaultCursor = $data['defaultCursor'];
            }
            if (isset($data['defaultRole']) && $data['defaultRole'] !== null) {
                $instance->defaultRole = ShopifyCompanyContactRole::fromArray($data['defaultRole']);
            }
            if (isset($data['draftOrders']) && $data['draftOrders'] !== null) {
                $instance->draftOrders = ShopifyDraftOrderConnection::fromArray($data['draftOrders']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
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
            if (isset($data['lifetimeDuration']) && $data['lifetimeDuration'] !== null) {
                $instance->lifetimeDuration = $data['lifetimeDuration'];
            }
            if (isset($data['locations']) && $data['locations'] !== null) {
                $instance->locations = ShopifyCompanyLocationConnection::fromArray($data['locations']);
            }
            if (isset($data['locationsCount']) && $data['locationsCount'] !== null) {
                $instance->locationsCount = ShopifyCount::fromArray($data['locationsCount']);
            }
            if (isset($data['mainContact']) && $data['mainContact'] !== null) {
                $instance->mainContact = ShopifyCompanyContact::fromArray($data['mainContact']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = ShopifyOrderConnection::fromArray($data['orders']);
            }
            if (isset($data['ordersCount']) && $data['ordersCount'] !== null) {
                $instance->ordersCount = ShopifyCount::fromArray($data['ordersCount']);
            }
            if (isset($data['totalSpent']) && $data['totalSpent'] !== null) {
                $instance->totalSpent = ShopifyMoneyV2::fromArray($data['totalSpent']);
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
            if ($this->contactCount !== null) {
                $data['contactCount'] = $this->contactCount;
            }
            if ($this->contactRoles !== null) {
                $data['contactRoles'] = $this->contactRoles->asArray();
            }
            if ($this->contacts !== null) {
                $data['contacts'] = $this->contacts->asArray();
            }
            if ($this->contactsCount !== null) {
                $data['contactsCount'] = $this->contactsCount->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->customerSince !== null) {
                $data['customerSince'] = $this->customerSince->toIso8601String();
            }
            if ($this->defaultCursor !== null) {
                $data['defaultCursor'] = $this->defaultCursor;
            }
            if ($this->defaultRole !== null) {
                $data['defaultRole'] = $this->defaultRole->asArray();
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
            if ($this->lifetimeDuration !== null) {
                $data['lifetimeDuration'] = $this->lifetimeDuration;
            }
            if ($this->locations !== null) {
                $data['locations'] = $this->locations->asArray();
            }
            if ($this->locationsCount !== null) {
                $data['locationsCount'] = $this->locationsCount->asArray();
            }
            if ($this->mainContact !== null) {
                $data['mainContact'] = $this->mainContact->asArray();
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
            if ($this->orders !== null) {
                $data['orders'] = $this->orders->asArray();
            }
            if ($this->ordersCount !== null) {
                $data['ordersCount'] = $this->ordersCount->asArray();
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
