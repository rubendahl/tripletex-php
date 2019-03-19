# TimesheetEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**project** | [**\Tripletex\Model\Project**](Project.md) |  | [optional] 
**activity** | [**\Tripletex\Model\Activity**](Activity.md) |  | 
**date** | **string** |  | 
**hours** | **double** |  | 
**chargeable_hours** | **double** |  | 
**employee** | [**\Tripletex\Model\Employee**](Employee.md) |  | 
**time_clocks** | [**\Tripletex\Model\TimeClock[]**](TimeClock.md) | Link to stop watches on this hour. | [optional] 
**comment** | **string** |  | [optional] 
**locked** | **bool** | Indicates if the hour can be changed. | [optional] [default to false]
**chargeable** | **bool** |  | [optional] [default to false]
**invoice** | [**\Tripletex\Model\Invoice**](Invoice.md) |  | [optional] 
**hourly_rate** | **float** |  | [optional] 
**hourly_cost** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


