@extends('layout.materi')

@section('page title')
<div class="container md-4 m-3">
    <div class="opening">
        <h2 style="font-size: 32px">Variable dan Tipe Data</h2>
        <p>Kita sudah belajar bagaimana menampilkan output. sekarang, bagaimana kalau kita mulai belajar
            tentang pemberian <a href="#variable">variable,</a> dan <a href="#tipeData">Tipe Data</a> pada program?
        </p>
    </div>
@endsection
@section('materi')
<div id="variable" style="font-size: 16px">
    <h2 style="font-size: 32px">Variable</h2>
    <p>jika diibaratkan sesuatu, Variable bisa diibaratkan seperti suatu 'wadah' yang menyimpan data. coba bayangkan sebuah keranjang buah.
        kemudian, bayangkan di dalam keranjang itu adalah berbagai jenis buah. dalam perumpaan ini, keranjang adalah variable dan buah-buahan adalah data. <br>
        jika dituliskan dalam data, contoh tersebut bisa dibuat seperti ini : <br>
        <div class="contohbox border p-0" style="border-radius: 15px">
            <div class="box bg-light" >
                <pre>

                    keranjang = apel, jeruk, pisang, melon
                </pre>
            </div>
        </div>
        namun dalam bahasa C++, ada aturan yang mengharuskan adanya penulisan <a href="#tipeData">Tipe Data</a> pada program. Jadi, aturan penulisan variable dalam C++ itu adalah
        <br>
        <div class="contohbox border p-0" style="border-radius: 15px">
            <div class="box bg-light" >
                <pre>
                    
                    TipeData NamaVariable = Data ;
                </pre>
            </div>
        </div>
        <div class="m-3 p-3 bg-info bg-opacity-10 border border-info">
            <p>jangan lupa selalu mengakhiri statement dengan titik koma (;)</p>
        </div>
    </p>
</div>

<div id="tipeData" style="font-size: 16px">
    <h2 style="font-size: 32px">Tipe Data</h2>
    <p>jika diibaratkan sesuatu, Variable bisa diibaratkan seperti suatu 'wadah' yang menyimpan data. coba bayangkan sebuah keranjang buah.
        kemudian, bayangkan di dalam keranjang itu adalah berbagai jenis buah. dalam perumpaan ini, keranjang adalah variable dan buah-buahan adalah data. <br>
        jika dituliskan dalam data, contoh tersebut bisa dibuat seperti ini : <br>
        <div class="contohbox border p-0" style="border-radius: 15px">
            <div class="box bg-light" >
                <pre>

                    keranjang = apel, jeruk, pisang, melon
                </pre>
            </div>
        </div>
        namun dalam bahasa C++, ada aturan yang mengharuskan adanya penulisan <a href="#tipeData">Tipe Data</a> lebih dulu, lalu diikuti nama variablenya. Jadi, aturan penulisan variable dalam C++ itu adalah :
        <br>
        <div class="contohbox border p-0" style="border-radius: 15px">
            <div class="box bg-light" >
                <pre>
                    
                    TipeData NamaVariable = Data ;
                </pre>
            </div>
        </div>
        <p>macam-macam tipe data yang umum digunakan bisa kita lihat pada tabel berikut. <br>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nama tipe data</th>
                    <th scope="col">Ukuran dalam Memori</th>
                    <th scope="col">Rentang Nilai</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Char</td>
                    <td>1 byte</td>
                    <td>-127 sampai 127 atau 0 sampai 255</td>
                  </tr>
                  <tr>
                    <td>int</td>
                    <td>4 bytes</td>
                    <td>-2147483648 sampai 2147483647</td>
                  </tr>
                  <tr>
                    <td>float</td>
                    <td>4 bytes</td>
                    <td>+/- 3.4e +/- 38 (~7 digits)</td>
                  </tr>
                  <tr>
                    <td>double</td>
                    <td>8 bytes</td>
                    <td>+/- 1.7e +/- 308 (~15 digits)</td>
                  </tr>
                  <tr>
                    <td>boolean</td>
                    <td>4 bytes</td>
                    <td><mark>true</mark> or <mark>false</mark></td>
                  </tr>

                </tbody>
            </table>
        </p>
        <div class="m-3 p-3 bg-info bg-opacity-10 border border-info">
            <p>kita bisa menggunakan tipe data <i>auto</i> sebagai placeholder untuk tipe data yang belum jelas</p>
        </div>
        <div class="m-3 p-3 bg-info bg-opacity-10 border border-info">
            <p>jangan lupa selalu mengakhiri statement dengan titik koma (;)</p>
        </div>
    </p>
</div>

<div class="contoh">

        <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
            <h5 class="mx-5 my-2">Contohnya jika memasukkan program :</h5>
            <div class="box m-5 bg-light" >
                <pre>
                    #include <iostream>

                        using namespace std;
                        
                        int main(){
                         
                          // deklarasi tipe data variabel
                          string nama = "Bu Rudi";
                          int umur = 43;
                         
                         
                          // --- proses output ---
                          cout << "Halo" << nama << " Selamat ulang tahun yang ke-";
                          cout << umur << endl;
                         
                          return 0;
                        
                        }
                </pre>
            </div>
        </div>
        <p>maka akan muncul output : </p>
        <pre> Halo Bu Rudi Selamat ulang tahun yang ke-43</pre>
        <p>ini dikarenakan variable nama menyimpan data berupa string "Bu Rudi" dan variable umur menyimpan data berupa interger (int) berupa angka 43 </p>
    </div>

    <form action="/course-3/livecode">
        <p>Bagaimana jika kita mencobanya? klik tombol <b>Next</b> untuk lanjut ke bagian berikutnya</p>
        <div class="d-grid gap-2 d-md-flex">
            <button class="btn btn-primary me-md-2 bg-danger" id="nextSection" type="submit">NEXT</button>
        </div>
    </form>
</div>

@endsection