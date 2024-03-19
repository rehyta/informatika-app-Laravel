@extends('layout.course')

@section('instruction')
<h2 class="center m-2">Tugas</h2>
<p> Seperti program "hello world",
    <div class="contohbox border m-3" style="border-radius: 15px">
        <div class="box m-1 bg-light" >
            <pre>
                #include <iostream>
                    using namespace std;
                    
                    int main() {
                        cout << "Hello World!";
                        return 0;
                    }
            </pre>
        </div>
    </div>
    Buatlah program di kotak input dengan code yang akan menghasilkan output :
    <div class="contohbox border m-3" style="border-radius: 15px">
        <div class="box m-1 bg-light" >
            <pre>
                saya sedang belajar informatika
                saya belajar dasar pemrograman
            </pre>
        </div>
    </div>
    setelah menulis kode, klik tombol <b>RUN</b> yang ada diatas kotak input untuk 
    menjalankan kode anda dan lihatlah hasil yang muncul di kotak output
</p>




@endsection

@section('code box')

@include('partials.compiler')

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Success!!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Kode anda berhasil!!!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="/course-3"><button type="button" class="btn btn-secondary bg-danger">NEXT</button></a>
        </div>
      </div>
    </div>
  </div>




<script>


    $(document).ready(function () {
        $('form').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (response) {
                    $('#output').val(JSON.stringify(response.output)) ;

                    if (response.output === "saya sedang belajar informatika saya belajar dasar pemrograman") {
                        $('#successModal').modal('show');
                    }
                }
            });
        });
    });
    
</script>
@endsection