# Tripletex\ProductexternalApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](ProductexternalApi.md#get) | **GET** /product/external/{id} | [BETA] Get external product by ID.
[**search**](ProductexternalApi.md#search) | **GET** /product/external | [BETA] Find external products corresponding with sent data.

# **get**
> \Tripletex\Model\ResponseWrapperExternalProduct get($id, $fields)

[BETA] Get external product by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\ProductexternalApi(
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
    echo 'Exception when calling ProductexternalApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](../Model/.md)| Element ID |
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ResponseWrapperExternalProduct**](../Model/ResponseWrapperExternalProduct.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Tripletex\Model\ListResponseExternalProduct search($name, $wholesaler, $organization_number, $el_number, $nrf_number, $is_inactive, $from, $count, $sorting, $fields)

[BETA] Find external products corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\ProductexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Containing
$wholesaler = "wholesaler_example"; // string | Wholesaler
$organization_number = "organization_number_example"; // string | Wholesaler organization number. Mandatory if Wholesaler is not selected. If Wholesaler is selected, this field is ignored.
$el_number = "el_number_example"; // string | List of valid el numbers
$nrf_number = "nrf_number_example"; // string | List of valid nrf numbers
$is_inactive = True; // bool | Equals
$from = 56; // int | From index
$count = 56; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->search($name, $wholesaler, $organization_number, $el_number, $nrf_number, $is_inactive, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductexternalApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | [**string**](../Model/.md)| Containing | [optional]
 **wholesaler** | [**string**](../Model/.md)| Wholesaler | [optional]
 **organization_number** | [**string**](../Model/.md)| Wholesaler organization number. Mandatory if Wholesaler is not selected. If Wholesaler is selected, this field is ignored. | [optional]
 **el_number** | [**string**](../Model/.md)| List of valid el numbers | [optional]
 **nrf_number** | [**string**](../Model/.md)| List of valid nrf numbers | [optional]
 **is_inactive** | [**bool**](../Model/.md)| Equals | [optional]
 **from** | [**int**](../Model/.md)| From index | [optional]
 **count** | [**int**](../Model/.md)| Number of elements to return | [optional]
 **sorting** | [**string**](../Model/.md)| Sorting pattern | [optional]
 **fields** | [**string**](../Model/.md)| Fields filter pattern | [optional]

### Return type

[**\Tripletex\Model\ListResponseExternalProduct**](../Model/ListResponseExternalProduct.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

