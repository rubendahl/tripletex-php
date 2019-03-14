# Tripletex\TokenemployeeApi

All URIs are relative to *//tripletex.no/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](TokenemployeeApi.md#create) | **PUT** /token/employee/:create | Create an employee token. Only selected consumers are allowed

# **create**
> \Tripletex\Model\ResponseWrapperEmployeeToken create($token_name, $consumer_name, $employee_id, $company_owned, $expiration_date)

Create an employee token. Only selected consumers are allowed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Tripletex\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tripletex\Api\TokenemployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_name = "token_name_example"; // string | A user defined name for the new token
$consumer_name = "consumer_name_example"; // string | The name of the consumer
$employee_id = 56; // int | The id of the employee
$company_owned = True; // bool | Is the key company owned
$expiration_date = "expiration_date_example"; // string | Expiration date for the employeeToken

try {
    $result = $apiInstance->create($token_name, $consumer_name, $employee_id, $company_owned, $expiration_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenemployeeApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_name** | [**string**](../Model/.md)| A user defined name for the new token |
 **consumer_name** | [**string**](../Model/.md)| The name of the consumer |
 **employee_id** | [**int**](../Model/.md)| The id of the employee |
 **company_owned** | [**bool**](../Model/.md)| Is the key company owned |
 **expiration_date** | [**string**](../Model/.md)| Expiration date for the employeeToken |

### Return type

[**\Tripletex\Model\ResponseWrapperEmployeeToken**](../Model/ResponseWrapperEmployeeToken.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

