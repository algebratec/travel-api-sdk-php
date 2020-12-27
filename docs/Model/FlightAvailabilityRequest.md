# FlightAvailabilityRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**language** | **string** | EN &#x3D; English &lt;br&gt; FR &#x3D; French &lt;br&gt; AR &#x3D; Arabic | [optional] 
**bounds** | [**\Swagger\Client\Model\FlightAvailabilityRequestBound[]**](FlightAvailabilityRequestBound.md) |  | [optional] 
**cabin_class** | **string** | M &#x3D; ECONOMY STANDARD &lt;br&gt; Y &#x3D; ECONOMY &lt;br&gt; W &#x3D; ECONOMY PREMIUM &lt;br&gt; C &#x3D; BUSINESS &lt;br&gt; F &#x3D; FIRST | [optional] 
**trip_type** | **string** | rt &#x3D; Roundtrip &lt;br&gt; ow &#x3D; Oneway &lt;br&gt; md &#x3D; multidestination | [optional] 
**flexible** | **bool** |  | [optional] 
**range** | **int** |  | [optional] 
**nr_of_adult** | **int** |  | [optional] 
**nr_of_child** | **int** |  | [optional] 
**nr_of_infant** | **int** |  | [optional] 
**nr_of_infant_with_seat** | **int** |  | [optional] 
**nr_of_senior** | **int** |  | [optional] 
**nr_of_youth** | **int** |  | [optional] 
**direct_flight** | **bool** | if true, the system will reply with direct flights only | [optional] 
**with_baggage** | **bool** | if true, the system will reply with recommendations with baggage only | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

