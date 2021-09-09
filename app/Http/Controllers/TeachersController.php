<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    private $data = '{
        "AlixandreThiagoFerreiraSantana": {
            "name":"Alixandre Thiago Ferreira Santana",
            "area":"Tecnologia da Informação",
            "email":"prof.alixandresantana@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4753668E2",
            "info":"",
            "photo":"https://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4753668E2"
        },
        "ÁlvaroAlvaresSobrinho":{
            "name": "Álvaro Alvares Sobrinho",
            "area":"Algoritmos e Otimização",
            "email":"alvaro.alvares86@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4442176P6",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4442176P6"
        },
        "AssueroFonsecaXimenes":{
            "name": "Assuero Fonseca Ximenes",
            "area":"Tecnologia da Informação",
            "email":"assuero.ximenes@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4770522U6",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4770522U6"
        },
        "DalitondaSilva": {
            "name":"Daliton da Silva",
            "area":"Computação Gráfica",
            "email":"daliton@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4265030P0",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4265030P0"
        },
        "DimasCassimirodoNascimentoFilho": {
            "name":"Dimas Cassimiro do Nascimento Filho",
            "area":"Banco de Dados",
            "email":"dimascnf@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4297253Y5",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4297253Y5"
        },
        "DianaVasconcelosLopes": {
            "name":"Diana Vasconcelos Lopes",
            "area":"Letras",
            "email":"didilaster@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4779821D8",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4779821D8"
        },
        "DiogodeLimaLages": {
            "name":"Diogo de Lima Lages",
            "area":"Engenharia da Computação",
            "email":"diolages@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4485655P3",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4485655P3"
        },
        "EudesdaSilvaSantos": {
            "name":"Eudes da Silva Santos",
            "area":"Letras",
            "email":"eudesprof@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4753691Z6",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4753691Z6"
        },
        "GersoniloOliveiradaSilva": {
            "name":"Gersonilo Oliveira da Silva",
            "area":"Matemática",
            "email":"",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4220375E8",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4220375E8"
        },
        "HelderFernandodeAraujoOliveira": {
            "name":"Helder Fernando de Araujo Oliveira",
            "area":"Engenharia da Computação",
            "email":"helderfern@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4251666D6",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4251666D6"
        },
        "ÍcaroLinsLeitãodaCunha": {
            "name":"Ícaro Lins Leitão da Cunha",
            "area":"Computação Gráfica",
            "email":"illdacunha@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4735709U4",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4735709U4"
        },
        "IgorMedeirosVanderlei": {
            "name":"Igor Medeiros Vanderlei",
            "area":"Teoria da Computação",
            "email":"igor.vanderlei@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4718526Y3",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4718526Y3"
        },
        "JeanCarlosTeixeiradeAraújo": {
            "name":"Jean Carlos Teixeira de Araújo",
            "area":"Redes e Sistemas Distribuídos",
            "email":"teixeirajean1@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4441815A6",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4441815A6"
        },
        "KádnaMariaAlvesCamboimVale": {
            "name":"Kádna Maria Alves Camboim Vale",
            "area":"Redes e Sistemas Distribuídos",
            "email":"kadnacamboim@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4432732Z0",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4432732Z0"
        },
        "LuisFilipeAlvesPereira": {
            "name":"Luis Filipe Alves Pereira",
            "area":"Inteligência Computacional",
            "email":"",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4270319T0",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4270319T0"
        },
        "MarciusPetrúciodeA.Cavalcante": {
            "name":"Marcius Petrúcio de A. Cavalcante",
            "area":"Matemática",
            "email":"marcius.petrucio@ufrpe.br",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4745170Y5",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4745170Y5"
        },
        "MariaAparecidaAmorimSibaldo": {
            "name":"Maria Aparecida Amorim Sibaldo",
            "area":"Teoria da Computação",
            "email":"maasibaldo@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4164767U0",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4164767U0"
        },
        "MarielJoséPimenteldeAndrade": {
            "name":"Mariel José Pimentel de Andrade",
            "area":"Física",
            "email":"",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4147747D6",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4147747D6"
        },
        "MárioSansukeMaranhãoWatanabe": {
            "name":"Mário Sansuke Maranhão Watanabe",
            "area":"Matemática",
            "email":"sansukew@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4791978P1",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4791978P1"
        },
        "MuriloChavedardeSouzaAraújo": {
            "name":"Murilo Chavedar de Souza Araújo",
            "area":"Matemática",
            "email":"murilochavedar@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4735877J3",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4735877J3"
        },
        "PriscillaKellyMachadoVieira": {
            "name":"Priscilla Kelly Machado Vieira",
            "area":"Banco de Dados",
            "email":"priscillakmv@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4483741J6",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4483741J6"
        },
        "RobsonSantosdeOliveira": {
            "name":"Robson Santos de Oliveira",
            "area":"Letras",
            "email":"",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4166289T6",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4166289T6"
        },
        "RodrigoCardosoAmaraldeAndrade": {
            "name":"Rodrigo Cardoso Amaral de Andrade",
            "area":"Engenharia de Software",
            "email":"rodrigocaa@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4213235T1",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4213235T1"
        },
        "RodrigoGusmãodeCarvalhoRocha": {
            "name":"Rodrigo Gusmão de Carvalho Rocha",
            "area":"Engenharia de Software",
            "email":"rgcrocha@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4240291H4",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4240291H4"
        },
        "RomeroLuizMendonçaSalesFilho": {
            "name":"Romero Luiz Mendonça Sales Filho",
            "area":"Estatística",
            "email":"",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4290803E3",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4290803E3"
        },
        "RyanRibeirodeAzevêdo": {
            "name":"Ryan Ribeiro de Azevêdo",
            "area":"Inteligência Computacional",
            "email":"ryanweb9@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4138777Y1",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4138777Y1"
        },
        "SérgioFranciscoT.deO.Mendonça": {
            "name":"Sérgio Francisco T. de O. Mendonça",
            "area":"Computação",
            "email":"sftdom@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4716183E4",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4716183E4"
        },
        "ThaísAlvesBurityRocha": {
            "name":"Thaís Alves Burity Rocha",
            "area":"Teoria da Computação",
            "email":"tata.burity@gmail.com",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4268683A2",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4268683A2"
        },
        "TiagoBuarqueAssunçãodeCarvalho": {
            "name":"Tiago Buarque Assunção de Carvalho",
            "area":"Inteligência Computacional",
            "email":"tiago.buarque@ufape.edu.br",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4274619U9",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4274619U9"
        },
        "WellingtonRomeroSerafimFreire": {
            "name":"Wellington Romero Serafim Freire",
            "area":"Física",
            "email":"",
            "site":"#",
            "lattes":"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4266656Y3",
            "info":"",
            "photo":"http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4266656Y3"
        }
    }';
    public function index(){
        $data = json_decode($this->data);
        $data = $this->paginate($data,9);
        return view('teachers.index',['data'=>$data]);//TODO pass all the teachers to this view when the backend is built
    }

    /*$id -> name of teacher */
    public function show($id){//TODO dependency injection with id number of BD when backend is built
        $data = json_decode($this->data);
        $id = str_replace(" ",'',$id);
        return view('teachers.show',['data'=>$data->$id]);
    }

    /**
     * Gera a paginação dos itens de um array ou collection.
     *
     * @param array|Collection      $items
     * @param int  $perPage
     * @param int  $page
     *
     * @return LengthAwarePaginator
     */
    public function paginate($items, $perPage = 15, $page = null, $getValues = true)
    {
        $pageName = 'page';
        $page     = $page ?: (\Illuminate\Pagination\Paginator::resolveCurrentPage($pageName) ?: 1);
        $items    = $items instanceof \Illuminate\Support\Collection ? $items : \Illuminate\Support\Collection::make($items);

        return new \Illuminate\Pagination\LengthAwarePaginator(
            $getValues
            ? $items->forPage($page, $perPage)->values()
                : $items->forPage($page, $perPage),
            $items->count(),
            $perPage,
            $page,
            [
                'path'     => \Illuminate\Pagination\Paginator::resolveCurrentPath(),
                'pageName' => $pageName,
            ]
        );
    }
}
