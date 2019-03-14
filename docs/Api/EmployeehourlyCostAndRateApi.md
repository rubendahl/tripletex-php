# Tripletex\EmployeehourlyCostAndRateApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](EmployeehourlyCostAndRateApi.md#get) | **GET** /employee/hourlyCostAndRate/{id} | [BETA] Find hourly cost and rate by ID.
[**post**](EmployeehourlyCostAndRateApi.md#post) | **POST** /employee/hourlyCostAndRate | [BETA] Create hourly cost and rate.
[**put**](EmployeehourlyCostAndRateApi.md#put) | **PUT** /employee/hourlyCostAndRate/{id} | [BETA] Update hourly cost and rate.
[**search**](EmployeehourlyCostAndRateApi.md#search) | **GET** /employee/hourlyCostAndRate | Find all hourly cost and rates for employee.

# **get**
> \Tripletex\Model\ResponseWrapperHourlyCostAndRate get($id, $fields)

[BETA] Find hourly cost and rate by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\EmployeehourlyCostAndRateApi(
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
    echo 'Exception when calling EmployeehourlyCostAndRateApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperHourlyCostAndRate**](../Model/ResponseWrapperHourlyCostAndRate.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> \Tripletex\Model\ResponseWrapperHourlyCostAndRate post($body)

[BETA] Create hourly cost and rate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\EmployeehourlyCostAndRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tripletex\Model\HourlyCostAndRate(); // \Tripletex\Model\HourlyCostAndRate | JSON representing the new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeehourlyCostAndRateApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tripletex\Model\HourlyCostAndRate**](../Model/HourlyCostAndRate.md)| JSON representing the new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperHourlyCostAndRate**](../Model/ResponseWrapperHourlyCostAndRate.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> \Tripletex\Model\ResponseWrapperHourlyCostAndRate put($id, $body)

[BETA] Update hourly cost and rate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\EmployeehourlyCostAndRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$body = new \Tripletex\Model\HourlyCostAndRate(); // \Tripletex\Model\HourlyCostAndRate | Partial object describing what should be updated

try {
    $result = $apiInstance->put($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeehourlyCostAndRateApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **body** | [**\Tripletex\Model\HourlyCostAndRate**](../Model/HourlyCostAndRate.md)| Partial object describing what should be updated | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperHourlyCostAndRate**](../Model/ResponseWrapperHourlyCostAndRate.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Tripletex\Model\ListResponseHourlyCostAndRate search($employee_id, $from, $count, $sorting, $fields)

Find all hourly cost and rates for employee.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\EmployeehourlyCostAndRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = 56; // int | Employee ID. Defaults to ID of token owner.
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->search($employee_id, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeehourlyCostAndRateApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | [**int**](../Model/.md)| Employee ID. Defaults to ID of token owner. | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseHourlyCostAndRate**](../Model/ListResponseHourlyCostAndRate.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

