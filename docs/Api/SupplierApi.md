# Tripletex\SupplierApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](SupplierApi.md#get) | **GET** /supplier/{id} | Get supplier by ID.
[**post**](SupplierApi.md#post) | **POST** /supplier | Create supplier. Related supplier addresses may also be created.
[**postList**](SupplierApi.md#postList) | **POST** /supplier/list | [BETA] Create multiple suppliers. Related supplier addresses may also be created.
[**put**](SupplierApi.md#put) | **PUT** /supplier/{id} | Update supplier.
[**putList**](SupplierApi.md#putList) | **PUT** /supplier/list | [BETA] Update multiple suppliers. Addresses can also be updated.
[**search**](SupplierApi.md#search) | **GET** /supplier | Find suppliers corresponding with sent data.

# **get**
> \Tripletex\Model\ResponseWrapperSupplier get($id, $fields)

Get supplier by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->get($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperSupplier**](../Model/ResponseWrapperSupplier.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> \Tripletex\Model\ResponseWrapperSupplier post($body)

Create supplier. Related supplier addresses may also be created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tripletex\Model\Supplier(); // \Tripletex\Model\Supplier | JSON representing the new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tripletex\Model\Supplier**](../Model/Supplier.md)| JSON representing the new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperSupplier**](../Model/ResponseWrapperSupplier.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postList**
> \Tripletex\Model\ListResponseSupplier postList($body)

[BETA] Create multiple suppliers. Related supplier addresses may also be created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Tripletex\Model\Supplier()); // \Tripletex\Model\Supplier[] | JSON representing a list of new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->postList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->postList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tripletex\Model\Supplier[]**](../Model/Supplier.md)| JSON representing a list of new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Tripletex\Model\ListResponseSupplier**](../Model/ListResponseSupplier.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> \Tripletex\Model\ResponseWrapperSupplier put($id, $body)

Update supplier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$body = new \Tripletex\Model\Supplier(); // \Tripletex\Model\Supplier | Partial object describing what should be updated

try {
    $result = $apiInstance->put($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **body** | [**\Tripletex\Model\Supplier**](../Model/Supplier.md)| Partial object describing what should be updated | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperSupplier**](../Model/ResponseWrapperSupplier.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putList**
> \Tripletex\Model\ListResponseSupplier putList($body)

[BETA] Update multiple suppliers. Addresses can also be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Tripletex\Model\Supplier()); // \Tripletex\Model\Supplier[] | JSON representing updates to object. Should have ID and version set.

try {
    $result = $apiInstance->putList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->putList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tripletex\Model\Supplier[]**](../Model/Supplier.md)| JSON representing updates to object. Should have ID and version set. | [optional]

### Return type

[**\Tripletex\Model\ListResponseSupplier**](../Model/ListResponseSupplier.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Tripletex\Model\ListResponseSupplier search($id, $supplier_number, $organization_number, $email, $invoice_email, $is_inactive, $account_manager_id, $changed_since, $is_wholesaler, $show_products, $from, $count, $sorting, $fields)

Find suppliers corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | List of IDs
$supplier_number = "supplier_number_example"; // string | List of IDs
$organization_number = "organization_number_example"; // string | Equals
$email = "email_example"; // string | Equals
$invoice_email = "invoice_email_example"; // string | Equals
$is_inactive = True; // bool | Equals
$account_manager_id = "account_manager_id_example"; // string | List of IDs
$changed_since = "changed_since_example"; // string | Only return elements that have changed since this date and time
$is_wholesaler = True; // bool | Equals
$show_products = True; // bool | Equals
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->search($id, $supplier_number, $organization_number, $email, $invoice_email, $is_inactive, $account_manager_id, $changed_since, $is_wholesaler, $show_products, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| List of IDs | [optional]
 **supplier_number** | [**string**](../Model/.md)| List of IDs | [optional]
 **organization_number** | [**string**](../Model/.md)| Equals | [optional]
 **email** | [**string**](../Model/.md)| Equals | [optional]
 **invoice_email** | [**string**](../Model/.md)| Equals | [optional]
 **is_inactive** | [**bool**](../Model/.md)| Equals | [optional]
 **account_manager_id** | [**string**](../Model/.md)| List of IDs | [optional]
 **changed_since** | [**string**](../Model/.md)| Only return elements that have changed since this date and time | [optional]
 **is_wholesaler** | [**bool**](../Model/.md)| Equals | [optional]
 **show_products** | [**bool**](../Model/.md)| Equals | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseSupplier**](../Model/ListResponseSupplier.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

