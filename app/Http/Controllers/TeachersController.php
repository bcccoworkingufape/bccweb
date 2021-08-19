<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index(){
        return view('teachers.index');//TODO pass all the teachers to this view when the backend is built
    }

    /*$id -> name of teacher */
    public function show($id){//TODO dependency injection with id number of BD when backend is built
        if($id == 'erik'){
            $data = ['name'=> 'Erik Jhonatta',
            'area'=>'Web Development',
            'email'=>'erikjhonatta@gmail.com',
            'site'=>"#",
            'lattes'=>"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K9769933H6&tokenCaptchar=03AGdBq26QP84suWtmS6Q6XmCI0ClK6bcZ2CiGPmdjz-8g8CjUfeDrnCsW-ol-4EDE4eZ2ET5rHK0BIph5DQMjPopwxtoJUP7AVm_-VlVWzmyVsp5dVejvlOD-Ry_L2FLNgYuWHyWCsV8fZXaOqDFnUpduA6HcfMNIzolNtnSlCMz6qb_6LUR9s2lvzm0bvhHJGPAZDRAEuL8GbpQOXtm51cYGQ96oevvvIHQNIISE5w3Lri29ANTaMQ6JRBajkECLmVpKrR1rw_Yx2sma2fVlA8LF9GYmrsDl_fp-CMRWXyJAslKCgAuhrLUTcixqIcOibErTeYumaqt6MwT3oFC7NG9kbYbqC9SGDYnCxqLBnT6Rc6iDYkwp7HTPnxFVdwB2-3afdTJ0jU5CJPZAGqVWuoAWPgERHC5hEJgz2b1sRLaGWPSxbNhndgodVEGpKS18NOPnJyyVZljexkS7UmfsmhyLp8EgFhyewGVafTPUQyTwft7iyrz4PbVsb8iXCgd3sjlQCy5ikvKZUUCeDbM61I0Sc0KfCSYs6A",
            'info'=>"Info sobre o professor",
            'photo'=>"https://avatars.githubusercontent.com/erikjhonatta"
        ];
            return view('teachers.show')->with($data);
        }
        else if($id == 'david'){
            $data = ['name'=> 'David Brito',
            'area'=>'Web Development',
            'email'=>'david.nrpg@gmail.com',
            'site'=>"#",
            'lattes'=>"#",
            'info'=>"Info sobre o professor",
            'photo'=>"https://avatars.githubusercontent.com/davidbr1to"
        ];
            return view('teachers.show')->with($data);
        }
        else if($id == 'rodrigao'){
            $data = ['name'=> 'Rodrigo Rocha',
            'area'=>'Software Engineering',
            'email'=>'rgcrocha@gmail.com',
            'site'=>"#",
            'lattes'=>"http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4240291H4&tokenCaptchar=03AGdBq27kdciMCtugF_Ec_QrsI0INkGcw30w7o5b2XKDNvadKXeSnjAqWVrppHomldPvbcq3s8yXZr9EUHGyqkUt--ADAcV66XTOL47pd69NLujjltV3zpaegHvvI5FYaEQUmWLTnfE_jr3TL39LZ4sTnIsGiyZuuQtvuBr-QWDPAH1Lhq_I6QMRq-ocdhkCBbzR99EDTy7rAsGk9q5hrDS7d-IyCZvNr5tCVXVeCz1-dx3eokqeDlEA3ybRZQHVjSuc96emySVb0Ky3cQ12QgeqeeeNFhtFUoyA6NCiT07VqBcnghVg_aQY9dJnv2qgBrKT-EBbVQtxat_uUotA5wIC_xPx_bbLwuYBKQRzR3EFyWMTacqcgWt2XbaOCQcxIS8JP6iFnLVQfjlnRUs2Pmclo9521F4fRiSKC0U8n0XBF5xwWlc6G8ZQV-DUVjnhkcj7yrdx3kkk-cMCP2jvftjDxqyuYqE9v7XXE3k_uwKNOrvf5bKZ2w3ly2b1pBqaY62V11T_BRSYahOBEPXgfsoJB0NGEh741Yw",
            'info'=>"Info sobre o professor",
            'photo'=>"https://avatars.githubusercontent.com/rgcrochaa",
        ];
            return view('teachers.show')->with($data);
        }
    }
}
