<?php
/* 
 * Класс для работы с магазином доменов
 * 
 * @author    Anton Popov <an.popov@list.ru>
 * @copyright Copyright (c) 2015-2016 KIT Ltd.
 */

namespace RegRu;

/**
 * Класс для работы с магазином доменов
 */
class Shop extends Api
{
    /**
     * Тестовый метод, доступен клиентам
     */
    public function nop()
    {}
    
    /**
     * Метод для добавления лота/лотов, доступен всем
     */
    public function addLot()
    {}
    
    /**
     * Метод для обновления лота, доступен всем
     */
    public function updateLot()
    {}
    
    /**
     * Метод для удаления лота, доступен всем
     */
    public function deleteLot()
    {}
    
    /**
     * Метод для получения информации о лоте, доступен всем
     */
    public function getInfo()
    {}
    
    /**
     * Метод для получения списка лотов, доступен всем
     */
    public function getLotList()
    {}
    
    /**
     * Метод для получения списка категорий лотов, доступен всем
     */
    public function getCategoryList()
    {}
    
    /**
     * Метод для получения списка ключевых слов лотов, доступен всем
     */
    public function getSuggestedTags()
    {}
}
