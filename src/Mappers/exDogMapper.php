<?

class DogMapper {
    public static function MapData(array $data){
        new Dog(
            $data[0], // Var 1 
            $data[1], // Var2
            $data[2], // Var3
        );
    }
}

?>