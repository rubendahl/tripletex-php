<?php
/**
 * Employee
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tripletex
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Tripletex API
 *
 * The Tripletex API is a **RESTful API**, which does not implement PATCH, but uses a PUT with optional fields.  **Actions** or commands are represented in our RESTful path with a prefixed `:`. Example: `/v2/hours/123/:approve`.  **Summaries** or aggregated results are represented in our RESTful path with a prefixed <code>&gt;</code>. Example: <code>/v2/hours/&gt;thisWeeksBillables</code>.  **\"requestID\"** is a key found in all validation and error responses. If additional log information is absolutely necessary, our support division can locate the key value.  **Download** the [swagger.json](/v2/swagger.json) file [OpenAPI Specification](https://github.com/OAI/OpenAPI-Specification) to [generate code](https://github.com/swagger-api/swagger-codegen). This document was generated from the Swagger JSON file.  **version:** This is a versioning number found on all DB records. If included, it will prevent your PUT/POST from overriding any updates to the record since your GET.  **Date & DateTime** follows the **ISO 8601** standard. Date: `YYYY-MM-DD`. DateTime: `YYYY-MM-DDThh:mm:ssZ`  **Sorting** is done by specifying a comma separated list, where a `-` prefix denotes descending. You can sort by sub object with the following format: `project.name, -date`.  **Searching:** is done by entering values in the optional fields for each API call. The values fall into the following categories: range, in, exact and like.  **Missing fields or even no response data** can occur because result objects and fields are filtered on authorization.  **See [FAQ](https://tripletex.no/execute/docViewer?articleId=906&language=0) for more additional information.**   ## Authentication: - **Tokens:** The Tripletex API uses 3 different tokens - **consumerToken**, **employeeToken** and **sessionToken**.  - **consumerToken** is a token provided to the consumer by Tripletex after the API 2.0 registration is completed.  - **employeeToken** is a token created by an administrator in your Tripletex account via the user settings and the tab \"API access\". Each employee token must be given a set of entitlements. [Read more here.](https://tripletex.no/execute/docViewer?articleId=853&language=0)  - **sessionToken** is the token from `/token/session/:create` which requires a consumerToken and an employeeToken created with the same consumer token, but not an authentication header. See how to create a sessionToken [here](https://tripletex.no/execute/docViewer?articleId=855&language=0). - The session token is used as the password in \"Basic Authentication Header\" for API calls.  - Use blank or `0` as username for accessing the account with regular employee token, or if a company owned employee token accesses <code>/company/&gt;withLoginAccess</code> or <code>/token/session/&gt;whoAmI</code>.  - For company owned employee tokens (accounting offices) the ID from <code>/company/&gt;withLoginAccess</code> can be used as username for accessing client accounts.  - If you need to create the header yourself use <code>Authorization: Basic &lt;base64encode('0:sessionToken')&gt;</code>.   ## Tags: - <div class=\"tag-icon-beta\"></div> **[BETA]** This is a beta endpoint and can be subject to change. - <div class=\"tag-icon-deprecated\"></div> **[DEPRECATED]** Deprecated means that we intend to remove/change this feature or capability in a future \"major\" API release. We therefore discourage all use of this feature/capability.  ## Fields: Use the `fields` parameter to specify which fields should be returned. This also supports fields from sub elements. Example values: - `project,activity,hours`  returns `{project:..., activity:...., hours:...}`. - just `project` returns `\"project\" : { \"id\": 12345, \"url\": \"tripletex.no/v2/projects/12345\"  }`. - `project(*)` returns `\"project\" : { \"id\": 12345 \"name\":\"ProjectName\" \"number.....startDate\": \"2013-01-07\" }`. - `project(name)` returns `\"project\" : { \"name\":\"ProjectName\" }`. - All elements and some subElements :  `*,activity(name),employee(*)`.  ## Changes: To get the changes for a resource, `changes` have to be explicitly specified as part of the `fields` parameter, e.g. `*,changes`. There are currently two types of change available:  - `CREATE` for when the resource was created - `UPDATE` for when the resource was updated  NOTE: For objects created prior to October 24th 2018 the list may be incomplete, but will always contain the CREATE and the last change (if the object has been changed after creation).  ## Rate limiting in each response header: Rate limiting is performed on the API calls for an employee for each API consumer. Status regarding the rate limit is returned as headers: - `X-Rate-Limit-Limit` - The number of allowed requests in the current period. - `X-Rate-Limit-Remaining` - The number of remaining requests. - `X-Rate-Limit-Reset` - The number of seconds left in the current period.  Once the rate limit is hit, all requests will return HTTP status code `429` for the remainder of the current period.   ## Response envelope: ``` {   \"fullResultSize\": ###,   \"from\": ###, // Paging starting from   \"count\": ###, // Paging count   \"versionDigest\": \"Hash of full result\",   \"values\": [...list of objects...] } {   \"value\": {...single object...} } ```   ## WebHook envelope: ``` {   \"subscriptionId\": ###,   \"event\": \"object.verb\", // As listed from /v2/event/   \"id\": ###, // Object id   \"value\": {... single object, null if object.deleted ...} } ```    ## Error/warning envelope: ``` {   \"status\": ###, // HTTP status code   \"code\": #####, // internal status code of event   \"message\": \"Basic feedback message in your language\",   \"link\": \"Link to doc\",   \"developerMessage\": \"More technical message\",   \"validationMessages\": [ // Will be null if Error     {       \"field\": \"Name of field\",       \"message\": \"Validation failure information\"     }   ],   \"requestId\": \"UUID used in any logs\" } ```   ## Status codes / Error codes: - **200 OK** - **201 Created** - From POSTs that create something new. - **204 No Content** - When there is no answer, ex: \"/:anAction\" or DELETE. - **400 Bad request** -   - **4000** Bad Request Exception   - **11000** Illegal Filter Exception   - **12000** Path Param Exception   - **24000**   Cryptography Exception - **401 Unauthorized** - When authentication is required and has failed or has not yet been provided   -  **3000** Authentication Exception   -  **9000** Security Exception - **403 Forbidden** - When AuthorisationManager says no. - **404 Not Found** - For content/IDs that does not exist.   -  **6000** Not Found Exception - **409 Conflict** - Such as an edit conflict between multiple simultaneous updates   -  **7000** Object Exists Exception   -  **8000** Revision Exception   - **10000** Locked Exception   - **14000** Duplicate entry - **422 Bad Request** - For Required fields or things like malformed payload.   - **15000** Value Validation Exception   - **16000** Mapping Exception   - **17000** Sorting Exception   - **18000** Validation Exception   - **21000** Param Exception   - **22000** Invalid JSON Exception   - **23000**   Result Set Too Large Exception - **429 Too Many Requests** - Request rate limit hit - **500 Internal Error** -  Unexpected condition was encountered and no more specific message is suitable   -  **1000** Exception
 *
 * OpenAPI spec version: 2.33.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.2
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Tripletex\Model;

use \ArrayAccess;
use \Tripletex\ObjectSerializer;

/**
 * Employee Class Doc Comment
 *
 * @category Class
 * @package  Tripletex
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Employee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Employee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'version' => 'int',
        'changes' => '\Tripletex\Model\Change[]',
        'url' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'employee_number' => 'string',
        'date_of_birth' => 'string',
        'email' => 'string',
        'phone_number_mobile' => 'string',
        'phone_number_home' => 'string',
        'national_identity_number' => 'string',
        'dnumber' => 'string',
        'international_id' => '\Tripletex\Model\InternationalId',
        'bank_account_number' => 'string',
        'user_type' => 'string',
        'allow_information_registration' => 'bool',
        'is_contact' => 'bool',
        'comments' => 'string',
        'address' => '\Tripletex\Model\Address',
        'department' => '\Tripletex\Model\Department',
        'employments' => '\Tripletex\Model\Employment[]',
        'holiday_allowance_earned' => '\Tripletex\Model\HolidayAllowanceEarned'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'version' => 'int32',
        'changes' => null,
        'url' => null,
        'first_name' => null,
        'last_name' => null,
        'employee_number' => null,
        'date_of_birth' => null,
        'email' => 'email',
        'phone_number_mobile' => null,
        'phone_number_home' => null,
        'national_identity_number' => null,
        'dnumber' => null,
        'international_id' => null,
        'bank_account_number' => null,
        'user_type' => null,
        'allow_information_registration' => null,
        'is_contact' => null,
        'comments' => null,
        'address' => null,
        'department' => null,
        'employments' => null,
        'holiday_allowance_earned' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'version' => 'version',
        'changes' => 'changes',
        'url' => 'url',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'employee_number' => 'employeeNumber',
        'date_of_birth' => 'dateOfBirth',
        'email' => 'email',
        'phone_number_mobile' => 'phoneNumberMobile',
        'phone_number_home' => 'phoneNumberHome',
        'national_identity_number' => 'nationalIdentityNumber',
        'dnumber' => 'dnumber',
        'international_id' => 'internationalId',
        'bank_account_number' => 'bankAccountNumber',
        'user_type' => 'userType',
        'allow_information_registration' => 'allowInformationRegistration',
        'is_contact' => 'isContact',
        'comments' => 'comments',
        'address' => 'address',
        'department' => 'department',
        'employments' => 'employments',
        'holiday_allowance_earned' => 'holidayAllowanceEarned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version' => 'setVersion',
        'changes' => 'setChanges',
        'url' => 'setUrl',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'employee_number' => 'setEmployeeNumber',
        'date_of_birth' => 'setDateOfBirth',
        'email' => 'setEmail',
        'phone_number_mobile' => 'setPhoneNumberMobile',
        'phone_number_home' => 'setPhoneNumberHome',
        'national_identity_number' => 'setNationalIdentityNumber',
        'dnumber' => 'setDnumber',
        'international_id' => 'setInternationalId',
        'bank_account_number' => 'setBankAccountNumber',
        'user_type' => 'setUserType',
        'allow_information_registration' => 'setAllowInformationRegistration',
        'is_contact' => 'setIsContact',
        'comments' => 'setComments',
        'address' => 'setAddress',
        'department' => 'setDepartment',
        'employments' => 'setEmployments',
        'holiday_allowance_earned' => 'setHolidayAllowanceEarned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version' => 'getVersion',
        'changes' => 'getChanges',
        'url' => 'getUrl',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'employee_number' => 'getEmployeeNumber',
        'date_of_birth' => 'getDateOfBirth',
        'email' => 'getEmail',
        'phone_number_mobile' => 'getPhoneNumberMobile',
        'phone_number_home' => 'getPhoneNumberHome',
        'national_identity_number' => 'getNationalIdentityNumber',
        'dnumber' => 'getDnumber',
        'international_id' => 'getInternationalId',
        'bank_account_number' => 'getBankAccountNumber',
        'user_type' => 'getUserType',
        'allow_information_registration' => 'getAllowInformationRegistration',
        'is_contact' => 'getIsContact',
        'comments' => 'getComments',
        'address' => 'getAddress',
        'department' => 'getDepartment',
        'employments' => 'getEmployments',
        'holiday_allowance_earned' => 'getHolidayAllowanceEarned'
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
        return self::$swaggerModelName;
    }

    const USER_TYPE_STANDARD = 'STANDARD';
    const USER_TYPE_EXTENDED = 'EXTENDED';
    const USER_TYPE_NO_ACCESS = 'NO_ACCESS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUserTypeAllowableValues()
    {
        return [
            self::USER_TYPE_STANDARD,
            self::USER_TYPE_EXTENDED,
            self::USER_TYPE_NO_ACCESS,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['changes'] = isset($data['changes']) ? $data['changes'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['employee_number'] = isset($data['employee_number']) ? $data['employee_number'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone_number_mobile'] = isset($data['phone_number_mobile']) ? $data['phone_number_mobile'] : null;
        $this->container['phone_number_home'] = isset($data['phone_number_home']) ? $data['phone_number_home'] : null;
        $this->container['national_identity_number'] = isset($data['national_identity_number']) ? $data['national_identity_number'] : null;
        $this->container['dnumber'] = isset($data['dnumber']) ? $data['dnumber'] : null;
        $this->container['international_id'] = isset($data['international_id']) ? $data['international_id'] : null;
        $this->container['bank_account_number'] = isset($data['bank_account_number']) ? $data['bank_account_number'] : null;
        $this->container['user_type'] = isset($data['user_type']) ? $data['user_type'] : null;
        $this->container['allow_information_registration'] = isset($data['allow_information_registration']) ? $data['allow_information_registration'] : false;
        $this->container['is_contact'] = isset($data['is_contact']) ? $data['is_contact'] : false;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['employments'] = isset($data['employments']) ? $data['employments'] : null;
        $this->container['holiday_allowance_earned'] = isset($data['holiday_allowance_earned']) ? $data['holiday_allowance_earned'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ((mb_strlen($this->container['last_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['last_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['employee_number']) && (mb_strlen($this->container['employee_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'employee_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['employee_number']) && (mb_strlen($this->container['employee_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'employee_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['phone_number_mobile']) && (mb_strlen($this->container['phone_number_mobile']) > 100)) {
            $invalidProperties[] = "invalid value for 'phone_number_mobile', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['phone_number_home']) && (mb_strlen($this->container['phone_number_home']) > 100)) {
            $invalidProperties[] = "invalid value for 'phone_number_home', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['national_identity_number']) && (mb_strlen($this->container['national_identity_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'national_identity_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['dnumber']) && (mb_strlen($this->container['dnumber']) > 11)) {
            $invalidProperties[] = "invalid value for 'dnumber', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['bank_account_number']) && (mb_strlen($this->container['bank_account_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'bank_account_number', the character length must be smaller than or equal to 100.";
        }

        $allowedValues = $this->getUserTypeAllowableValues();
        if (!is_null($this->container['user_type']) && !in_array($this->container['user_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'user_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets changes
     *
     * @return \Tripletex\Model\Change[]
     */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param \Tripletex\Model\Change[] $changes changes
     *
     * @return $this
     */
    public function setChanges($changes)
    {
        $this->container['changes'] = $changes;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if ((mb_strlen($first_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling Employee., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling Employee., must be bigger than or equal to 1.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        if ((mb_strlen($last_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling Employee., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($last_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling Employee., must be bigger than or equal to 1.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets employee_number
     *
     * @return string
     */
    public function getEmployeeNumber()
    {
        return $this->container['employee_number'];
    }

    /**
     * Sets employee_number
     *
     * @param string $employee_number employee_number
     *
     * @return $this
     */
    public function setEmployeeNumber($employee_number)
    {
        if (!is_null($employee_number) && (mb_strlen($employee_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $employee_number when calling Employee., must be smaller than or equal to 100.');
        }
        if (!is_null($employee_number) && (mb_strlen($employee_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $employee_number when calling Employee., must be bigger than or equal to 0.');
        }

        $this->container['employee_number'] = $employee_number;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string $date_of_birth date_of_birth
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Employee., must be smaller than or equal to 100.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_number_mobile
     *
     * @return string
     */
    public function getPhoneNumberMobile()
    {
        return $this->container['phone_number_mobile'];
    }

    /**
     * Sets phone_number_mobile
     *
     * @param string $phone_number_mobile phone_number_mobile
     *
     * @return $this
     */
    public function setPhoneNumberMobile($phone_number_mobile)
    {
        if (!is_null($phone_number_mobile) && (mb_strlen($phone_number_mobile) > 100)) {
            throw new \InvalidArgumentException('invalid length for $phone_number_mobile when calling Employee., must be smaller than or equal to 100.');
        }

        $this->container['phone_number_mobile'] = $phone_number_mobile;

        return $this;
    }

    /**
     * Gets phone_number_home
     *
     * @return string
     */
    public function getPhoneNumberHome()
    {
        return $this->container['phone_number_home'];
    }

    /**
     * Sets phone_number_home
     *
     * @param string $phone_number_home phone_number_home
     *
     * @return $this
     */
    public function setPhoneNumberHome($phone_number_home)
    {
        if (!is_null($phone_number_home) && (mb_strlen($phone_number_home) > 100)) {
            throw new \InvalidArgumentException('invalid length for $phone_number_home when calling Employee., must be smaller than or equal to 100.');
        }

        $this->container['phone_number_home'] = $phone_number_home;

        return $this;
    }

    /**
     * Gets national_identity_number
     *
     * @return string
     */
    public function getNationalIdentityNumber()
    {
        return $this->container['national_identity_number'];
    }

    /**
     * Sets national_identity_number
     *
     * @param string $national_identity_number national_identity_number
     *
     * @return $this
     */
    public function setNationalIdentityNumber($national_identity_number)
    {
        if (!is_null($national_identity_number) && (mb_strlen($national_identity_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $national_identity_number when calling Employee., must be smaller than or equal to 100.');
        }

        $this->container['national_identity_number'] = $national_identity_number;

        return $this;
    }

    /**
     * Gets dnumber
     *
     * @return string
     */
    public function getDnumber()
    {
        return $this->container['dnumber'];
    }

    /**
     * Sets dnumber
     *
     * @param string $dnumber dnumber
     *
     * @return $this
     */
    public function setDnumber($dnumber)
    {
        if (!is_null($dnumber) && (mb_strlen($dnumber) > 11)) {
            throw new \InvalidArgumentException('invalid length for $dnumber when calling Employee., must be smaller than or equal to 11.');
        }

        $this->container['dnumber'] = $dnumber;

        return $this;
    }

    /**
     * Gets international_id
     *
     * @return \Tripletex\Model\InternationalId
     */
    public function getInternationalId()
    {
        return $this->container['international_id'];
    }

    /**
     * Sets international_id
     *
     * @param \Tripletex\Model\InternationalId $international_id international_id
     *
     * @return $this
     */
    public function setInternationalId($international_id)
    {
        $this->container['international_id'] = $international_id;

        return $this;
    }

    /**
     * Gets bank_account_number
     *
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->container['bank_account_number'];
    }

    /**
     * Sets bank_account_number
     *
     * @param string $bank_account_number bank_account_number
     *
     * @return $this
     */
    public function setBankAccountNumber($bank_account_number)
    {
        if (!is_null($bank_account_number) && (mb_strlen($bank_account_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $bank_account_number when calling Employee., must be smaller than or equal to 100.');
        }

        $this->container['bank_account_number'] = $bank_account_number;

        return $this;
    }

    /**
     * Gets user_type
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type
     *
     * @param string $user_type Define the employee's user type.<br>STANDARD: Reduced access. Users with limited system entitlements.<br>EXTENDED: Users can be given all system entitlements.<br>NO_ACCESS: User with no log on access.<br>Users with access to Tripletex must confirm the email address.
     *
     * @return $this
     */
    public function setUserType($user_type)
    {
        $allowedValues = $this->getUserTypeAllowableValues();
        if (!is_null($user_type) && !in_array($user_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'user_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets allow_information_registration
     *
     * @return bool
     */
    public function getAllowInformationRegistration()
    {
        return $this->container['allow_information_registration'];
    }

    /**
     * Sets allow_information_registration
     *
     * @param bool $allow_information_registration Determines if salary information can be registered on the user including hours, travel expenses and employee expenses. The user may also be selected as a project member on projects.
     *
     * @return $this
     */
    public function setAllowInformationRegistration($allow_information_registration)
    {
        $this->container['allow_information_registration'] = $allow_information_registration;

        return $this;
    }

    /**
     * Gets is_contact
     *
     * @return bool
     */
    public function getIsContact()
    {
        return $this->container['is_contact'];
    }

    /**
     * Sets is_contact
     *
     * @param bool $is_contact is_contact
     *
     * @return $this
     */
    public function setIsContact($is_contact)
    {
        $this->container['is_contact'] = $is_contact;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Tripletex\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Tripletex\Model\Address $address Address tied to the employee
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets department
     *
     * @return \Tripletex\Model\Department
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param \Tripletex\Model\Department $department department
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets employments
     *
     * @return \Tripletex\Model\Employment[]
     */
    public function getEmployments()
    {
        return $this->container['employments'];
    }

    /**
     * Sets employments
     *
     * @param \Tripletex\Model\Employment[] $employments Employments tied to the employee
     *
     * @return $this
     */
    public function setEmployments($employments)
    {
        $this->container['employments'] = $employments;

        return $this;
    }

    /**
     * Gets holiday_allowance_earned
     *
     * @return \Tripletex\Model\HolidayAllowanceEarned
     */
    public function getHolidayAllowanceEarned()
    {
        return $this->container['holiday_allowance_earned'];
    }

    /**
     * Sets holiday_allowance_earned
     *
     * @param \Tripletex\Model\HolidayAllowanceEarned $holiday_allowance_earned holiday_allowance_earned
     *
     * @return $this
     */
    public function setHolidayAllowanceEarned($holiday_allowance_earned)
    {
        $this->container['holiday_allowance_earned'] = $holiday_allowance_earned;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


