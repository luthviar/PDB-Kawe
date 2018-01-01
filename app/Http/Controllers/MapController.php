<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GoogleMaps;
use Mapper;

class MapController extends Controller
{
    /* 
        KMeans ML
    */
    public function dataBrick1()
    {
        $arrLatitude = $this->getDatabrick1Lat();
        $arrLongitude = $this->getDatabrick1Long();
        $arrCount = $this->getDatabrick1Count();
        return $this->generateMapWithCount($arrLatitude, $arrLongitude, $arrCount);
    }

    /* 
        Biscreting KMeans ML
    */
    public function dataBrick2()
    {
        $arrLatitude = $this->getDatabrick2Lat();
        $arrLongitude = $this->getDatabrick2Long();
        return $this->generateMap($arrLatitude, $arrLongitude);
    }

    /*                                                                                          
    
    */
    public function dataBrick3()
    {
        $arrLatitude = $this->getDatabrick3Lat();
        $arrLongitude = $this->getDatabrick3Long();
        $arrCount = $this->getDatabrick3Count();
        return $this->generateMapWithCount($arrLatitude, $arrLongitude, $arrCount);
    }

    /*                                                                                          
        KMeans ML
    */
    public function spark1()
    {
        $arrLatitude = $this->getSpark1Lat();
        $arrLongitude = $this->getSpark1Long();
        return $this->generateMap($arrLatitude, $arrLongitude);
    }

    /*                                                                                          
        KMeans MLLib
    */
    public function spark2()
    {
        $arrLatitude = $this->getSpark2Lat();
        $arrLongitude = $this->getSpark2Long();
        return $this->generateMap($arrLatitude, $arrLongitude);
    }

    /*                                                                                          
    
    */
    public function spark3()
    {
        $arrLatitude = array(51.33094528,
                            51.62840455,
                            54.48125503,
                            51.5174084,
                            54.51262717,
                            51.14569694,
                            52.71681114,
                            53.07772994,
                            53.47874519,
                        );
        $arrLongitude = array(-3.41009542, 
                            0.81708516,
                            -1.44745039,
                            -0.21704177,
                            -6.03053087,
                            -1.53349564,
                            -1.56248113,
                            -0.14538955,
                            -2.53252477,
                        );
        $arrCount = array(1585407, 
                            1353933,
                            2379805,
                            5157079,
                            99684,
                            1687174,
                            4213788,
                            1171391,
                            4826018,
                        );
        return $this->generateMap($arrLatitude, $arrLongitude, $arrCount);
    }

    public function compare()
    {
        $latSpark1 = $this->getSpark1Lat();
        $longSpark1 = $this->getSpark1Long();;
        
        $latSpark2 = $this->getSpark2Lat();
        $longSpark2 = $this->getSpark2Long();

        $latDatabrick1 = $this->getDatabrick1Lat();
        $longDatabrick1 = $this->getDatabrick1Long();
        $countDatabrick1 = $this->getDatabrick1Count();

        $latDatabrick2 = $this->getDatabrick2Lat();
        $longDatabrick2 = $this->getDatabrick2Long();

        $latDatabrick3 = $this->getDatabrick3Lat();
        $longDatabrick3 = $this->getDatabrick3Long();
        $countDatabrick3 = $this->getDatabrick3Count();

        return view('compare-map', [
            'latSpark1' => $latSpark1,
            'lngSpark1' => $longSpark1,
            'latSpark2' => $latSpark2,
            'lngSpark2' => $longSpark2,

            'latDatabrick1' => $latDatabrick1,
            'lngDatabrick1' => $longDatabrick1,
            'countDatabrick1' => $countDatabrick1,
            'latDatabrick2' => $latDatabrick2,
            'lngDatabrick2' => $longDatabrick2,
            'latDatabrick3' => $latDatabrick3,
            'lngDatabrick3' => $longDatabrick3,
            'countDatabrick3' => $countDatabrick3,
        ]);
    }

    private function generateMapWithCount(array $arrLatitude, array $arrLongitude, array $arrCount)
    {
        return view('map', [
            'arrLat' => $arrLatitude,
            'arrLng' => $arrLongitude,
            'arrCount' => $arrCount
        ]);
    }
    
