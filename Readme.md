[//]: # ([![Total Downloads]&#40;https://poser.pugx.org/jsdecena/mcpro/downloads&#41;]&#40;https://packagist.org/packages/jsdecena/mcpro&#41;)

[//]: # ([![Latest Stable Version]&#40;https://poser.pugx.org/jsdecena/mcpro/v/stable&#41;]&#40;https://packagist.org/packages/jsdecena/mcpro&#41;)

[//]: # ([![License]&#40;https://poser.pugx.org/jsdecena/mcpro/license&#41;]&#40;https://packagist.org/packages/jsdecena/mcpro&#41;)

[//]: # ([![Monthly Downloads]&#40;https://poser.pugx.org/jsdecena/mcpro/d/monthly&#41;]&#40;https://packagist.org/packages/jsdecena/mcpro&#41;)

## MCPro is abbreviation of Municipalities, Cities and Provinces in the Russia. 

### (Package forked from jsdecena/MCPro - Jeff Simons Decena )

### A basic RESTful API for getting all the cities, municipality and provinces in the Russia.

### Installation

- Step1: Add this to your root `composer.json`

```json

	"require": {
	    "low-blow/mcpro": "1.1.*"
	}

```

- Step2: Add this to your `config/app.php` in `providers` array

```json

	'providers' => [
	    LowBlow\MCPro\McproServiceProvider::class,
	]

```

- Step3: Run this in your terminal `php artisan vendor:publish`

- Step4: Rename `.env.example` to `.env` and set your database credentials

- Step5: Run this in your terminal `php artisan key:generate`

- Step6: Add these lines in the `/database/seeds/DatabaseSeeder.php`

```json

    $this->call('CountryTableSeeder');
    $this->call('ProvincesTableSeeder');
    $this->call('CitiesTableSeeder');
    $this->call('BarangayTableSeeder');

```

- Step7: Run this in your terminal `composer dump-autoload && php artisan migrate --seed && php artisan serve`

- Step8: Go to [http://localhost:8000/api/v1/country](http://localhost:8000/api/v1/country)

- Enjoy!

### Endpoints

- `/api/v1/country` - List all the countries

- `/api/v1/country/{country_id}` - Details of the country ( PH is id:169 )

- `/api/v1/country/{country_id}/province` - List all the provinces of the country (Currently for the PH)

- `/api/v1/country/{country_id}/province/{province_id}` - Details of the province

- `/api/v1/country/{country_id}/province/{province_id}/city` - Cities ( and Municipalities) of the province

- `/api/v1/country/{country_id}/province/{province_id}/city/{city_id}` - Details of the city

- `/api/v1/country/{country_id}/province/{province_id}/city/{city_id}/barangay` - List all the barangays of the City (or Municipality)

### Future

- Reverse lookup - Giving the `city_id` and shows the `province` and the country etc.

- 404 Exception handling

### Credits:

- Jeff Simons Decena for a basic package (Cities of the Philippines).

### DISCLAIMER

> The data is offered FOR FREE and anybody can use at their own risk. 
> The data is offered AS IS. While I will strive to keep this data up to date, I do not claim that this is a comprehensive listing and some data may be outdated or missing. 
> I will not be held liable for any inaccuracies or errors found in the data. I am not responsible for final end-user utilization of this data and any damages the user might incur in its use.
