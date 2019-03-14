# Tripletex\InventoryinventoriesApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**search**](InventoryinventoriesApi.md#search) | **GET** /inventory/inventories | [BETA] Find inventories corresponding with sent data. Only available for some consumers.

# **search**
> \Tripletex\Model\ListResponseInventories search($date_from, $date_to, $product_id, $from, $count, $sorting, $fields)

[BETA] Find inventories corresponding with sent data. Only available for some consumers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\InventoryinventoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Format is yyyy-MM-dd (from and incl.).
$date_to = "date_to_example"; // string | Format is yyyy-MM-dd (to and incl.).
$product_id = 56; // int | Element ID
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->search($date_from, $date_to, $product_id, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryinventoriesApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | [**string**](../Model/.md)| Format is yyyy-MM-dd (from and incl.). |
 **date_to** | [**string**](../Model/.md)| Format is yyyy-MM-dd (to and incl.). |
 **product_id** | [**int**](../Model/.md)| Element ID | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseInventories**](../Model/ListResponseInventories.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

