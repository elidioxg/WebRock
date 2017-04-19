<?php

class Strings {
    const STR_MAG_ROCKS = 'Magmatic Rocks';
    const STR_MET_ROCKS = 'Metamorphic Rocks';
    
    //Table Constants:
    const STR_NAME = 'Name';
    const STR_MAIN_MINERALOGY = 'Main Mineralogy';
    const STR_SECONDARY_MINERALOGY = 'Secondary Mineralogy';
    const STR_STRUCTURE = 'Structure'; //Used for both Magmatic and Metamorphic
    const STR_CHRYSTALLINE = 'Chrystalline';
    const STR_VISIBILITY = 'Visibility';
    const STR_SIZE = 'Absolut Size';
    const STR_RELATIVE_SIZE = 'Relative Size';
    const STR_GEOMETRY = 'Geometry';
    const STR_ARTICULATION = 'Articulation';
    const STR_FRAMEWORK = 'Framework';
    const STR_ACIDITY = 'Acidity';
    const STR_SATURATION = 'Saturation';
    const STR_FELDSPARS = 'Feldspars';
    const STR_COLOR_INDEX = 'Color Index';
    const STR_ALUMINA = 'Alumina Saturation';
    const STR_ALCALINITY = 'Alkalinity';
    const STR_DESCRIPTION = 'Description';//Used for both Magmatic and Metamorphic
    
    const STR_MAIN_METAMORPHIC = 'Main Mineralogy';
    const STR_SECONDARY_METAMORPHIC = 'Secondary Mineralogy';
    const STR_COMPOSITION = 'Composition';
    const STR_TEXTURE = 'Texture';
    const STR_METAMORPHISM ='Metamorphism';
    const STR_FACIES = 'Facies';
    const STR_PROTOLITH = 'Protolith';    
    
    public static function strMagRock(){
        return self::STR_MAG_ROCKS;
    }
    
    public static function strMetRock(){
        return self::STR_MET_ROCKS;
    }
    
    public static function getName(){
        return self::STR_NAME;
    }
    
    public static function getMainMagmatic(){
        return self::STR_MAIN_MINERALOGY;
    }
    public static function getSecMagmatic(){
        return self::STR_SECONDARY_MINERALOGY;
    }
    public static function getStructure(){
        return self::STR_STRUCTURE;        
    }
    public static function getChrystalline(){
        return self::STR_CHRYSTALLINE;
    }
    public static function getVisibility(){
        return self::STR_VISIBILITY;        
    }
    public static function getSize(){
        return self::STR_SIZE;
    }
    public static function getRelativeSize(){
        return self::STR_RELATIVE_SIZE;
    }
    public static function getGeometry(){
        return self::STR_GEOMETRY;
    }
    public static function getArticulation(){
        return self::STR_ARTICULATION;
    }
    public static function getFramework(){
        return self::STR_FRAMEWORK;
    }
    public static function getAcidity(){
        return self::STR_ACIDITY;
    }
    public static function getSaturation(){
        return self::STR_SATURATION;
    }
    public static function getFeldspars(){
        return self::STR_FELDSPARS;
    }
    public static function getColorIndex(){
        return self::STR_COLOR_INDEX;
    }
    public static function getAlumina(){
        return self::STR_ALUMINA;
    }
    public static function getAlcalinity(){
        return self::STR_ALCALINITY;
    }
    public static function getDescription(){
        return self::STR_DESCRIPTION;
    }
    public static function getMainMetamorphic(){
        return self::STR_MAIN_METAMORPHIC;
    }
    public static function getSecMetamorphic(){
        return self::STR_SECONDARY_METAMORPHIC;
    }
    public static function getComposition(){
        return self::STR_COMPOSITION;
    }
    public static function getTexture(){
        return self::STR_TEXTURE;
    }
    public static function getMetamorphism(){
        return self::STR_METAMORPHISM;
    }
    public static function getFacies(){
        return self::STR_FACIES;
    }
    public static function getProtolith(){
        return self::STR_PROTOLITH;
    }    
}

