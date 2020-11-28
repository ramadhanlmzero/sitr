<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $visitors = $this->countUniqueVisitor();
        $views = $this->countView();
        return view('index', compact('visitors', 'views'));
    }

    public function news($id)
    {
        $visitors = $this->countUniqueVisitor();
        $views = $this->countView();
        if($id == 1) {
            $title = "Dalegan Gresik, Desa Wisata Kelola Mandiri Yang Bertahan di Tengah Pandemi Covid-19";
            $date = "Minggu, 25 Oktober 2020 -  Pukul 10.15 WIB";
            $image = "assets/img/news-1.png";
            $content = "Desa Dalegan, desa ini terletak di Kecamatan Panceng, Kabupaten Gresik, Provinsi Jawa Timur. Desa yang memiliki ketinggian tanah 150 m – 1.500 m  di atas permukaan air laut sehingga menyebabkan topografi ketinggian desa berupa daratan sedang dan berbatasan langsung dengan laut utara jawa. Dalegan menjadi salah satu desa yang mandiri dalam pengelolaan pariwisatanya. Pariwisata yang dikelola langsung oleh aparatur desa. Salah satu pariwisata yang menonjol di Dalegan adalah Pantai Dalegan.
            <br><br>
            Pantai Delegan atau sering disebut dengan Wisata Pasir Putih (WPP) dibangun oleh Pemerintah Desa Dalegan pada Tahun 2001 dan dibuka untuk umum sejak tahun 2003, sempat berganti nama menjadi WISID (Wisata Indah Segoro Dalegan). Hanya dengan merogoh kocek sebesar Rp 10.000,- wisatawan dapat menikmati keindahan pantai berpasir putih ini serta melakukan berbagai macam aktivitas seperti berenang, bermain pasir, lomba perahu atau memancing. Untuk mengatur dan meyakinkan warganya, aparatur desa tidak mengalami kesusahan karena telah memiliki strategi tersendiri, salah satunya yaitu memberikan lowongan pekerjaan untuk warga sekitar desa yang pengangguran dengan cara melakukan pergantian setiap warga di masing-masing RT secara bergantian setiap hari dengan bayaran 90 ribu Rupiah per kepala setiap satu harinya. Hal ini dianggap solusi yang solutif untuk dapat menghindari adanya kecemburuan sosial antar warga.
            <br><br>
            Objek wisata yang banyak dipromosikan melalui sosial media kini semakin ramai pengunjung, dan memberi banyak keuntungan pada warganya. Banyak warga yang senang karena bisa menggunakannya sebagai lapangan pekerjaan, mulai jualan sampai penyedia fasilitas permainan. Desa mereka juga lebih dikenal dibanding sebelum adanya wisata tersebut. Namun, Berbeda dengan sebelumnya, pengelola kini menerapkan protokol kesehatan ketat. Sebelum masuk wisata, pengunjung diwajibkan bermasker dan cuci tangan, dilakukan cek suhu badan dengan Thermal gun serta Physical Distancing. Pengelola wisata Pantai Dalegan mengatakan sejak adanya pandemi Covid-19 wisatanya tutup selama tiga bulan dan mengalami kerugian hingga Rp 300 juta. Di era transisi new normal, aparatur desa optimis bahwa sektor wisata kembali bergairah, karena memang masyarakat membutuhkan wisata setelah imbuan mengharuskan di rumah selama pandemi.
            <br><br>
            <b>Sumber Referensi :</b>
            <br>
            https://disparbud.gresikkab.go.id/2020/08/05/pantai-dalegan/
            <br>
            https://www.kabargresik.com/2016/10/07/dalegan-desa-wisata-yang-mandiri/
            <br>
            https://www.timesindonesia.co.id/read/news/280195/pantai-dalegan-gresik-tetap-jadi-tujuan-wisata-di-tengah-pandemi-covid19";
        }
        if($id == 2) {
            $title = "Berita 2";
            $date = "-";
            $image = "assets/img/scenery-2.jpg";
            $content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisi vitae suscipit tellus mauris a. Elementum nibh tellus molestie nunc non blandit massa enim. Ipsum dolor sit amet consectetur adipiscing elit. In hac habitasse platea dictumst vestibulum rhoncus est. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Dignissim suspendisse in est ante in nibh mauris. Nisl nisi scelerisque eu ultrices vitae. Tempus egestas sed sed risus pretium quam. Commodo viverra maecenas accumsan lacus vel facilisis.
            <br><br>
            Massa eget egestas purus viverra. Quam quisque id diam vel quam elementum pulvinar etiam non. Faucibus pulvinar elementum integer enim neque. Dictum at tempor commodo ullamcorper a lacus. Nec feugiat in fermentum posuere urna nec tincidunt praesent semper. A diam maecenas sed enim ut sem. Ligula ullamcorper malesuada proin libero nunc consequat. Malesuada proin libero nunc consequat interdum. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. In iaculis nunc sed augue lacus. Arcu cursus euismod quis viverra.
            <br><br>
            Turpis egestas pretium aenean pharetra magna ac placerat vestibulum. Ac turpis egestas maecenas pharetra. Aenean vel elit scelerisque mauris pellentesque pulvinar. Amet dictum sit amet justo. In nulla posuere sollicitudin aliquam ultrices sagittis orci. Morbi tristique senectus et netus et malesuada fames ac. Adipiscing vitae proin sagittis nisl. Sit amet facilisis magna etiam tempor orci eu. Sed faucibus turpis in eu mi bibendum neque egestas congue. Sollicitudin ac orci phasellus egestas tellus rutrum tellus. Et malesuada fames ac turpis egestas. Tellus molestie nunc non blandit massa enim nec. Aliquam ut porttitor leo a diam sollicitudin tempor id. Tellus integer feugiat scelerisque varius morbi enim. Quis hendrerit dolor magna eget est lorem.
            <br><br>
            Augue interdum velit euismod in pellentesque massa placerat duis. Sit amet justo donec enim. Rutrum quisque non tellus orci ac auctor. Leo vel fringilla est ullamcorper eget nulla facilisi etiam dignissim. Malesuada fames ac turpis egestas integer eget aliquet. Blandit volutpat maecenas volutpat blandit. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Suspendisse potenti nullam ac tortor vitae purus faucibus. A diam sollicitudin tempor id eu nisl. Volutpat lacus laoreet non curabitur gravida arcu ac tortor. Sagittis id consectetur purus ut faucibus pulvinar.
            <br><br>
            Gravida rutrum quisque non tellus orci. Urna cursus eget nunc scelerisque viverra. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum. Viverra nam libero justo laoreet sit amet cursus sit amet. Est ullamcorper eget nulla facilisi etiam dignissim diam quis enim. Dictum at tempor commodo ullamcorper. Aliquam id diam maecenas ultricies mi. Amet volutpat consequat mauris nunc congue. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Integer enim neque volutpat ac tincidunt. Blandit cursus risus at ultrices mi. Lectus mauris ultrices eros in cursus turpis massa tincidunt dui.";
        }
        if($id == 3) {
            $title = "Berita 3";
            $date = "-";
            $image = "assets/img/scenery-3.jpg";
            $content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisi vitae suscipit tellus mauris a. Elementum nibh tellus molestie nunc non blandit massa enim. Ipsum dolor sit amet consectetur adipiscing elit. In hac habitasse platea dictumst vestibulum rhoncus est. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Dignissim suspendisse in est ante in nibh mauris. Nisl nisi scelerisque eu ultrices vitae. Tempus egestas sed sed risus pretium quam. Commodo viverra maecenas accumsan lacus vel facilisis.
            <br><br>
            Massa eget egestas purus viverra. Quam quisque id diam vel quam elementum pulvinar etiam non. Faucibus pulvinar elementum integer enim neque. Dictum at tempor commodo ullamcorper a lacus. Nec feugiat in fermentum posuere urna nec tincidunt praesent semper. A diam maecenas sed enim ut sem. Ligula ullamcorper malesuada proin libero nunc consequat. Malesuada proin libero nunc consequat interdum. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. In iaculis nunc sed augue lacus. Arcu cursus euismod quis viverra.
            <br><br>
            Turpis egestas pretium aenean pharetra magna ac placerat vestibulum. Ac turpis egestas maecenas pharetra. Aenean vel elit scelerisque mauris pellentesque pulvinar. Amet dictum sit amet justo. In nulla posuere sollicitudin aliquam ultrices sagittis orci. Morbi tristique senectus et netus et malesuada fames ac. Adipiscing vitae proin sagittis nisl. Sit amet facilisis magna etiam tempor orci eu. Sed faucibus turpis in eu mi bibendum neque egestas congue. Sollicitudin ac orci phasellus egestas tellus rutrum tellus. Et malesuada fames ac turpis egestas. Tellus molestie nunc non blandit massa enim nec. Aliquam ut porttitor leo a diam sollicitudin tempor id. Tellus integer feugiat scelerisque varius morbi enim. Quis hendrerit dolor magna eget est lorem.
            <br><br>
            Augue interdum velit euismod in pellentesque massa placerat duis. Sit amet justo donec enim. Rutrum quisque non tellus orci ac auctor. Leo vel fringilla est ullamcorper eget nulla facilisi etiam dignissim. Malesuada fames ac turpis egestas integer eget aliquet. Blandit volutpat maecenas volutpat blandit. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Suspendisse potenti nullam ac tortor vitae purus faucibus. A diam sollicitudin tempor id eu nisl. Volutpat lacus laoreet non curabitur gravida arcu ac tortor. Sagittis id consectetur purus ut faucibus pulvinar.
            <br><br>
            Gravida rutrum quisque non tellus orci. Urna cursus eget nunc scelerisque viverra. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum. Viverra nam libero justo laoreet sit amet cursus sit amet. Est ullamcorper eget nulla facilisi etiam dignissim diam quis enim. Dictum at tempor commodo ullamcorper. Aliquam id diam maecenas ultricies mi. Amet volutpat consequat mauris nunc congue. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Integer enim neque volutpat ac tincidunt. Blandit cursus risus at ultrices mi. Lectus mauris ultrices eros in cursus turpis massa tincidunt dui.";
        }
        if($id == 4) {
            $title = "Berita 4";
            $date = "-";
            $image = "assets/img/scenery-4.jpg";
            $content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisi vitae suscipit tellus mauris a. Elementum nibh tellus molestie nunc non blandit massa enim. Ipsum dolor sit amet consectetur adipiscing elit. In hac habitasse platea dictumst vestibulum rhoncus est. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Dignissim suspendisse in est ante in nibh mauris. Nisl nisi scelerisque eu ultrices vitae. Tempus egestas sed sed risus pretium quam. Commodo viverra maecenas accumsan lacus vel facilisis.
            <br><br>
            Massa eget egestas purus viverra. Quam quisque id diam vel quam elementum pulvinar etiam non. Faucibus pulvinar elementum integer enim neque. Dictum at tempor commodo ullamcorper a lacus. Nec feugiat in fermentum posuere urna nec tincidunt praesent semper. A diam maecenas sed enim ut sem. Ligula ullamcorper malesuada proin libero nunc consequat. Malesuada proin libero nunc consequat interdum. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. In iaculis nunc sed augue lacus. Arcu cursus euismod quis viverra.
            <br><br>
            Turpis egestas pretium aenean pharetra magna ac placerat vestibulum. Ac turpis egestas maecenas pharetra. Aenean vel elit scelerisque mauris pellentesque pulvinar. Amet dictum sit amet justo. In nulla posuere sollicitudin aliquam ultrices sagittis orci. Morbi tristique senectus et netus et malesuada fames ac. Adipiscing vitae proin sagittis nisl. Sit amet facilisis magna etiam tempor orci eu. Sed faucibus turpis in eu mi bibendum neque egestas congue. Sollicitudin ac orci phasellus egestas tellus rutrum tellus. Et malesuada fames ac turpis egestas. Tellus molestie nunc non blandit massa enim nec. Aliquam ut porttitor leo a diam sollicitudin tempor id. Tellus integer feugiat scelerisque varius morbi enim. Quis hendrerit dolor magna eget est lorem.
            <br><br>
            Augue interdum velit euismod in pellentesque massa placerat duis. Sit amet justo donec enim. Rutrum quisque non tellus orci ac auctor. Leo vel fringilla est ullamcorper eget nulla facilisi etiam dignissim. Malesuada fames ac turpis egestas integer eget aliquet. Blandit volutpat maecenas volutpat blandit. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Suspendisse potenti nullam ac tortor vitae purus faucibus. A diam sollicitudin tempor id eu nisl. Volutpat lacus laoreet non curabitur gravida arcu ac tortor. Sagittis id consectetur purus ut faucibus pulvinar.
            <br><br>
            Gravida rutrum quisque non tellus orci. Urna cursus eget nunc scelerisque viverra. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum. Viverra nam libero justo laoreet sit amet cursus sit amet. Est ullamcorper eget nulla facilisi etiam dignissim diam quis enim. Dictum at tempor commodo ullamcorper. Aliquam id diam maecenas ultricies mi. Amet volutpat consequat mauris nunc congue. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Integer enim neque volutpat ac tincidunt. Blandit cursus risus at ultrices mi. Lectus mauris ultrices eros in cursus turpis massa tincidunt dui.";
        }
        return view('news', compact('visitors', 'views', 'title', 'image', 'content', 'date'));
    }

    public function maps()
    {
        $visitors = $this->countUniqueVisitor();
        $views = $this->countView();
        return view('maps', compact('visitors', 'views'));
    }

    public function demographic()
    {
        $visitors = $this->countUniqueVisitor();
        $views = $this->countView();
        return view('demographic', compact('visitors', 'views'));
    }

    public function potential()
    {
        $visitors = $this->countUniqueVisitor();
        $views = $this->countView();
        return view('potential', compact('visitors', 'views'));
    }

    public function countView()
    {
        $filename = public_path() . '\views.txt';
        if(file_exists($filename)) {
            $value = file_get_contents($filename);
        }
        else {
            $value = 0;
        }
    
        file_put_contents($filename, ++$value);	
        $openfile = fopen($filename, "r");
        $view = ( int ) fread ($openfile,20);
        fclose($openfile);
        return $view;
    }
    
    public function countUniqueVisitor()
    {
        if(!isset($_SESSION['counter'])) {
            $filename = public_path() . '\visitors.txt';
            if(file_exists($filename)) {
                $visitor = file_get_contents($filename);
                ++$visitor;
                $_SESSION['counter'] = $visitor;
                return $visitor;
                file_put_contents($filename, $visitor);
            }
        }
        else {
            $visitor = $_SESSION['counter'];
            return $visitor;
        }
    }
}
