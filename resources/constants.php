<?php

class Constants{
    
    const USER  = 'root';
    const LOCAL = 'localhost';
    const PASSWD  = 'pracadadpe';
    const DATABASE = 'rocks';
    const NAME = 'name';
    const TABLE_MAGMATIC = 'magmatic';
    const TABLE_METAMORPHIC = 'metamorphic';
    const MAIN_MINERALOGY = 'mineralogy';
    const SECONDARY_MINERALOGY = 'secondary';
    const STRUCTURE = 'structure'; //Used for both Magmatic and Metamorphic
    const CHRYSTALLINE = 'chrystal';
    const VISIBILITY = 'visibility';
    const SIZE = 'size';
    const RELATIVE_SIZE = 'relative_size';
    const GEOMETRY = 'geometry';
    const ARTICULATION = 'articulation';
    const FRAMEWORK = 'framework';
    const ACIDITY = 'acidity';
    const SATURATION = 'saturation';
    const FELDSPARS = 'feldspars';
    const COLOR_INDEX = 'color_index';
    const ALUMINA = 'alumina';
    const ALCALINITY = 'alkalinity';
    const DESCRIPTION = 'description';//Used for both Magmatic and Metamorphic
    
    const MAIN_METAMORPHIC = 'main';
    const SECONDARY_METAMORPHIC = 'sec';
    const COMPOSITION = 'composition';
    const TEXTURE = 'texture';
    const METAMORPHISM ='metamorphism';
    const FACIES = 'facies';
    const PROTOLITH = 'protolith';    
    
    public static function getUser(){
        return self::USER;        
    }
    public static function getLocal(){
        return self::LOCAL;
    }
    public static function getPasswd(){
        return self::PASSWD;        
    }
    public static function getDatabase(){
        return self::DATABASE;
    }
    public static function getName(){
        return self::NAME;
    }    
    public static function getTableMet(){
        return self::TABLE_METAMORPHIC;        
    }
    public static function getTableMag(){
        return self::TABLE_MAGMATIC;
    }
    public static function getMainMagmatic(){
        return self::MAIN_MINERALOGY;
    }
    public static function getSecMagmatic(){
        return self::SECONDARY_MINERALOGY;
    }
    public static function getStructure(){
        return self::STRUCTURE;        
    }
    public static function getChryst(){
        return self::CHRYSTALLINE;
    }
    public static function getVisibility(){
        return self::VISIBILITY;
    }
    public static function getSize(){
        return self::SIZE;
    }
    public static function getRelativeSize(){
        return self::RELATIVE_SIZE;
    }
    public static function getGeometry(){
        return self::GEOMETRY;
    }
    public static function getArticulation(){
        return self::ARTICULATION;   
    }
    public static function getFramework(){
        return self::FRAMEWORK;
    }
    public static function getAcidity(){
        return self::ACIDITY;
    }
    public static function getSaturation(){
        return self::SATURATION;
    }
    public static function getFeldspars(){
        return self::FELDSPARS;
    }
    public static function getColorIndex(){
        return self::COLOR_INDEX;
    }
    public static function getAlumina(){
        return self::ALUMINA;
    }
    public static function getAlkalinity(){
        return self::ALCALINITY;
    }
    public static function getDescription(){
        return self::DESCRIPTION;
    }
    public static function getMainMetamorphic(){
        return self::MAIN_METAMORPHIC;
    }
    public static function getSecMetamorphic(){
        return self::SECONDARY_METAMORPHIC;
    }
    public static function getComposition(){
        return self::COMPOSITION;
    }
    public static function getTexture(){
        return self::TEXTURE;
    }
    public static function getMetamorphism(){
        return self::METAMORPHISM;
    }
    public static function getFacies(){
        return self::FACIES;
    }
    public static function getProtolith(){
        return self::PROTOLITH;
    }    
}


