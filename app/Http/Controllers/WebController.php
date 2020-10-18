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
            $title = "Berita 1";
            $image = "assets/img/scenery-1.jpg";
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
        if($id == 2) {
            $title = "Berita 2";
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
        return view('news', compact('visitors', 'views', 'title', 'image', 'content'));
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
