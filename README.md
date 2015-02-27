# PHP DataSource with generators!
Never wanted to do something like this:
``` php

use DataSource\Origins\CustomDataSource;

$ds = new CustomDataSource('some/data/origin');

while($item = $ds->nextItem() {
    //do awesome stuff with $item
}

```

In a efficient way ?
PHP5.5's Generators to the rescue!

DataSource is an abstract class that provides a friendly user interface to work with.
Is meant to be extended by other classes that deal with large amount of data, but the client still can have a elegant way to iterate over the data.

### Todo's

 - Your own extensions :)

License
----

MIT
