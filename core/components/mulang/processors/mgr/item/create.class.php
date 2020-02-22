<?php

class MuLangItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'MuLangItem';
    public $classKey = 'MuLangItem';
    public $languageTopics = ['mulang'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('mulang_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('mulang_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'MuLangItemCreateProcessor';