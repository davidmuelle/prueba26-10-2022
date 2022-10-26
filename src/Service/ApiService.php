<?php

namespace SRC\Service;

//require __DIR__ . "/../../vendor/autoload.php"; //nos salimos de donde estamos y vamos a donde esta el auto load
use SRC\Modelo\Pelicula;
// use \Dotenv\Dotenv tambien podria poner esto y en la linea de abajo solo poner un objeto de dotenv y no la ruta
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ ."/../../"); //me salgo de service y de src y en la carpeta general está el .env
// si utilizo una libreria que no es mia tengo que poner \ antes 
$dotenv->load();

// define("URL", "https://api.themoviedb.org/3/movie/popular?api_key=c6ace561b16d0805bf9077aed19b4b60");
// define("IMG", "https://image.tmdb.org/t/p/w500");
define("URL", $_ENV['URL_BASE'].$_ENV['API_KEY']);
//die(URL);esto para comprobar que me está llegando bien la url
define("IMG",$_ENV['URL_IMG']);
//die(IMG);
class ApiService
{
    public function getPeliculas(): array
    {
        $peliculas = [];
        $datos = file_get_contents(URL);
        $datosJson = json_decode($datos);
        $datosPelis = $datosJson->results;
        foreach ($datosPelis as $objPelicula) {
            $peliculas[] = (new Pelicula)->setTitulo($objPelicula->title)
                ->setResumen($objPelicula->overview)
                ->setPoster(IMG . $objPelicula->poster_path)
                ->setFechaEstreno($objPelicula->release_date)
                ->setCaratula(IMG . $objPelicula->backdrop_path);
        }
        //var_dump($datosJson);
        return $peliculas;
        // echo "<pre> ";
        // var_dump($Peliculas);
        // echo "</pre>";
        //echo "pruebaaaaaaaaaaaa";
    }
}
//(new ApiService)->getPeliculas();
