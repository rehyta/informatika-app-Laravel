@extends('layout.materi')

<div id="content">
    @section('page title')
    <h2 style="font-size: 32px">Struktur Dasar C++</h2>
    <p>Nah... kita sudah belajar tentang dasar pemrograman. selanjutnya, kita kenali struktur dasar bahasa program C++</p>
    @endsection

    @section('materi')

    <div style="font-size: 16px">
    <p>Pada dasarnya, semua bahasa pemrograman itu sama saja. ada variable, operasi, loop, dll. namun, aturan penulisan (syntax) setiap bahasa
        pemrograman itu berbeda.
    </p>
    </div>
    <div style="font-size: 16px">
        <p>
            Dalam pemrograman C++, ada 3 unsur paling dasar dan sederhana yang terdiri dari : <br>
            <br>
            1. Bagian Include <br>
            <br>
            2. Bagian Namespace <br>
            <br>
            3. Bagian fungsi <br> 
        </p> 
        <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
            <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
            <div class="box m-5 bg-light" >
                <pre>
                    #include < iostream >
                    
                    using namespace std;
                                
                    int main(){
                        cout << "Hello world!" << endl;
                        return 0;
                    }
                </pre>
            </div>
        </div>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b> Bagian Include</b> Bagian ini mendefinisikan <i>library</i> apa saja yang akan digunakan dalam program. 
                pada contoh diatas, kita menggunakan library <mark>iostream</mark> (baris ke 1). library ini berisi fungsi-fungsi <mark> cout dan cin </mark> yang akan berguna
                untuk melakukan input dan output.</li>
                <li class="list-group-item"><b> Bagian Namespace</b> Bagian ini sebenarnya tidak wajib. Pada contoh diatas, kita menggunakan <mark> namespace std </mark> karena fungsi-fungsi <i>iostream</i> dibungkus dalam namespace std <br>
                apabila kita tidak menggunakan namespace std, maka untuk menggunakan fungsi <mark> cout dan cin </mark> yang tersedia dalam <i>iostream</i> harus diawali dengan <mark> std:: </mark><br>
                <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                    <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
                    <div class="box m-5 bg-light" >
                        <pre>
                            #include < iostream >
                                
                            int main(){
                            std::cout << "Hello world!" << endl;
                            return 0;
                            }
                        </pre>
                    </div>
                </div>
                <br>
                Jika tidak mau menggunakan <mark>std::</mark> terus menerus, maka gunakanlah <mark>std</mark> di <i>namespace</i></li>
                <li class="list-group-item"><b>Bagian fungsi</b> Bagian ini adalah bagian utama yang bersifat wajib. ini adalah bagian terpenting. disinilah kita akan menulis kode program.
                <br> pada contoh diatas, kita menggunakan fungsi <u>main.</u>
                fungsi <mark>main()</mark> adalah fungsi yang akan dieksekusi pertama saat program dibuka. selain fungsi <mark>main()</mark> kita bisa membuat fungsi lain.<br>
                <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                    <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
                    <div class="box m-5 bg-light" >
                        <pre>
                            #include < iostream >
                                using namespace std;
                                
                                int main(){
                                cout << "Hello world!" << endl;
                                return 0;
                                }
                                
                                void hai(){
                                cout << "Hello apa kabar?" << endl;
                                }
                        </pre>
                    </div>
                </div>
                </li>
            </ul>
        </p>
    </div>

    <div class="mt-3" style="font-size: 16px"> 
        <h2 style="font-size: 20">PENULISAN STATEMENT DAN KONDISI</h2>
        <p>Statement dan kondisi adalah kumpulan kode yang ditulis dalam bagian fungsi</p>
        <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
            <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
            <div class="box m-5 bg-light" >
                <pre>
                    #include < iostream >
                        using namespace std;
                        
                        int main(){
                        cout << "Hello world!" << endl;
                        cout << "Hari ini saya belajar c++" << endl;
                        cout << "Belajar C++ itu mudah";
                        return 0;
                        }
                </pre>
            </div>
        </div>
    </div>

    <div class="mt-3" style="font-size: 16px"> 
        <h2 style="font-size: 20">PENULISAN KOMENTAR</h2>
        <p>Komentar adalah bagian kode yang akan diabaikan dalam eksekusi. Ada dua cara menulis komentar dalam C++ : <br>
        1. menggunakan garis miring double (//) ini digunakan untuk memberikan komentar yang cuma sebaris</p>
        <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
            <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
            <div class="box m-5 bg-light" >
                <pre>
                    #include < iostream >
                        using namespace std;
                        //ini adalah komentar satu baris
                        int main(){
                        cout << "Hello world!" << endl;
                        return 0;
                        }
                </pre>
            </div>
        </div>
        2. menggunakan garis miring bintang (/**/) ini digunakan untuk memberikan komentar yang lebih dari sebaris</p>
        <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
            <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
            <div class="box m-5 bg-light" >
                <pre>
                    #include < iostream >
                        using namespace std;

                        /*saya membuat komentar yang lebih dari sebaris
                        setelah ini, saya akan membuat program sederhana 
                        menggunakan cout di dalam library iostream*/

                        int main(){
                        cout << "Hello world!" << endl;
                        return 0;
                        }
                </pre>
            </div>
        </div>
    </div>

    <form action="/course-2/livecode">
        <p>Bagaimana jika kita mencobanya? klik tombol <b>Next</b> untuk lanjut ke bagian berikutnya</p>
        <div class="d-grid gap-2 d-md-flex">
            <button class="btn btn-primary me-md-2 bg-danger" id="nextSection" type="submit">NEXT</button>
        </div>
    </form>
</div>




<div id="progress-bar"></div>







<script>
    document.addEventListener('DOMContentLoaded', function() {
        var progressBar = document.getElementById('progress-bar');
        var content = document.getElementById('content');

        // Tambahkan event listener untuk mengupdate progress saat scroll
        window.addEventListener('scroll', function() {
            var scrollHeight = content.scrollHeight - window.innerHeight;
            var scrollPosition = window.scrollY;
            var scrollPercentage = (scrollPosition / scrollHeight) * 100;

            updateProgress(scrollPercentage);
        });

        // Fungsi untuk mengupdate tampilan progress
        function updateProgress(percentage) {
            progressBar.style.width = percentage + '%';
            progressBar.style.display = 'block';

            // Tambahkan logika lain sesuai kebutuhan, misalnya menyimpan nilai ke database
            // atau menampilkan presentase dalam bentuk teks di tempat lain
        }
    });
</script>

@endsection

