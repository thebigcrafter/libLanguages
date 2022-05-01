<?php

declare(strict_types=1);

namespace thebigcrafter\libLanguages;

use pocketmine\plugin\Plugin;

class Language {
    private string $languagesFolder;
    private string $selectedLanguage;

    public function __construct(Plugin $plugin) {
        $this->languagesFolder = $plugin->getDataFolder() . "languages/";
    }

    /**
     * @param string $key
     *
     * @return string|false
     */
    public function translate(string $key): string|false {
       $availableLanguages = glob($this->languagesFolder . "*.ini");

       if(!in_array($this->languagesFolder . $this->selectedLanguage . ".ini", $availableLanguages)) {
           return false;
       }

       $language = parse_ini_file($this->languagesFolder . $this->selectedLanguage . ".ini");

       if(!isset($language[$key])) {
           return false;
       }

       return $language[$key];
    }

    public function setLanguage(string $language): void {
        $this->selectedLanguage = $language;
    }

    public function getLanguage(): string {
        return $this->selectedLanguage;
    }


}