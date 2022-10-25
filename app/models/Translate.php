<?

namespace Models;

final class Translates {

    protected $translationsDir;
    protected $translationsList;
    protected $translationFileName;

    public function __construct()
    {
        $this->translationsDir = AppDirectory . '/data/tranlations';
        $this->translationsList = array();
        $this->translationFileName = '.translate.json';
    }


    public function getTranslate($lang)
    {
        $translation = $lang . $this->translationFileName;
        if (in_array($translation, $this->getTranslationList()))
            return $this->getTranslationList($lang)[$translation];
        return array();
    }

    public function getTranslationList() {
        return $this->translationsList;
    }

    public function loadTranslationsList()
    {

        // if (is_array($this->translationsList))
        //     return $this->translationsList;

        $this->translationsList = array();

        foreach(array_diff(scandir($this->translationsDir), array('.', '..')) as $filename)
            if (strpos($filename, $this->translationFileName) !== false)
                array_push($this->translationsList, $filename);


        return $this->translationsList;
    }

}