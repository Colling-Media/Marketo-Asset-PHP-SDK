# CollingMedia\Client\ProgramsApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveProgramUsingPOST**](ProgramsApi.md#approveProgramUsingPOST) | **POST** /rest/asset/v1/program/{id}/approve.json | Approve Program
[**browseProgramsUsingGET**](ProgramsApi.md#browseProgramsUsingGET) | **GET** /rest/asset/v1/programs.json | Get Programs
[**cloneProgramUsingPOST**](ProgramsApi.md#cloneProgramUsingPOST) | **POST** /rest/asset/v1/program/{id}/clone.json | Clone Program
[**createProgramUsingPOST**](ProgramsApi.md#createProgramUsingPOST) | **POST** /rest/asset/v1/programs.json | Create Program
[**deleteProgramUsingPOST**](ProgramsApi.md#deleteProgramUsingPOST) | **POST** /rest/asset/v1/program/{id}/delete.json | Delete Program
[**getProgramByIdUsingGET**](ProgramsApi.md#getProgramByIdUsingGET) | **GET** /rest/asset/v1/program/{id}.json | Get Program by Id
[**getProgramByNameUsingGET**](ProgramsApi.md#getProgramByNameUsingGET) | **GET** /rest/asset/v1/program/byName.json | Get Program by Name
[**getProgramListByTagUsingGET**](ProgramsApi.md#getProgramListByTagUsingGET) | **GET** /rest/asset/v1/program/byTag.json | Get Programs by Tag
[**unapproveProgramUsingPOST**](ProgramsApi.md#unapproveProgramUsingPOST) | **POST** /rest/asset/v1/program/{id}/unapprove.json | Unapprove Program
[**updateProgramUsingPOST**](ProgramsApi.md#updateProgramUsingPOST) | **POST** /rest/asset/v1/program/{id}.json | Update Program Metadata


# **approveProgramUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse approveProgramUsingPOST($id)

Approve Program

Approves the target program.  Only valid for unapproved email programs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\ProgramsApi();
$id = 56; // int | id

try {
    $result = $api_instance->approveProgramUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->approveProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseProgramsUsingGET**
> \CollingMedia\Client\Model\ResponseOfBrowseAllPrograms browseProgramsUsingGET($max_return, $offset, $filter_type)

Get Programs

Retrieves the list of accessible programs from the target instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\ProgramsApi();
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging
$filter_type = "filter_type_example"; // string | Optional filter.  Requires filterValues

try {
    $result = $api_instance->browseProgramsUsingGET($max_return, $offset, $filter_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->browseProgramsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **filter_type** | **string**| Optional filter.  Requires filterValues | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfBrowseAllPrograms**](../Model/ResponseOfBrowseAllPrograms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneProgramUsingPOST**
> \CollingMedia\Client\Model\ResponseOfProgramResponse cloneProgramUsingPOST($id, $clone_program_request)

Clone Program

Clones the target program

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\ProgramsApi();
$id = 56; // int | id
$clone_program_request = new \CollingMedia\Client\Model\CloneProgramRequest(); // \CollingMedia\Client\Model\CloneProgramRequest | cloneProgramRequest

try {
    $result = $api_instance->cloneProgramUsingPOST($id, $clone_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->cloneProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_program_request** | [**\CollingMedia\Client\Model\CloneProgramRequest**](../Model/\CollingMedia\Client\Model\CloneProgramRequest.md)| cloneProgramRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProgramUsingPOST**
> \CollingMedia\Client\Model\ResponseOfProgramResponse createProgramUsingPOST($create_program_request)

Create Program

Creates a new program

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\ProgramsApi();
$create_program_request = new \CollingMedia\Client\Model\CreateProgramRequest(); // \CollingMedia\Client\Model\CreateProgramRequest | createProgramRequest

try {
    $result = $api_instance->createProgramUsingPOST($create_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->createProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_program_request** | [**\CollingMedia\Client\Model\CreateProgramRequest**](../Model/\CollingMedia\Client\Model\CreateProgramRequest.md)| createProgramRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse deleteProgramUsingPOST($id)

Delete Program

Deletes the target program.  The program may not contain any assets which are in use outside the program

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\ProgramsApi();
$id = 56; // int | id

try {
    $result = $api_instance->deleteProgramUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->deleteProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfProgramResponse getProgramByIdUsingGET($id)

Get Program by Id

Retrieves the program record for the given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\ProgramsApi();
$id = 56; // int | id

try {
    $result = $api_instance->getProgramByIdUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getProgramByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramByNameUsingGET**
> \CollingMedia\Client\Model\ResponseOfProgramResponse getProgramByNameUsingGET($name)

Get Program by Name

Retrieves the program record for the given name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\ProgramsApi();
$name = "name_example"; // string | Name of the program

try {
    $result = $api_instance->getProgramByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getProgramByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the program | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramListByTagUsingGET**
> \CollingMedia\Client\Model\ResponseOfProgramResponse getProgramListByTagUsingGET($tag_type, $tag_value, $max_return, $offset)

Get Programs by Tag

Retrieves a list of programs matching the tag type and tag values given

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\ProgramsApi();
$tag_type = "tag_type_example"; // string | Type of program tag
$tag_value = "tag_value_example"; // string | Value of the tag
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $api_instance->getProgramListByTagUsingGET($tag_type, $tag_value, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getProgramListByTagUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_type** | **string**| Type of program tag |
 **tag_value** | **string**| Value of the tag |
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveProgramUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse unapproveProgramUsingPOST($id)

Unapprove Program

Unapproves the target program.  Only valid for approved email programs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\ProgramsApi();
$id = 56; // int | id

try {
    $result = $api_instance->unapproveProgramUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->unapproveProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramUsingPOST**
> \CollingMedia\Client\Model\ResponseOfProgramResponse updateProgramUsingPOST($id, $update_program_request)

Update Program Metadata

Updates the target program's metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\ProgramsApi();
$id = 56; // int | id
$update_program_request = new \CollingMedia\Client\Model\UpdateProgramRequest(); // \CollingMedia\Client\Model\UpdateProgramRequest | updateProgramRequest

try {
    $result = $api_instance->updateProgramUsingPOST($id, $update_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->updateProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_program_request** | [**\CollingMedia\Client\Model\UpdateProgramRequest**](../Model/\CollingMedia\Client\Model\UpdateProgramRequest.md)| updateProgramRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

