# Associative Implode

This is a submodule of [TaylorNetwork\LaravelHelpers][link-laravel-helpers].

It should be installed as a component of [TaylorNetwork\LaravelHelpers][link-laravel-helpers] for it to work properly with Laravel.

## Usage

`associative_implode` accepts a minimum of 3 parameters, see table below.

| Parameter # | Description | Type | Suggested Value |
|:-----------:|:-----------:|:----:|:---------------:|
| 1 | The glue between the array key and value | string | `'='` |
| 2 | The glue between each array key/value pair | string | `' '` |
| 3 | The array to implode | array | - |

For all examples the following array will be used.

``` php
$array = [
    'class' => 'class1 class2 class3',
    'id' => 'elementID',
    'data' => 'value',
];
```

### Default

By default the array values are quoted with `"`

``` php
associative_implode('=', ' ', $array);
```

Returns

``` php
'class="class1 class2 class3" id="elementID" data="value"'
```

### Additional Parameters

There are an additional 3 parameters that `associative_implode` accepts.

| Parameter # | Description | Type | Default Value |
|:-----------:|:-----------:|:----:|:-------------:|
| 4 | Quote the array keys | boolean | false |
| 5 | Quote the array values | boolean | true |
| 6 | The character used to quote | string | `"` |

To quote array keys and values with `/`

``` php
associative_implode('=', ' ', $array, true, true, '/');
```

Returns

``` php
'/class/=/class1 class2 class3/ /id/=/elementID/ /data/=/value/'
```

## Credits

- Main Author: [Sam Taylor][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/taylornetwork
[link-laravel-helpers]: https://github.com/taylornetwork/laravel-helpers