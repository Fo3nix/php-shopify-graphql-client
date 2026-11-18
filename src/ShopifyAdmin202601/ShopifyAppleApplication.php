<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * The Apple mobile platform application.
 */
class ShopifyAppleApplication
{
    protected $appClipApplicationId;
    protected $appClipsEnabled;
    protected $appId;
    protected $id;
    protected $sharedWebCredentialsEnabled;
    protected $universalLinksEnabled;

    
    /**
     * The iOS App Clip application ID.
     *
     * @return string
     */
    public function getAppClipApplicationId(): ?string
    {
        return $this->appClipApplicationId;
    }

    
    /**
     * Whether iOS App Clips are enabled for this app.
     *
     * @return bool
     */
    public function getAppClipsEnabled(): ?bool
    {
        return $this->appClipsEnabled;
    }

    
    /**
     * The iOS App ID.
     *
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Whether iOS shared web credentials are enabled for this app.
     *
     * @return bool
     */
    public function getSharedWebCredentialsEnabled(): ?bool
    {
        return $this->sharedWebCredentialsEnabled;
    }

    
    /**
     * Whether iOS Universal Links are supported by this app.
     *
     * @return bool
     */
    public function getUniversalLinksEnabled(): ?bool
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
