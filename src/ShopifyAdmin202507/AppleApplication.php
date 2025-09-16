<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class AppleApplication
{
    protected $appClipApplicationId;
    protected $appClipsEnabled;
    protected $appId;
    protected $id;
    protected $sharedWebCredentialsEnabled;
    protected $universalLinksEnabled;

    
    /**
     * @return string
     */
    public function getAppClipApplicationId()
    {
        return $this->appClipApplicationId;
    }

    
    /**
     * @return bool
     */
    public function getAppClipsEnabled()
    {
        return $this->appClipsEnabled;
    }

    
    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
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
    public function getSharedWebCredentialsEnabled()
    {
        return $this->sharedWebCredentialsEnabled;
    }

    
    /**
     * @return bool
     */
    public function getUniversalLinksEnabled()
    {
        return $this->universalLinksEnabled;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['appClipApplicationId']) && $data['appClipApplicationId'] !== null) {
                $instance->appClipApplicationId = $data['appClipApplicationId'];
            }
            if (isset($data['appClipsEnabled']) && $data['appClipsEnabled'] !== null) {
                $instance->appClipsEnabled = $data['appClipsEnabled'];
            }
            if (isset($data['appId']) && $data['appId'] !== null) {
                $instance->appId = $data['appId'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['sharedWebCredentialsEnabled']) && $data['sharedWebCredentialsEnabled'] !== null) {
                $instance->sharedWebCredentialsEnabled = $data['sharedWebCredentialsEnabled'];
            }
            if (isset($data['universalLinksEnabled']) && $data['universalLinksEnabled'] !== null) {
                $instance->universalLinksEnabled = $data['universalLinksEnabled'];
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
            if ($this->appClipApplicationId !== null) {
                $data['appClipApplicationId'] = $this->appClipApplicationId;
            }
            if ($this->appClipsEnabled !== null) {
                $data['appClipsEnabled'] = $this->appClipsEnabled;
            }
            if ($this->appId !== null) {
                $data['appId'] = $this->appId;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->sharedWebCredentialsEnabled !== null) {
                $data['sharedWebCredentialsEnabled'] = $this->sharedWebCredentialsEnabled;
            }
            if ($this->universalLinksEnabled !== null) {
                $data['universalLinksEnabled'] = $this->universalLinksEnabled;
            }
            return $data;
        }
}
