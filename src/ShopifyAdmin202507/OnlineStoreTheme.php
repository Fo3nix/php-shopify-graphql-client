<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OnlineStoreThemeFileConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Translation;

class OnlineStoreTheme
{
    protected $createdAt;
    protected $files;
    protected $id;
    protected $name;
    protected $prefix;
    protected $processing;
    protected $processingFailed;
    protected $role;
    protected $themeStoreId;
    protected $translations;
    protected $updatedAt;

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return OnlineStoreThemeFileConnection
     */
    public function getFiles()
    {
        return $this->files;
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
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    
    /**
     * @return bool
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    
    /**
     * @return bool
     */
    public function getProcessingFailed()
    {
        return $this->processingFailed;
    }

    
    /**
     * @return ThemeRoleEnumObject
     */
    public function getRole()
    {
        return $this->role;
    }

    
    /**
     * @return int
     */
    public function getThemeStoreId()
    {
        return $this->themeStoreId;
    }

    
    /**
     * @return Translation[]
     */
    public function getTranslations()
    {
        return $this->translations;
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['files']) && $data['files'] !== null) {
                $instance->files = OnlineStoreThemeFileConnection::fromArray($data['files']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['prefix']) && $data['prefix'] !== null) {
                $instance->prefix = $data['prefix'];
            }
            if (isset($data['processing']) && $data['processing'] !== null) {
                $instance->processing = $data['processing'];
            }
            if (isset($data['processingFailed']) && $data['processingFailed'] !== null) {
                $instance->processingFailed = $data['processingFailed'];
            }
            if (isset($data['role']) && $data['role'] !== null) {
                $instance->role = $data['role'];
            }
            if (isset($data['themeStoreId']) && $data['themeStoreId'] !== null) {
                $instance->themeStoreId = $data['themeStoreId'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return Translation::fromArray($item); }, $data['translations']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->files !== null) {
                $data['files'] = $this->files->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->prefix !== null) {
                $data['prefix'] = $this->prefix;
            }
            if ($this->processing !== null) {
                $data['processing'] = $this->processing;
            }
            if ($this->processingFailed !== null) {
                $data['processingFailed'] = $this->processingFailed;
            }
            if ($this->role !== null) {
                $data['role'] = $this->role;
            }
            if ($this->themeStoreId !== null) {
                $data['themeStoreId'] = $this->themeStoreId;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
