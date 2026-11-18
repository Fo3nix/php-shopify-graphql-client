<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * The Android mobile platform application.
 */
class ShopifyAndroidApplication
{
    protected $appLinksEnabled;
    protected $applicationId;
    protected $id;
    protected $sha256CertFingerprints;

    
    /**
     * Whether Android App Links are supported by this app.
     *
     * @return bool
     */
    public function getAppLinksEnabled(): ?bool
    {
        return $this->appLinksEnabled;
    }

    
    /**
     * The Android application ID.
     *
     * @return string
     */
    public function getApplicationId(): ?string
    {
        return $this->applicationId;
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
     * The SHA256 fingerprints of the app's signing certificate.
     *
     * @return string[]
     */
    public function getSha256CertFingerprints(): ?array
    {
        return $this->sha256CertFingerprints;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['appLinksEnabled']) && $data['appLinksEnabled'] !== null) {
                $instance->appLinksEnabled = $data['appLinksEnabled'];
            }
            if (isset($data['applicationId']) && $data['applicationId'] !== null) {
                $instance->applicationId = $data['applicationId'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['sha256CertFingerprints']) && $data['sha256CertFingerprints'] !== null) {
                $instance->sha256CertFingerprints = $data['sha256CertFingerprints'];
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
            if ($this->appLinksEnabled !== null) {
                $data['appLinksEnabled'] = $this->appLinksEnabled;
            }
            if ($this->applicationId !== null) {
                $data['applicationId'] = $this->applicationId;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->sha256CertFingerprints !== null) {
                $data['sha256CertFingerprints'] = $this->sha256CertFingerprints;
            }
            return $data;
        }
}
