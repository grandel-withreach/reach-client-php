<?php
/**
 * Session
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Reach's Drop-In API
 *
 * API definition for Reach's Drop-In API's. This version of the OpenAPI is intended for use with code generation tools.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Session Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Session implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Session';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'session_id' => 'string',
        'state' => 'string',
        'merchant_reference' => 'string',
        'currency' => 'string',
        'total_amount' => 'float',
        'items' => '\OpenAPI\Client\Model\Item[]',
        'auto_capture' => 'bool',
        'complete_url' => 'string',
        'cancel_url' => 'string',
        'via_agent' => 'bool',
        'billing_profile_id' => 'string',
        'billing_profile_reference' => 'string',
        'billing_profile' => '\OpenAPI\Client\Model\BillingProfile',
        'shipping_details' => '\OpenAPI\Client\Model\ShippingDetails',
        'tax_amount' => 'float',
        'order' => '\OpenAPI\Client\Model\Order',
        'discounts' => '\OpenAPI\Client\Model\Discount[]',
        'rate_offer_id' => 'string',
        'meta' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'session_id' => 'uuid',
        'state' => null,
        'merchant_reference' => null,
        'currency' => null,
        'total_amount' => 'float',
        'items' => null,
        'auto_capture' => null,
        'complete_url' => null,
        'cancel_url' => null,
        'via_agent' => null,
        'billing_profile_id' => 'uuid',
        'billing_profile_reference' => null,
        'billing_profile' => null,
        'shipping_details' => null,
        'tax_amount' => null,
        'order' => null,
        'discounts' => null,
        'rate_offer_id' => 'uuid',
        'meta' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'session_id' => 'SessionId',
        'state' => 'State',
        'merchant_reference' => 'MerchantReference',
        'currency' => 'Currency',
        'total_amount' => 'TotalAmount',
        'items' => 'Items',
        'auto_capture' => 'AutoCapture',
        'complete_url' => 'CompleteUrl',
        'cancel_url' => 'CancelUrl',
        'via_agent' => 'ViaAgent',
        'billing_profile_id' => 'BillingProfileId',
        'billing_profile_reference' => 'BillingProfileReference',
        'billing_profile' => 'BillingProfile',
        'shipping_details' => 'ShippingDetails',
        'tax_amount' => 'TaxAmount',
        'order' => 'Order',
        'discounts' => 'Discounts',
        'rate_offer_id' => 'RateOfferId',
        'meta' => 'Meta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'session_id' => 'setSessionId',
        'state' => 'setState',
        'merchant_reference' => 'setMerchantReference',
        'currency' => 'setCurrency',
        'total_amount' => 'setTotalAmount',
        'items' => 'setItems',
        'auto_capture' => 'setAutoCapture',
        'complete_url' => 'setCompleteUrl',
        'cancel_url' => 'setCancelUrl',
        'via_agent' => 'setViaAgent',
        'billing_profile_id' => 'setBillingProfileId',
        'billing_profile_reference' => 'setBillingProfileReference',
        'billing_profile' => 'setBillingProfile',
        'shipping_details' => 'setShippingDetails',
        'tax_amount' => 'setTaxAmount',
        'order' => 'setOrder',
        'discounts' => 'setDiscounts',
        'rate_offer_id' => 'setRateOfferId',
        'meta' => 'setMeta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'session_id' => 'getSessionId',
        'state' => 'getState',
        'merchant_reference' => 'getMerchantReference',
        'currency' => 'getCurrency',
        'total_amount' => 'getTotalAmount',
        'items' => 'getItems',
        'auto_capture' => 'getAutoCapture',
        'complete_url' => 'getCompleteUrl',
        'cancel_url' => 'getCancelUrl',
        'via_agent' => 'getViaAgent',
        'billing_profile_id' => 'getBillingProfileId',
        'billing_profile_reference' => 'getBillingProfileReference',
        'billing_profile' => 'getBillingProfile',
        'shipping_details' => 'getShippingDetails',
        'tax_amount' => 'getTaxAmount',
        'order' => 'getOrder',
        'discounts' => 'getDiscounts',
        'rate_offer_id' => 'getRateOfferId',
        'meta' => 'getMeta'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const STATE_CREATED = 'CREATED';
    public const STATE_REDIRECTED = 'REDIRECTED';
    public const STATE_COMPLETED = 'COMPLETED';
    public const STATE_CANCELLED = 'CANCELLED';
    public const STATE_FAILED = 'FAILED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_CREATED,
            self::STATE_REDIRECTED,
            self::STATE_COMPLETED,
            self::STATE_CANCELLED,
            self::STATE_FAILED,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['session_id'] = $data['session_id'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['merchant_reference'] = $data['merchant_reference'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['auto_capture'] = $data['auto_capture'] ?? null;
        $this->container['complete_url'] = $data['complete_url'] ?? null;
        $this->container['cancel_url'] = $data['cancel_url'] ?? null;
        $this->container['via_agent'] = $data['via_agent'] ?? null;
        $this->container['billing_profile_id'] = $data['billing_profile_id'] ?? null;
        $this->container['billing_profile_reference'] = $data['billing_profile_reference'] ?? null;
        $this->container['billing_profile'] = $data['billing_profile'] ?? null;
        $this->container['shipping_details'] = $data['shipping_details'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['rate_offer_id'] = $data['rate_offer_id'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['session_id']) && (mb_strlen($this->container['session_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'session_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['session_id']) && (mb_strlen($this->container['session_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'session_id', the character length must be bigger than or equal to 36.";
        }

        if (!is_null($this->container['session_id']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['session_id'])) {
            $invalidProperties[] = "invalid value for 'session_id', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['merchant_reference'] === null) {
            $invalidProperties[] = "'merchant_reference' can't be null";
        }
        if ((mb_strlen($this->container['merchant_reference']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant_reference', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['auto_capture'] === null) {
            $invalidProperties[] = "'auto_capture' can't be null";
        }
        if ($this->container['complete_url'] === null) {
            $invalidProperties[] = "'complete_url' can't be null";
        }
        if ($this->container['cancel_url'] === null) {
            $invalidProperties[] = "'cancel_url' can't be null";
        }
        if (!is_null($this->container['billing_profile_id']) && (mb_strlen($this->container['billing_profile_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'billing_profile_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['billing_profile_id']) && (mb_strlen($this->container['billing_profile_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'billing_profile_id', the character length must be bigger than or equal to 36.";
        }

        if (!is_null($this->container['billing_profile_id']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['billing_profile_id'])) {
            $invalidProperties[] = "invalid value for 'billing_profile_id', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
        }

        if (!is_null($this->container['rate_offer_id']) && (mb_strlen($this->container['rate_offer_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'rate_offer_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['rate_offer_id']) && (mb_strlen($this->container['rate_offer_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'rate_offer_id', the character length must be bigger than or equal to 36.";
        }

        if (!is_null($this->container['rate_offer_id']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['rate_offer_id'])) {
            $invalidProperties[] = "invalid value for 'rate_offer_id', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets session_id
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string|null $session_id Returned UUID representing the Session
     *
     * @return self
     */
    public function setSessionId($session_id)
    {
        if (!is_null($session_id) && (mb_strlen($session_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $session_id when calling Session., must be smaller than or equal to 36.');
        }
        if (!is_null($session_id) && (mb_strlen($session_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $session_id when calling Session., must be bigger than or equal to 36.');
        }
        if (!is_null($session_id) && (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $session_id))) {
            throw new \InvalidArgumentException("invalid value for $session_id when calling Session., must conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.");
        }

        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state Returned state of the Session.
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets merchant_reference
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->container['merchant_reference'];
    }

    /**
     * Sets merchant_reference
     *
     * @param string $merchant_reference Unique identifier provided by merchant.
     *
     * @return self
     */
    public function setMerchantReference($merchant_reference)
    {

        if ((mb_strlen($merchant_reference) < 1)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference when calling Session., must be bigger than or equal to 1.');
        }

        $this->container['merchant_reference'] = $merchant_reference;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Three-character ISO-4217 currency code used to process the payment.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float|null $total_amount Sum of all item amounts, TaxAmount, ShippingDetails.ShippingAmount and ShippingDetails.DutyAmount, minus the total of all Discounts
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\Item[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\Item[] $items List of items to be paid. At least one Item must be supplied.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets auto_capture
     *
     * @return bool
     */
    public function getAutoCapture()
    {
        return $this->container['auto_capture'];
    }

    /**
     * Sets auto_capture
     *
     * @param bool $auto_capture Indicator used to determine if an Order is auto captured after authorization.
     *
     * @return self
     */
    public function setAutoCapture($auto_capture)
    {
        $this->container['auto_capture'] = $auto_capture;

        return $this;
    }

    /**
     * Gets complete_url
     *
     * @return string
     */
    public function getCompleteUrl()
    {
        return $this->container['complete_url'];
    }

    /**
     * Sets complete_url
     *
     * @param string $complete_url Merchant URL to redirect a user to upon completion at a third party payment processor. This may contain \"{SessionId}\" anywhere in the string to have the SessionId embedded in the url.
     *
     * @return self
     */
    public function setCompleteUrl($complete_url)
    {
        $this->container['complete_url'] = $complete_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string $cancel_url Merchant URL to redirect a user to after cancelling on a third party payment processor. This may contain \"{SessionId}\" anywhere in the string to have the SessionId embedded in the url.
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets via_agent
     *
     * @return bool|null
     */
    public function getViaAgent()
    {
        return $this->container['via_agent'];
    }

    /**
     * Sets via_agent
     *
     * @param bool|null $via_agent Indicates that this Session is being made by an agent, and not the end consumer. If false or not present, the Session is assumed to be placed by the end consumer.
     *
     * @return self
     */
    public function setViaAgent($via_agent)
    {
        $this->container['via_agent'] = $via_agent;

        return $this;
    }

    /**
     * Gets billing_profile_id
     *
     * @return string|null
     */
    public function getBillingProfileId()
    {
        return $this->container['billing_profile_id'];
    }

    /**
     * Sets billing_profile_id
     *
     * @param string|null $billing_profile_id Corresponds to the BillingProfileId returned in a BillingProfile. Can be passed in to reference an existing billing profile instead of creating a new one. Exactly one of BillingProfile, BillingProfileId or BillingprofileReference are required.
     *
     * @return self
     */
    public function setBillingProfileId($billing_profile_id)
    {
        if (!is_null($billing_profile_id) && (mb_strlen($billing_profile_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $billing_profile_id when calling Session., must be smaller than or equal to 36.');
        }
        if (!is_null($billing_profile_id) && (mb_strlen($billing_profile_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $billing_profile_id when calling Session., must be bigger than or equal to 36.');
        }
        if (!is_null($billing_profile_id) && (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $billing_profile_id))) {
            throw new \InvalidArgumentException("invalid value for $billing_profile_id when calling Session., must conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.");
        }

        $this->container['billing_profile_id'] = $billing_profile_id;

        return $this;
    }

    /**
     * Gets billing_profile_reference
     *
     * @return string|null
     */
    public function getBillingProfileReference()
    {
        return $this->container['billing_profile_reference'];
    }

    /**
     * Sets billing_profile_reference
     *
     * @param string|null $billing_profile_reference Merchant supplied reference that uniquely maps to a BillingProfile. Can be passed in to reference an existing BillingProfile. Exactly one of BillingProfile, BillingProfileId or BillingprofileReference are required.
     *
     * @return self
     */
    public function setBillingProfileReference($billing_profile_reference)
    {
        $this->container['billing_profile_reference'] = $billing_profile_reference;

        return $this;
    }

    /**
     * Gets billing_profile
     *
     * @return \OpenAPI\Client\Model\BillingProfile|null
     */
    public function getBillingProfile()
    {
        return $this->container['billing_profile'];
    }

    /**
     * Sets billing_profile
     *
     * @param \OpenAPI\Client\Model\BillingProfile|null $billing_profile billing_profile
     *
     * @return self
     */
    public function setBillingProfile($billing_profile)
    {
        $this->container['billing_profile'] = $billing_profile;

        return $this;
    }

    /**
     * Gets shipping_details
     *
     * @return \OpenAPI\Client\Model\ShippingDetails|null
     */
    public function getShippingDetails()
    {
        return $this->container['shipping_details'];
    }

    /**
     * Sets shipping_details
     *
     * @param \OpenAPI\Client\Model\ShippingDetails|null $shipping_details shipping_details
     *
     * @return self
     */
    public function setShippingDetails($shipping_details)
    {
        $this->container['shipping_details'] = $shipping_details;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return float|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param float|null $tax_amount Taxes for the entire order. Currency is defined by parent object.
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\Client\Model\Order|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\Client\Model\Order|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \OpenAPI\Client\Model\Discount[]|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \OpenAPI\Client\Model\Discount[]|null $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets rate_offer_id
     *
     * @return string|null
     */
    public function getRateOfferId()
    {
        return $this->container['rate_offer_id'];
    }

    /**
     * Sets rate_offer_id
     *
     * @param string|null $rate_offer_id The 36 character GUID for a guaranteed foreign exchange rate. If omitted, the rate will be determined at the time of settlement.
     *
     * @return self
     */
    public function setRateOfferId($rate_offer_id)
    {
        if (!is_null($rate_offer_id) && (mb_strlen($rate_offer_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $rate_offer_id when calling Session., must be smaller than or equal to 36.');
        }
        if (!is_null($rate_offer_id) && (mb_strlen($rate_offer_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $rate_offer_id when calling Session., must be bigger than or equal to 36.');
        }
        if (!is_null($rate_offer_id) && (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $rate_offer_id))) {
            throw new \InvalidArgumentException("invalid value for $rate_offer_id when calling Session., must conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.");
        }

        $this->container['rate_offer_id'] = $rate_offer_id;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return object|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param object|null $meta Any optional metadata to be included. Can be a simple reference ID or some complex object containing multiple values, as long as it is valid JSON.
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


