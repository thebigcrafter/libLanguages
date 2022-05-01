# [libLanguages](https://github.com/thebigcrafter/libLanguages) &middot; [![GitHub](https://img.shields.io/github/license/thebigcrafter/libLanguages)](https://github.com/thebigcrafter/libLanguages/blob/main/LICENSE) [![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](https://github.com/thebigcrafter/libLanguages)

libLanguages is a PocketMine-MP library for making plugins support multiple languages.

- **Easy To Learn:** Just declare it in `onEnable()` function to use.
- **2 Functions But Powerful:** Just use `setLanguage()` and `translate()`, language files will be loaded automatically
  in `languages` folder in data folder.

## Installation

Because of library so you need to add to your plugin by:

- Using Poggit:

```yaml
...
path: ""
libs:
  - src: thebigcrafter/libLanguages/libLanguages
    version: ^1.0.0
...
```

## Documentation

```php
<?php

...

use thebigcrafter\libLanguages\Language;

...

public function onEnable() {
    $this->language = new Language($this);
    
    $this->language->setLanguage("en");
    
    $this->getLogger()->info(Language::translate("welcome.message"));
}

...
```

**NOTE:** You need to save languages files in `languages` folder in data folder manually.

## License

Released under the [GPL-3.0](https://github.com/thebigcrafter/libLanguages/blob/main/LICENSE) license.