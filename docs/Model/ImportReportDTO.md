# ImportReportDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **int** |  | [optional] 
**company_name** | **string** |  | [optional] 
**agreement_number** | **string** |  | [optional] 
**agreement_type** | **string** |  | [optional] 
**accountant_company_id** | **int** |  | [optional] 
**accountant_agreement_number** | **string** |  | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**success** | **bool** |  | [optional] [default to false]
**config** | [**\Tripletex\Model\ImportConfigDTO**](ImportConfigDTO.md) |  | [optional] 
**admins** | **string[]** |  | [optional] 
**summary** | [**map[string,map[string,int]]**](map.md) |  | [optional] 
**errors** | [**\Tripletex\Model\Result[]**](Result.md) |  | [optional] 
**messages** | **string[]** |  | [optional] 
**results** | [**\Tripletex\Model\Result[]**](Result.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


