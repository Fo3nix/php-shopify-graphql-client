<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StaffMemberPrivateData;

class StaffMember
{
    protected $accountType;
    protected $active;
    protected $avatar;
    protected $email;
    protected $exists;
    protected $firstName;
    protected $id;
    protected $initials;
    protected $isShopOwner;
    protected $lastName;
    protected $locale;
    protected $name;
    protected $phone;
    protected $privateData;

    
    /**
     * @return AccountTypeEnumObject
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    
    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    
    /**
     * @return Image
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    
    /**
     * @return bool
     */
    public function getExists()
    {
        return $this->exists;
    }

    
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string[]
     */
    public function getInitials()
    {
        return $this->initials;
    }

    
    /**
     * @return bool
     */
    public function getIsShopOwner()
    {
        return $this->isShopOwner;
    }

    
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    
    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
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
    public function getPhone()
    {
        return $this->phone;
    }

    
    /**
     * @return StaffMemberPrivateData
     */
    public function getPrivateData()
    {
        return $this->privateData;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accountType']) && $data['accountType'] !== null) {
                $instance->accountType = $data['accountType'];
            }
            if (isset($data['active']) && $data['active'] !== null) {
                $instance->active = $data['active'];
            }
            if (isset($data['avatar']) && $data['avatar'] !== null) {
                $instance->avatar = Image::fromArray($data['avatar']);
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = $data['email'];
            }
            if (isset($data['exists']) && $data['exists'] !== null) {
                $instance->exists = $data['exists'];
            }
            if (isset($data['firstName']) && $data['firstName'] !== null) {
                $instance->firstName = $data['firstName'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['initials']) && $data['initials'] !== null) {
                $instance->initials = $data['initials'];
            }
            if (isset($data['isShopOwner']) && $data['isShopOwner'] !== null) {
                $instance->isShopOwner = $data['isShopOwner'];
            }
            if (isset($data['lastName']) && $data['lastName'] !== null) {
                $instance->lastName = $data['lastName'];
            }
            if (isset($data['locale']) && $data['locale'] !== null) {
                $instance->locale = $data['locale'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['privateData']) && $data['privateData'] !== null) {
                $instance->privateData = StaffMemberPrivateData::fromArray($data['privateData']);
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
            if ($this->accountType !== null) {
                $data['accountType'] = $this->accountType;
            }
            if ($this->active !== null) {
                $data['active'] = $this->active;
            }
            if ($this->avatar !== null) {
                $data['avatar'] = $this->avatar->asArray();
            }
            if ($this->email !== null) {
                $data['email'] = $this->email;
            }
            if ($this->exists !== null) {
                $data['exists'] = $this->exists;
            }
            if ($this->firstName !== null) {
                $data['firstName'] = $this->firstName;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->initials !== null) {
                $data['initials'] = $this->initials;
            }
            if ($this->isShopOwner !== null) {
                $data['isShopOwner'] = $this->isShopOwner;
            }
            if ($this->lastName !== null) {
                $data['lastName'] = $this->lastName;
            }
            if ($this->locale !== null) {
                $data['locale'] = $this->locale;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->privateData !== null) {
                $data['privateData'] = $this->privateData->asArray();
            }
            return $data;
        }
}
