<?php
use AdinanCenci\Climatempo\Climatempo;
use Cake\Cache\Cache;
/*
 * Copyright (c) Leonardo Stefani
 */
class ClimatempoCache {
    public static $TOKEN = '8a4fbadf82fadcfe94980a30ba4b3292';
    public static $CIDADE_ID = '4502'; // Aracaju
    public static $CACHE_KEY = 'climatempocache';
    public static function obterPrevisao() {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set("America/Maceio");
        Cache::setConfig(self::$CACHE_KEY, [
            'className' => 'File',
            'duration' => '+5 hours',
            'path' => CACHE,
            'prefix' => 'cake_short_'
        ]);
        $cache = Cache::read(self::$CACHE_KEY, self::$CACHE_KEY);
        if($cache)
            return $cache;
        $climatempo = new Climatempo(self::$TOKEN);
        try {
            $carga = [];
            $previsao = $climatempo->fifteenDays(self::$CIDADE_ID);
            foreach ($previsao->days as $dia) {
                $diaCarga = [];
                $diaCarga['regiao'] = $previsao->name . '/' . $previsao->state;
                $diaCarga['data'] = strftime('%d %B %Y', (new DateTime($dia->date))->getTimestamp());
                $diaCarga['maxTemp'] = $dia->maxTemp;
                $diaCarga['minTemp'] = $dia->minTemp;
                $diaCarga['texto'] = $dia->textPt;
                array_push($carga, $diaCarga);
            }
            Cache::add(self::$CACHE_KEY, $carga, self::$CACHE_KEY);
            return $carga;
        } catch (Exception $e) {
            return [];
        }
    }
}
?>
