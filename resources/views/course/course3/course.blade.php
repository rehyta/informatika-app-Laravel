@extends('layout.course')

@section('instruction')
<h2 class="center m-2">Tugas</h2>
<p> Buatlah program dengan variable ketentuan seperti :
    <div class="contohbox border" style="border-radius: 15px">
        <div class="box m-5 bg-light" >
            <pre>
                nama : Suwarno
                pekerjaan : petani
                lama bekerja : 12 tahun
            </pre>
        </div>
    </div>
    Buatlah output menjadi :
    <div class="contohbox border" style="border-radius: 15px">
        <div class="box m-5 bg-light" >
            <pre>
                "Nama beliau Pak Suwarno. 
                Beliau bekerja sebagai petani selama 12 tahun."
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
          <a href="/course-4"><button type="button" class="btn btn-secondary bg-danger">NEXT</button></a>
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