# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=HealthOS-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the HealthOS library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=HealthOS-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=HealthOS-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=HealthOS-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=HealthOS-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=HealthOS-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=HealthOS-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=HealthOS-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=HealthOS-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=HealthOS-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=HealthOS-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=HealthOS-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=HealthOS-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| host | TODO: add a description |
| oAuthAccessToken | The OAuth 2.0 access token to be set before API calls |



API client can be initialized as following.

```php
// Configuration parameters and credentials
$host = "host";
$oAuthAccessToken = "oAuthAccessToken"; // The OAuth 2.0 access token to be set before API calls

$client = new HealthOSLib\HealthOSClient($host, $oAuthAccessToken);
```

## Class Reference

### <a name="list_of_controllers"></a>List of Controllers

* [MedicinesController](#medicines_controller)
* [LabTestsController](#lab_tests_controller)
* [GenericsController](#generics_controller)
* [FoodController](#food_controller)
* [ExercisesController](#exercises_controller)
* [DrugInteractionsController](#drug_interactions_controller)
* [DiseasesController](#diseases_controller)
* [ChatController](#chat_controller)
* [AutocompleteController](#autocomplete_controller)
* [AuthenticationController](#authentication_controller)

### <a name="medicines_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MedicinesController") MedicinesController

#### Get singleton instance

The singleton instance of the ``` MedicinesController ``` class can be accessed from the API Client.

```php
$medicines = $client->getMedicines();
```

#### <a name="get_manufacturer"></a>![Method: ](https://apidocs.io/img/method.png ".MedicinesController.getManufacturer") getManufacturer

> Get a manufacturer by its id


```php
function getManufacturer($manufacturerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| manufacturerId |  ``` Required ```  | Id of the manufacturer |



#### Example Usage

```php
$manufacturerId = 'manufacturer_id';

$result = $medicines->getManufacturer($manufacturerId);

```


#### <a name="search_manufacturers"></a>![Method: ](https://apidocs.io/img/method.png ".MedicinesController.searchManufacturers") searchManufacturers

> Search a manufacturer by its name


```php
function searchManufacturers($manufacturerQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| manufacturerQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$manufacturerQuery = 'manufacturer_query';

$result = $medicines->searchManufacturers($manufacturerQuery);

```


#### <a name="get_common_side_effects"></a>![Method: ](https://apidocs.io/img/method.png ".MedicinesController.getCommonSideEffects") getCommonSideEffects

> Get common side effects of a medicine


```php
function getCommonSideEffects($medicineId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| medicineId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$medicineId = 'medicine_id';

$result = $medicines->getCommonSideEffects($medicineId);

```


#### <a name="get_popular_usage"></a>![Method: ](https://apidocs.io/img/method.png ".MedicinesController.getPopularUsage") getPopularUsage

> Get popular usages of a medicine


```php
function getPopularUsage($medicineId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| medicineId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$medicineId = 'medicine_id';

$result = $medicines->getPopularUsage($medicineId);

```


#### <a name="get_medicines_by_manufacturer"></a>![Method: ](https://apidocs.io/img/method.png ".MedicinesController.getMedicinesByManufacturer") getMedicinesByManufacturer

> Get medicines by a manufacturer


```php
function getMedicinesByManufacturer(
        $page,
        $size,
        $manufacturerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |
| manufacturerId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 249;
$size = 249;
$manufacturerId = 'manufacturer_id';

$result = $medicines->getMedicinesByManufacturer($page, $size, $manufacturerId);

```


#### <a name="get_similar_medicines"></a>![Method: ](https://apidocs.io/img/method.png ".MedicinesController.getSimilarMedicines") getSimilarMedicines

> Get similar medicines


```php
function getSimilarMedicines($medicineId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| medicineId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$medicineId = 'medicine_id';

$result = $medicines->getSimilarMedicines($medicineId);

```


#### <a name="get_medicine"></a>![Method: ](https://apidocs.io/img/method.png ".MedicinesController.getMedicine") getMedicine

> Get a medicine


```php
function getMedicine($medicineId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| medicineId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$medicineId = 'medicine_id';

$result = $medicines->getMedicine($medicineId);

```


#### <a name="get_all_medicines"></a>![Method: ](https://apidocs.io/img/method.png ".MedicinesController.getAllMedicines") getAllMedicines

> Get all medicines


```php
function getAllMedicines(
        $page,
        $size)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 1;
$size = 10;

$result = $medicines->getAllMedicines($page, $size);

```


#### <a name="search_medicines"></a>![Method: ](https://apidocs.io/img/method.png ".MedicinesController.searchMedicines") searchMedicines

> Search a medicine by name


```php
function searchMedicines($medicineQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| medicineQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$medicineQuery = 'medicine_query';

$result = $medicines->searchMedicines($medicineQuery);

```


#### <a name="get_all_manufacturers"></a>![Method: ](https://apidocs.io/img/method.png ".MedicinesController.getAllManufacturers") getAllManufacturers

> Get all manufacturers


```php
function getAllManufacturers(
        $page,
        $size)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 1;
$size = 10;

$result = $medicines->getAllManufacturers($page, $size);

```


#### <a name="get_alternative_medicines"></a>![Method: ](https://apidocs.io/img/method.png ".MedicinesController.getAlternativeMedicines") getAlternativeMedicines

> Get substitutes of a medicine


```php
function getAlternativeMedicines(
        $page,
        $size,
        $medicineId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |
| medicineId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 249;
$size = 249;
$medicineId = 'medicine_id';

$result = $medicines->getAlternativeMedicines($page, $size, $medicineId);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="lab_tests_controller"></a>![Class: ](https://apidocs.io/img/class.png ".LabTestsController") LabTestsController

#### Get singleton instance

The singleton instance of the ``` LabTestsController ``` class can be accessed from the API Client.

```php
$labTests = $client->getLabTests();
```

#### <a name="get_lab_test"></a>![Method: ](https://apidocs.io/img/method.png ".LabTestsController.getLabTest") getLabTest

> Get labtest by id


```php
function getLabTest($labTestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| labTestId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$labTestId = 'lab_test_id';

$result = $labTests->getLabTest($labTestId);

```


#### <a name="get_all_lab_tests"></a>![Method: ](https://apidocs.io/img/method.png ".LabTestsController.getAllLabTests") getAllLabTests

> All Lab tests


```php
function getAllLabTests(
        $page,
        $size)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 249;
$size = 249;

$result = $labTests->getAllLabTests($page, $size);

```


#### <a name="search_lab_tests"></a>![Method: ](https://apidocs.io/img/method.png ".LabTestsController.searchLabTests") searchLabTests

> Search a lab test by name


```php
function searchLabTests($labTestQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| labTestQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$labTestQuery = 'lab_test_query';

$result = $labTests->searchLabTests($labTestQuery);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="generics_controller"></a>![Class: ](https://apidocs.io/img/class.png ".GenericsController") GenericsController

#### Get singleton instance

The singleton instance of the ``` GenericsController ``` class can be accessed from the API Client.

```php
$generics = $client->getGenerics();
```

#### <a name="get_generic"></a>![Method: ](https://apidocs.io/img/method.png ".GenericsController.getGeneric") getGeneric

> Get a generic by id


```php
function getGeneric($genericId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| genericId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$genericId = 'generic_id';

$result = $generics->getGeneric($genericId);

```


#### <a name="get_medicines_by_generic"></a>![Method: ](https://apidocs.io/img/method.png ".GenericsController.getMedicinesByGeneric") getMedicinesByGeneric

> Get medicines containing the generic


```php
function getMedicinesByGeneric(
        $page,
        $size,
        $exclusive,
        $genericId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |
| exclusive |  ``` Required ```  | TODO: Add a parameter description |
| genericId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 249;
$size = 249;
$exclusive = true;
$genericId = 'generic_id';

$result = $generics->getMedicinesByGeneric($page, $size, $exclusive, $genericId);

```


#### <a name="get_all_generics"></a>![Method: ](https://apidocs.io/img/method.png ".GenericsController.getAllGenerics") getAllGenerics

> All generics


```php
function getAllGenerics(
        $page,
        $size)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 249;
$size = 249;

$result = $generics->getAllGenerics($page, $size);

```


#### <a name="search_generics"></a>![Method: ](https://apidocs.io/img/method.png ".GenericsController.searchGenerics") searchGenerics

> Search a generic by name


```php
function searchGenerics($genericQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| genericQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$genericQuery = 'generic_query';

$result = $generics->searchGenerics($genericQuery);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="food_controller"></a>![Class: ](https://apidocs.io/img/class.png ".FoodController") FoodController

#### Get singleton instance

The singleton instance of the ``` FoodController ``` class can be accessed from the API Client.

```php
$food = $client->getFood();
```

#### <a name="search_food_restaurants"></a>![Method: ](https://apidocs.io/img/method.png ".FoodController.searchFoodRestaurants") searchFoodRestaurants

> TODO: Add Description


```php
function searchFoodRestaurants($foodRestaurantQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| foodRestaurantQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$foodRestaurantQuery = 'food_restaurant_query';

$result = $food->searchFoodRestaurants($foodRestaurantQuery);

```


#### <a name="get_all_food_brands"></a>![Method: ](https://apidocs.io/img/method.png ".FoodController.getAllFoodBrands") getAllFoodBrands

> TODO: Add Description


```php
function getAllFoodBrands(
        $page,
        $size)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 1;
$size = 10;

$result = $food->getAllFoodBrands($page, $size);

```


#### <a name="get_food_items_by_restaurant"></a>![Method: ](https://apidocs.io/img/method.png ".FoodController.getFoodItemsByRestaurant") getFoodItemsByRestaurant

> TODO: Add Description


```php
function getFoodItemsByRestaurant(
        $page,
        $size,
        $foodRestaurantId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |
| foodRestaurantId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 249;
$size = 249;
$foodRestaurantId = 'food_restaurant_id';

$result = $food->getFoodItemsByRestaurant($page, $size, $foodRestaurantId);

```


#### <a name="search_food_brands"></a>![Method: ](https://apidocs.io/img/method.png ".FoodController.searchFoodBrands") searchFoodBrands

> TODO: Add Description


```php
function searchFoodBrands($foodBrandQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| foodBrandQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$foodBrandQuery = 'food_brand_query';

$result = $food->searchFoodBrands($foodBrandQuery);

```


#### <a name="get_food_item"></a>![Method: ](https://apidocs.io/img/method.png ".FoodController.getFoodItem") getFoodItem

> TODO: Add Description


```php
function getFoodItem($foodItemId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| foodItemId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$foodItemId = 'food_item_id';

$result = $food->getFoodItem($foodItemId);

```


#### <a name="get_all_food_items"></a>![Method: ](https://apidocs.io/img/method.png ".FoodController.getAllFoodItems") getAllFoodItems

> TODO: Add Description


```php
function getAllFoodItems(
        $page,
        $size)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 249;
$size = 249;

$result = $food->getAllFoodItems($page, $size);

```


#### <a name="search_food_items"></a>![Method: ](https://apidocs.io/img/method.png ".FoodController.searchFoodItems") searchFoodItems

> TODO: Add Description


```php
function searchFoodItems($foodItemQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| foodItemQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$foodItemQuery = 'food_item_query';

$result = $food->searchFoodItems($foodItemQuery);

```


#### <a name="get_all_food_restaurants"></a>![Method: ](https://apidocs.io/img/method.png ".FoodController.getAllFoodRestaurants") getAllFoodRestaurants

> TODO: Add Description


```php
function getAllFoodRestaurants(
        $page,
        $size)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 1;
$size = 10;

$result = $food->getAllFoodRestaurants($page, $size);

```


#### <a name="get_food_items_by_brand"></a>![Method: ](https://apidocs.io/img/method.png ".FoodController.getFoodItemsByBrand") getFoodItemsByBrand

> TODO: Add Description


```php
function getFoodItemsByBrand(
        $page,
        $size,
        $foodBrandId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |
| foodBrandId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 86;
$size = 86;
$foodBrandId = 'food_brand_id';

$result = $food->getFoodItemsByBrand($page, $size, $foodBrandId);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="exercises_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ExercisesController") ExercisesController

#### Get singleton instance

The singleton instance of the ``` ExercisesController ``` class can be accessed from the API Client.

```php
$exercises = $client->getExercises();
```

#### <a name="get_exercise"></a>![Method: ](https://apidocs.io/img/method.png ".ExercisesController.getExercise") getExercise

> TODO: Add Description


```php
function getExercise($exerciseId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| exerciseId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$exerciseId = 'exercise_id';

$result = $exercises->getExercise($exerciseId);

```


#### <a name="get_all_exercises"></a>![Method: ](https://apidocs.io/img/method.png ".ExercisesController.getAllExercises") getAllExercises

> TODO: Add Description


```php
function getAllExercises(
        $page,
        $size)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 1;
$size = 10;

$result = $exercises->getAllExercises($page, $size);

```


#### <a name="search_exercises"></a>![Method: ](https://apidocs.io/img/method.png ".ExercisesController.searchExercises") searchExercises

> TODO: Add Description


```php
function searchExercises($exerciseQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| exerciseQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$exerciseQuery = 'exercise_query';

$result = $exercises->searchExercises($exerciseQuery);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="drug_interactions_controller"></a>![Class: ](https://apidocs.io/img/class.png ".DrugInteractionsController") DrugInteractionsController

#### Get singleton instance

The singleton instance of the ``` DrugInteractionsController ``` class can be accessed from the API Client.

```php
$drugInteractions = $client->getDrugInteractions();
```

#### <a name="get_generics_interactions"></a>![Method: ](https://apidocs.io/img/method.png ".DrugInteractionsController.getGenericsInteractions") getGenericsInteractions

> TODO: Add Description


```php
function getGenericsInteractions($genericId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| genericId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$genericId = 'generic_id';

$result = $drugInteractions->getGenericsInteractions($genericId);

```


#### <a name="get_medicine_interactions"></a>![Method: ](https://apidocs.io/img/method.png ".DrugInteractionsController.getMedicineInteractions") getMedicineInteractions

> TODO: Add Description


```php
function getMedicineInteractions($medicineId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| medicineId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$medicineId = 'medicine_id';

$result = $drugInteractions->getMedicineInteractions($medicineId);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="diseases_controller"></a>![Class: ](https://apidocs.io/img/class.png ".DiseasesController") DiseasesController

#### Get singleton instance

The singleton instance of the ``` DiseasesController ``` class can be accessed from the API Client.

```php
$diseases = $client->getDiseases();
```

#### <a name="get_disease"></a>![Method: ](https://apidocs.io/img/method.png ".DiseasesController.getDisease") getDisease

> TODO: Add Description


```php
function getDisease($diseaseId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| diseaseId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$diseaseId = 'disease_id';

$result = $diseases->getDisease($diseaseId);

```


#### <a name="get_all_diseases"></a>![Method: ](https://apidocs.io/img/method.png ".DiseasesController.getAllDiseases") getAllDiseases

> TODO: Add Description


```php
function getAllDiseases(
        $page,
        $size)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Required ```  | TODO: Add a parameter description |
| size |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 1;
$size = 10;

$result = $diseases->getAllDiseases($page, $size);

```


#### <a name="search_diseases"></a>![Method: ](https://apidocs.io/img/method.png ".DiseasesController.searchDiseases") searchDiseases

> TODO: Add Description


```php
function searchDiseases($diseaseQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| diseaseQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$diseaseQuery = 'disease_query';

$result = $diseases->searchDiseases($diseaseQuery);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="chat_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ChatController") ChatController

#### Get singleton instance

The singleton instance of the ``` ChatController ``` class can be accessed from the API Client.

```php
$chat = $client->getChat();
```

#### <a name="get_excercises_chat"></a>![Method: ](https://apidocs.io/img/method.png ".ChatController.getExcercisesChat") getExcercisesChat

> TODO: Add Description


```php
function getExcercisesChat()
```

#### Example Usage

```php

$result = $chat->getExcercisesChat();

```


#### <a name="get_food_items_chat"></a>![Method: ](https://apidocs.io/img/method.png ".ChatController.getFoodItemsChat") getFoodItemsChat

> TODO: Add Description


```php
function getFoodItemsChat()
```

#### Example Usage

```php

$result = $chat->getFoodItemsChat();

```


#### <a name="get_medicine_chat"></a>![Method: ](https://apidocs.io/img/method.png ".ChatController.getMedicineChat") getMedicineChat

> TODO: Add Description


```php
function getMedicineChat()
```

#### Example Usage

```php

$result = $chat->getMedicineChat();

```


[Back to List of Controllers](#list_of_controllers)

### <a name="autocomplete_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AutocompleteController") AutocompleteController

#### Get singleton instance

The singleton instance of the ``` AutocompleteController ``` class can be accessed from the API Client.

```php
$autocomplete = $client->getAutocomplete();
```

#### <a name="get_exercises"></a>![Method: ](https://apidocs.io/img/method.png ".AutocompleteController.getExercises") getExercises

> TODO: Add Description


```php
function getExercises($exerciseQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| exerciseQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$exerciseQuery = 'exercise_query';

$result = $autocomplete->getExercises($exerciseQuery);

```


#### <a name="get_diseases"></a>![Method: ](https://apidocs.io/img/method.png ".AutocompleteController.getDiseases") getDiseases

> TODO: Add Description


```php
function getDiseases($diseaseQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| diseaseQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$diseaseQuery = 'disease_query';

$result = $autocomplete->getDiseases($diseaseQuery);

```


#### <a name="get_lab_tests"></a>![Method: ](https://apidocs.io/img/method.png ".AutocompleteController.getLabTests") getLabTests

> TODO: Add Description


```php
function getLabTests($labTestQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| labTestQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$labTestQuery = 'lab_test_query';

$result = $autocomplete->getLabTests($labTestQuery);

```


#### <a name="get_food_items"></a>![Method: ](https://apidocs.io/img/method.png ".AutocompleteController.getFoodItems") getFoodItems

> TODO: Add Description


```php
function getFoodItems($foodItemQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| foodItemQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$foodItemQuery = 'food_item_query';

$result = $autocomplete->getFoodItems($foodItemQuery);

```


#### <a name="get_generics"></a>![Method: ](https://apidocs.io/img/method.png ".AutocompleteController.getGenerics") getGenerics

> TODO: Add Description


```php
function getGenerics($genericQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| genericQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$genericQuery = 'generic_query';

$result = $autocomplete->getGenerics($genericQuery);

```


#### <a name="get_medicines"></a>![Method: ](https://apidocs.io/img/method.png ".AutocompleteController.getMedicines") getMedicines

> TODO: Add Description


```php
function getMedicines($medicineQuery)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| medicineQuery |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$medicineQuery = 'medicine_query';

$result = $autocomplete->getMedicines($medicineQuery);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="authentication_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AuthenticationController") AuthenticationController

#### Get singleton instance

The singleton instance of the ``` AuthenticationController ``` class can be accessed from the API Client.

```php
$authentication = $client->getAuthentication();
```

#### <a name="create_request_access_token"></a>![Method: ](https://apidocs.io/img/method.png ".AuthenticationController.createRequestAccessToken") createRequestAccessToken

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add Description


```php
function createRequestAccessToken($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bodyValue = "{\n  \"grant_type\": \"client_credentials\",\n  \"client_id\": \"{{client_id}}\",\n  \"client_secret\": \"{{client_secret}}\",\n  \"scope\": \"public read write\"\n}";
$body = APIHelper::deserialize($bodyValue);

$result = $authentication->createRequestAccessToken($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | Unauthorized |



[Back to List of Controllers](#list_of_controllers)



