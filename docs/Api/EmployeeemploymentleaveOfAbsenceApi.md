# Tripletex\EmployeeemploymentleaveOfAbsenceApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](EmployeeemploymentleaveOfAbsenceApi.md#get) | **GET** /employee/employment/leaveOfAbsence/{id} | [BETA] Find leave of absence by ID.
[**post**](EmployeeemploymentleaveOfAbsenceApi.md#post) | **POST** /employee/employment/leaveOfAbsence | [BETA] Create leave of absence.
[**postList**](EmployeeemploymentleaveOfAbsenceApi.md#postList) | **POST** /employee/employment/leaveOfAbsence/list | [BETA] Create multiple leave of absences.
[**put**](EmployeeemploymentleaveOfAbsenceApi.md#put) | **PUT** /employee/employment/leaveOfAbsence/{id} | [BETA] Update leave of absence.

# **get**
> \Tripletex\Model\ResponseWrapperLeaveOfAbsence get($id, $fields)

[BETA] Find leave of absence by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\EmployeeemploymentleaveOfAbsenceApi(
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
    echo 'Exception when calling EmployeeemploymentleaveOfAbsenceApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperLeaveOfAbsence**](../Model/ResponseWrapperLeaveOfAbsence.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> \Tripletex\Model\ResponseWrapperLeaveOfAbsence post($body)

[BETA] Create leave of absence.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\EmployeeemploymentleaveOfAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tripletex\Model\LeaveOfAbsence(); // \Tripletex\Model\LeaveOfAbsence | JSON representing the new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeemploymentleaveOfAbsenceApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tripletex\Model\LeaveOfAbsence**](../Model/LeaveOfAbsence.md)| JSON representing the new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperLeaveOfAbsence**](../Model/ResponseWrapperLeaveOfAbsence.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postList**
> \Tripletex\Model\ListResponseLeaveOfAbsence postList($body)

[BETA] Create multiple leave of absences.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\EmployeeemploymentleaveOfAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Tripletex\Model\LeaveOfAbsence()); // \Tripletex\Model\LeaveOfAbsence[] | JSON representing a list of new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->postList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeemploymentleaveOfAbsenceApi->postList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tripletex\Model\LeaveOfAbsence[]**](../Model/LeaveOfAbsence.md)| JSON representing a list of new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Tripletex\Model\ListResponseLeaveOfAbsence**](../Model/ListResponseLeaveOfAbsence.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> \Tripletex\Model\ResponseWrapperLeaveOfAbsence put($id, $body)

[BETA] Update leave of absence.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\EmployeeemploymentleaveOfAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$body = new \Tripletex\Model\LeaveOfAbsence(); // \Tripletex\Model\LeaveOfAbsence | Partial object describing what should be updated

try {
    $result = $apiInstance->put($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeemploymentleaveOfAbsenceApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **body** | [**\Tripletex\Model\LeaveOfAbsence**](../Model/LeaveOfAbsence.md)| Partial object describing what should be updated | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperLeaveOfAbsence**](../Model/ResponseWrapperLeaveOfAbsence.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