    private function generateMap(array $arrLatitude, array $arrLongitude)
    {
        return view('map', [
            'arrLat' => $arrLatitude,
            'arrLng' => $arrLongitude,
            'arrCount' => null
        ]);
    }

    private function getSpark1Long()
    {
        $arrLongitude = array(-1.31237259, 
                            -2.63951082,
                            -0.1706831,
                            -2.80669524,
                            -1.4610006,
                            -1.73947437,
                            -4.1573587,
                            0.87905727,
                            -1.13558389,
                        );
        return $arrLongitude;
    }

    private function getSpark1Lat()
    {
        $arrLatitude = array(51.07528142,
                            53.51457366,
                            51.57330775,
                            51.51291783,
                            54.82142467,
                            52.50175842,
                            51.03457216,
                            51.88591794,
                            53.47909496,
                        );
        return $arrLatitude;
    }

    private function getSpark2Long()
    {
        $arrLongitude = array(-0.16157981, 
                            -1.89086623,
                            0.83866673,
                            -1.17805069,
                            -1.59104211,
                            -6.20879952,
                            -2.86649543,
                            -1.40398857,
                            -3.36950673,
                        );
        return $arrLongitude;
    }

    private function getSpark2Lat()
    {
        $arrLatitude = array(51.55334656,
                            53.52667693,
                            51.9822497,
                            54.52663451,
                            52.57192355,
                            54.66030682,
                            53.48222802,
                            51.08995159,
                            51.30615584,
                        );
        return $arrLatitude;
    }

    private function getDatabrick1Long()
    {
        $arrLongitude = array(-3.41009542, 
                            0.81708516,
                            -1.44745039,
                            -0.21704177,
                            -6.03053087,
                            -1.53349564,
                            -1.56248113,
                            -0.14538955,
                            -2.53252477,
                        );
        return $arrLongitude;
    }

    private function getDatabrick1Lat()
    {
        $arrLatitude = array(51.33094528,
                            51.62840455,
                            54.48125503,
                            51.5174084,
                            54.51262717,
                            51.14569694,
                            52.71681114,
                            53.07772994,
                            53.47874519,
                        );
        return $arrLatitude;
    }

    private function getDatabrick1Count()
    {
        $arrCount = array(1585407, 
                            1353933,
                            2379805,
                            5157079,
                            99684,
                            1687174,
                            4213788,
                            1171391,
                            4826018,
                        );
        return $arrCount;
    }

    private function getDatabrick2Long()
    {
        $arrLongitude = array(-3.7441027,
                            -2.14693686,
                            -2.5089698,
                            -1.39759671,
                            -1.24958541,
                            -0.97142952,
                            -0.15613262,
                            0.63354896,
                            1.97843159e-02,
                        );
        return $arrLongitude;
    }

    private function getDatabrick2Lat()
    {
        $arrLatitude = array(51.54782719,
                            52.38839324,
                            53.52744447,
                            53.92771066,
                            51.03615209,
                            52.12028742,
                            51.49169413,
                            51.56637895,
                            5.28580027e+01,
                        );
        return $arrLatitude;
    }

    private function getDatabrick2Count()
    {
        # code...
    }

    private function getDatabrick3Long()
    {
        $arrLongitude = array(-0.15931191,
                            -2.87259142,
                            -0.72140065,
                            -3.34004466,
                            -1.86993476,
                            -1.47562803,
                            -1.75686087,
                            0.90768687,
                            -1.37880455,
                        );
        return $arrLongitude;
    }

    private function getDatabrick3Lat()
    {
        $arrLatitude = array(51.51734029,
                            53.52871918,
                            53.25522812,
                            51.28603116,
                            53.56966014,
                            54.82014664,
                            52.47886174,
                            51.81232548,
                            51.12808072,
                        );
        return $arrLatitude;
    }

    private function getDatabrick3Count()
    {
        $arrCount = array(3530076, 
                            1097394,
                            890795,
                            1072866,
                            1689131,
                            636583,
                            1430228,
                            815513,
                            786848,
                        );
        return $arrCount;
    }
}