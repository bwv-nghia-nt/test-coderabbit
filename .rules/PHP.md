# PHP Coding Rules

Multi-line arrays, arguments list, parameters list and match expressions must have a trailing comma (**include last item**).

```php
// Array
$foo = [
    'bar' => [
        'baz' => true,
        'baq' => true,
    ],
    'bas' => [
        'bak' => false,
    ],
];

// Arguments list
foo(
    'bar',
    'baz',
);

// Parameters list
function foo(
    $x,
    $y,
) {
    // ...
}

// Match expressions
$returnValue = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};
```
