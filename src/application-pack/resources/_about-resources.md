This is a resource folder.

Any files that are put into this folder can be access from the web.

You can add JavaScript, CSS, font, and image files here.

My recommendation is to structure the folders by feature.

The URL path for this folder is defined in the Route List as:
```php
['route', 'GET', '/resources/application/{filepath:.+}', '\\MyOrganizationNamespace\\MyApplicationNamespace\\ApplicationResourceRoute'],
```