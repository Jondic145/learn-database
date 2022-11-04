<?php
// Jonathan Dicky - 2019110044
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        // No. 1
        $result = DB::select("SELECT * FROM employees");

        // No. 2
        // $result = DB::select("SELECT *  from employees WHERE YEAR (tanggal_masuk) < 2018");

        //No. 3
        // $result = DB::select("SELECT * FROM employees WHERE jabatan = 'Manajer' ");

        //No. 4
        // $result = DB::select("SELECT * FROM employees WHERE status='2'");S

        //No. 5
        // $result = DB::table('employees')->where('jabatan', 'Staf') ->where('status', '0')->get();

        //No. 6
        // $result = DB::select("SELECT * FROM employees WHERE nip LIKE 'GU%' AND year(tanggal_masuk) IN (2019,2020)");

        //No. 7
        //  $result = DB::select("SELECT COUNT (*) FROM employees");

        //No. 8
        // $result = DB::select("SELECT nama_pegawai,tanggal_masuk, DATEDIFF(CURDATE(),tanggal_masuk) hrkerja FROM employees ");

        //No. 9
        // $result = DB::select("SELECT LEFT(nip,2) divisi,COUNT(*) 'jmlorg' FROM employees GROUP BY LEFT(nip,2)");

        //No. 10

        //No. 11

        //No. 12
        //$result = DB::select("SELECT * FROM employees order BY tanggal_masuk LIMIT 1 ");

        //No. 13
        // $result = DB::select("SELECT * FROM employees order BY tanggal_masuk desc LIMIT 1 ");

        //No. 14
        // $result = DB::select("SELECT * FROM employees ORDER BY tanggal_lahir,tanggal_masuk");

        //No. 15
        // $result = DB::select("SELECT * FROM employees ORDER BY tanggal_lahir desc,tanggal_masuk ");

        //No. 16
        // $result = DB::select("SELECT LEFT(nip,2),COUNT(*) jml FROM employees GROUP BY LEFT(nip,2) ORDER BY jml LIMIT 1 ");

        //No. 17
        //$result = DB::select("SELECT LEFT(nip,2),COUNT(*) jml FROM employees GROUP BY LEFT(nip,2) ORDER BY jml desc LIMIT 1");

        //No. 18
        //$result = DB::select("SELECT LEFT(nip,2),STATUS,COUNT(*) jml_peg FROM employees GROUP BY LEFT(nip,2),STATUS");

        //No. 19
        // $result = DB::select("SELECT LEFT(nip,2),jabatan,COUNT(*) jml_peg FROM employees GROUP BY LEFT(nip,2),jabatan");

        //No. 20
        // $result = DB::select("SELECT year(CURDATE())-year(tanggal_lahir) umur, COUNT(*) jml_peg FROM employees GROUP BY year(CURDATE())-year(tanggal_lahir) HAVING  umur>24 AND umur<36");


        return view('employeeslist', ['employees' => $result]);
    }

    public function insert()
    {
        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'TI001',
                'Jonathan Dicky',
                '1980-05-17',
                'Manajer',
                '2020-03-17',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'TI002',
                'Rudy Salim',
                '1981-06-18',
                'Staf',
                '2017-04-18',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'TI003',
                'Duo Fauzi Nugraha',
                '1999-11-18',
                'Manajer',
                '2016-10-18',
                1,
            carbon::now(),
            carbon::now()

            ]
        );

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'TI004',
                'Doni Salamanan',
                '1999-09-20',
                'Staf',
                '2018-12-22',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'TI005',
                'Rocky Gerung',
                '1980-10-21',
                'Supervisor',
                '2011-12-22',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'KU001',
                'Tony Prakarsa',
                '1985-07-16',
                'Manajer',
                '2019-10-10',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'KU002',
                'Natasha Romanof',
                '1990-10-18',
                'Supervisor',
                '2011-04-10',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'KU003',
                'Kelvin Simatupang',
                '1995-03-20',
                'Staf',
                '2014-04-10',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'KU004',
                'Putri Delina',
                '1996-04-07',
                'Assistan Manajer',
                '2013-06-11',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'KU005',
                'Luigi Konsya',
                '1997-04-07',
                'Supervisor',
                '2013-05-10',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'MK001',
                'Tasya Karerina',
                '1998-05-21',
                'Staf',
                '2020-06-18',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'MK002',
                'Julian Surnyata',
                '1992-07-28',
                'Staf',
                '2019-07-19',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'MK003',
                'Uzumaki Naruto',
                '1995-09-12',
                'Assistant Manajer',
                '2016-10-05',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'MK004',
                'Uchiha Sasuke',
                '1996-05-15',
                'Manajer',
                '2015-09-11',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'MK005',
                'Roni Sinaga',
                '1990-06-28',
                'Assistant Manajer',
                '2017-10-14',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'PR001',
                'Mega Sulaiman',
                '1991-07-13',
                'Staf',
                '2018-08-16',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'PR002',
                'Erik Mario',
                '1985-11-25',
                'Staf',
                '2016-08-17',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);
        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'PR003',
                'Gavin Hutagalung',
                '1982-11-22',
                'Assistan Manajer',
                '2020-08-11',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);
        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'PR004',
                'Yefta Sedek',
                '1981-09-19',
                'Staf',
                '2018-10-18',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);
        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'PR005',
                'Aloysius Jonathan',
                '1985-06-18',
                'Kepala',
                '2020-09-18',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);


        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'GU001',
                'Stephani Putri',
                '1990-07-21',
                'Staf',
                '2019-10-18',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'GU002',
                'Lukas Graham',
                '1980-08-20',
                'Assistan Manajer',
                '2015-06-17',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'GU003',
                'Charles Wakwaw',
                '1989-08-20',
                'Assistant Manajer',
                '2013-04-17',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'GU004',
                'Carel Anthony',
                '1989-08-17',
                'Assistant Manajer',
                '2014-05-18',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'GU005',
                'Soepomo',
                '1980-06-14',
                'Kepala',
                '2019-10-18',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'DV001',
                'Tom Cruise',
                '1985-06-14',
                'Assistan Manajer',
                '2017-09-19',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'DV002',
                'Kevin Kornelius',
                '1990-08-15',
                'Manajer',
                '2019-09-19',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'DV003',
                'Joanna Gloria',
                '1985-08-15',
                'Manajer',
                '2020-09-19',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'DV004',
                'Christina Hutagaol',
                '1980-10-11',
                'Assistan Manajer',
                '2016-07-20',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);
        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'DV005',
                'Gordon Ramsay',
                '1985-09-14',
                'Staf',
                '2019-08-19',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);




    }

}
