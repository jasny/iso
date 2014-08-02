ISO
===

PHP library around standarized codes


ISO 3166-1
----------

### Countries

The `Countries` class holds a list with (English) country names, conntected to their
[ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code.

You can get a full list of countries, get a country code by name or get a country name by code.

    Jasny\ISO\Countries::getList(); // List all countries
    Jasny\ISO\Countries::getName("US"); // 'United States'
    Jasny\ISO\Countries::getCode("United States"); // 'US'

Searching on an alternative country name is supported. For instance 

    Jasny\ISO\Countries::getCode("United States"); // 'US'
    Jasny\ISO\Countries::getCode("United States of America"); // 'US'
    Jasny\ISO\Countries::getCode("USA"); // 'US'


### Country subdivisions

The `CountrySubdivisions` class holds a list with subdivision (eg state of province) names by country,
connect to their [ISO 3166-2](http://en.wikipedia.org/wiki/ISO_3166-2) code.

You can get a list of subdivisions for a country, get a subdivision code by name or get a subdivision
name by code.

    Jasny\ISO\CountrySubdivisions::getList("US"); // List all US states
    Jasny\ISO\CountrySubdivisions::getName("US", "NY"); // 'New York'
    Jasny\ISO\CountrySubdivisions::getCode("US", "New York"); // 'NY'

Searching on an alternative subdivision name is supported.

You can also check if a subdivision is required for a full address for a country. This is the case for Austrila, Canada, China, Montenegro, Malaysia and the United States.


    Jasny\ISO\CountrySubdivisions::getRequired(); // ['AU', 'CA', 'CN', 'ME', 'MY', 'US']
    Jasny\ISO\CountrySubdivisions::isRequired("US"); // true
    Jasny\ISO\CountrySubdivisions::isRequired("NL"); // false
    
