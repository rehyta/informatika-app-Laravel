@extends('layout.course')

@section('instruction')
<h2 class="center m-2">Tugas</h2>
<p> Andi mendapat nilai 73 dalam ujiannya. Sementara, 
    Syarat kelulusan adalah nilai yang diperoleh Andi harus lebih besar atau sama dengan 60.

    Buatlah program sederhana dalam bahasa pemrograman C++ untuk membantu Andi menentukan apakah 
    dia lulus atau tidak. Program harus menampilkan pesan "Anda lulus!" jika nilai lebih besar atau 
    sama dengan nilai KKM, atau pesan "Anda tidak lulus." jika nilai kurang dari KKM.
    <div class="contohbox border" style="border-radius: 15px">
        <div class="box m-5 bg-light" >
            <pre>
                #include <iostream>
                    using _______________;
                    
                    int main() {
                        // Deklarasi variabel
                        ___ nilaiUjian = _______________
                    
                        // Menentukan apakah Andi lulus atau tidak
                        if (nilaiUjian _______________) {
                            cout << "Anda lulus!" << endl;
                        } _______________ {
                            cout << "Anda tidak lulus.";
                        }
                    
                        return 0;
                    }
                    
            </pre>
        </div>
    </div>
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
          <a href="/midtest"><button type="button" class="btn btn-secondary bg-danger">NEXT</button></a>
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

                    if (response.output === "Nama beliau pak Suwarno. Beliau bekerja sebagai petani selama 12 tahun.") {
                        $('#successModal').modal('show');
                    }
                }
            });
        });
    });
    
</script>
@endsection