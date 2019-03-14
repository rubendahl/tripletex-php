# Tripletex\LedgerApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**openPost**](LedgerApi.md#openPost) | **GET** /ledger/openPost | Find open posts corresponding with sent data.
[**search**](LedgerApi.md#search) | **GET** /ledger | Get ledger (hovedbok).

# **openPost**
> \Tripletex\Model\ListResponseLedgerAccount openPost($date, $account_id, $supplier_id, $customer_id, $employee_id, $department_id, $project_id, $product_id, $from, $count, $sorting, $fields)

Find open posts corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = "date_example"; // string | Invoice date. Format is yyyy-MM-dd (to and excl.).
$account_id = 56; // int | Element ID
$supplier_id = 56; // int | Element ID
$customer_id = 56; // int | Element ID
$employee_id = 56; // int | Element ID
$department_id = 56; // int | Element ID
$project_id = 56; // int | Element ID
$product_id = 56; // int | Element ID
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->openPost($date, $account_id, $supplier_id, $customer_id, $employee_id, $department_id, $project_id, $product_id, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->openPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | [**string**](../Model/.md)| Invoice date. Format is yyyy-MM-dd (to and excl.). |
 **account_id** | [**int**](../Model/.md)| Element ID | [optional]
 **supplier_id** | [**int**](../Model/.md)| Element ID | [optional]
 **customer_id** | [**int**](../Model/.md)| Element ID | [optional]
 **employee_id** | [**int**](../Model/.md)| Element ID | [optional]
 **department_id** | [**int**](../Model/.md)| Element ID | [optional]
 **project_id** | [**int**](../Model/.md)| Element ID | [optional]
 **product_id** | [**int**](../Model/.md)| Element ID | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseLedgerAccount**](../Model/ListResponseLedgerAccount.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Tripletex\Model\ListResponseLedgerAccount search($date_from, $date_to, $open_postings, $account_id, $supplier_id, $customer_id, $employee_id, $department_id, $project_id, $product_id, $from, $count, $sorting, $fields)

Get ledger (hovedbok).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Format is yyyy-MM-dd (from and incl.).
$date_to = "date_to_example"; // string | Format is yyyy-MM-dd (to and excl.).
$open_postings = "open_postings_example"; // string | Deprecated
$account_id = 56; // int | Element ID
$supplier_id = 56; // int | Element ID
$customer_id = 56; // int | Element ID
$employee_id = 56; // int | Element ID
$department_id = 56; // int | Element ID
$project_id = 56; // int | Element ID
$product_id = 56; // int | Element ID
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->search($date_from, $date_to, $open_postings, $account_id, $supplier_id, $customer_id, $employee_id, $department_id, $project_id, $product_id, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | [**string**](../Model/.md)| Format is yyyy-MM-dd (from and incl.). |
 **date_to** | [**string**](../Model/.md)| Format is yyyy-MM-dd (to and excl.). |
 **open_postings** | [**string**](../Model/.md)| Deprecated | [optional]
 **account_id** | [**int**](../Model/.md)| Element ID | [optional]
 **supplier_id** | [**int**](../Model/.md)| Element ID | [optional]
 **customer_id** | [**int**](../Model/.md)| Element ID | [optional]
 **employee_id** | [**int**](../Model/.md)| Element ID | [optional]
 **department_id** | [**int**](../Model/.md)| Element ID | [optional]
 **project_id** | [**int**](../Model/.md)| Element ID | [optional]
 **product_id** | [**int**](../Model/.md)| Element ID | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseLedgerAccount**](../Model/ListResponseLedgerAccount.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

